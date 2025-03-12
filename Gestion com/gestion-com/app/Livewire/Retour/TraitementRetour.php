<?php

namespace App\Livewire\Retour;
use App\Models\produit;
use Livewire\Component;
use App\Models\vente;
use App\Models\DetailFacture;
use Illuminate\Support\Facades\DB;

class TraitementRetour extends Component
{
    public $detailVentes;
    public $totleTTC;
    public $IDproduitDel=[];
    public $detailventeHis;
    public $NouveauProduit=[];
    public $codeBar;
    public $qte;
    public $produit;

    public function mount($detailVentes, $vents)
    { 
        $this->detailventeHis = $this->detailVentes;
        $this->detailVentes = $detailVentes;
        $this->totleTTC = $vents; // Le total initial est basé sur la vente
    }
    public function afficheNewAdd() {
        
        // Recherche du produit par code-barres
        $this->produit = produit::where('barcode', $this->codeBar)->get()->first();
    
        // Vérification de l'existence du produit
        if (!$this->produit) {
            $this->erreur = "Aucun produit trouvé avec ce code-barres.";
            return;
        }
        
        // Vérification du stock
        if ($this->produit->quantite_stock < $this->qte) {
            $this->erreur = "Stock insuffisant";
            return;
        }
        
        // Ajout du produit à la liste des nouveaux produits
        $this->NouveauProduit[] = [
            'id' => $this->produit->id,
            'nom' => $this->produit->nom,
            'prix_vente' => $this->produit->prix_vente,
            'quantite' => $this->qte,
            'sous_total' => $this->produit->prix_vente * $this->qte,
        ];
        
        // Mise à jour du total TTC
        $this->totleTTC += $this->produit->prix_vente * $this->qte;
    
        // Réinitialisation des champs
        $this->qte = 0;
        $this->codeBar = "";
    }
    public function productDelete($id){
        $index = array_search($id, array_column($this->detailVentes, 'id'));
        if ($index !== false){
            if (isset($this->detailVentes[$index]['sous_total'])) {
                $this->IDproduitDel[] = $this->detailVentes[$index]['id'];
                $this->totleTTC -= $this->detailVentes[$index]['sous_total'];
                unset($this->detailVentes[$index]);
            }
        }
        // dd($this->detailVentes);
        
    }
    public function updateDatabase() {
        DB::beginTransaction();
        try {
            //  Ajouter les nouveaux produits dans la table `detail_facture` et mettre à jour le stock
            foreach ($this->NouveauProduit as $produit) {
                DetailFacture::create([
                    'vente_id' => $this->detailVentes[0]['vente_id'],
                    'produit_id' => $produit['id'],
                    'quantite' => $produit['quantite'],
                    'prix_unitaire' => $produit['prix_vente'],
                    'sous_total' => $produit['sous_total'],
                ]);
    
                //  Réduire le stock du produit
                $produitDB = Produit::find($produit['id']);
                if ($produitDB) {
                    $produitDB->quantite -= $produit['quantite'];
                    $produitDB->save();
                }
            }
    
            //  Supprimer les produits retournés et réajouter le stock
            foreach ($this->IDproduitDel as $produitId) {
                // Récupérer la quantité supprimée
                $detail = DetailFacture::where('vente_id', $this->detailVentes[0]['vente_id'])
                                        ->where('produit_id', $produitId)
                                        ->first();
    
                if ($detail) {
                    //  Réajouter au stock du produit
                    $produitDB = Produit::find($produitId);
                    if ($produitDB) {
                        $produitDB->quantite += $detail->quantite;
                        $produitDB->save();
                    }
    
                    //  Supprimer le produit du détail de la facture
                    $detail->delete();
                }
            }
    
            //  Recalculer le total TTC de la vente
            $totalTTC = DetailFacture::where('vente_id', $this->detailVentes[0]['vente_id'])->sum('sous_total');
    
            //  Mettre à jour le total dans `vente`
            Vente::where('id', $this->detailVentes[0]['vente_id'])->update(['prix_total' => $totalTTC]);
    
            DB::commit();
    
            //  Réinitialiser les tableaux
            $this->NouveauProduit = [];
            $this->IDproduitDel = [];
    
            session()->flash('message', 'Facture et stock mis à jour avec succès.');
        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('error', 'Erreur lors de la mise à jour : ' . $e->getMessage());
        }
    }
    
    public function render()
    {
        return view('livewire.retour.traitement-retour');
    }
}
