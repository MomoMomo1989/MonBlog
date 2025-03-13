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
    public $erreur;
    public $idVente;
    public function mount($detailVentes, $vents)
    { 
        
        $this->detailVentes = $detailVentes;
        $this->totleTTC = $vents; // Le total initial est basé sur la vente
        $this->detailventeHis = $this->detailVentes;
        $this->idVente = $this->detailventeHis[1]['vente_id'];
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
    public function productDelete($id)
    {
        // dd($id,$this->detailVentes);
        $index = array_search($id, array_column($this->detailVentes,'produit', 'id'));
        
        if ($index !== false) {
            dd($id,$this->detailVentes);
            if (!empty($this->detailVentes[$index]['sous_total'])) {
                // Stocker l'ID du produit supprimé au lieu de l'index
                $this->IDproduitDel[] = $id;
    
                // Mise à jour du total TTC
                $this->totleTTC -= $this->detailVentes[$index]['sous_total'];
                
                // Suppression et réindexation du tableau
                unset($this->detailVentes[$index]);
                $this->detailVentes = array_values($this->detailVentes);

            }
        }
    }
    public function updateDatabase() {
        DB::beginTransaction();
        try { 
            //  Ajouter les nouveaux produits dans la table `detail_facture` et mettre à jour le stock
            foreach ($this->NouveauProduit as $produit) {
                
                DetailFacture::create([
                    'vente_id' => $this->idVente,
                    'produit_id' => $produit['id'],
                    'quantite' => $produit['quantite'],
                    'prix_unitaire' => $produit['prix_vente'],
                    'sous_total' => $produit['sous_total'],
                ]);
                
                //  Réduire le stock du produit
                $produitDB = Produit::find($produit['id']);
                
                if ($produitDB) {
                    $produitDB->quantite_stock -= $produit['quantite'];
                    $produitDB->save();
                }
            }
    
            //  Supprimer les produits retournés et réajouter le stock
            
            foreach ($this->IDproduitDel as $produitId) {
                dd($this->IDproduitDel);
                // Récupérer la quantité supprimée
                $detail = DetailFacture::where('vente_id', $this->idVente)
                                        ->where('produit_id', $produitId)
                                        ->first();
                                        // dd($this->idVente,$produitId,$detail);
                if ($detail) {
                    //  Réajouter au stock du produit
                    $produitDB = Produit::find($produitId);
                    dd($produitDB);
                    if ($produitDB) {
                        $produitDB->quantite_stock += $detail->quantite;
                        $produitDB->save();
                    }
    
                    //  Supprimer le produit du détail de la facture
                    $detail->delete();
                }
            }
    
            //  Recalculer le total TTC de la vente
            $totalTTC = DetailFacture::where('vente_id', $this->idVente)->sum('sous_total');
    
            //  Mettre à jour le total dans `vente`
            Vente::where('id', $this->idVente)->update(['prix_total' => $totalTTC]);
    
            DB::commit();
    
            //  Réinitialiser les tableaux
            $this->NouveauProduit = [];
            $this->IDproduitDel = [];
    
            session()->flash('success', 'Facture et stock mis à jour avec succès.');
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
