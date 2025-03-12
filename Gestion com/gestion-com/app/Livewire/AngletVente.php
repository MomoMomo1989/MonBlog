<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\produit;
use App\Models\vente;
use App\Models\DetailFacture;
use Illuminate\Support\Facades\DB;

class AngletVente extends Component
{
    public $produit;
    public $codeBar;
    public $qte;
    public $erreur;
    public $produitStock=[];
    public $totleTTC;

    public function recuperProduit()
    {
        $this->produit = $this->codeBar;
        $produit = produit::where('barcode', 'like', '%' . $this->produit . '%')->first();
    
        if (!$produit) {
            $this->erreur = "Aucun produit trouvé avec ce code-barres.";
            return;
        }
    
        // Vérifier si le produit est déjà dans le panier
        $existe = false;
        foreach ($this->produitStock as &$item) {
            if ($item['id'] == $produit->id) {
                if ($item['quantite'] + $this->qte <= $produit->quantite_stock) {
                    $item['quantite'] += $this->qte;
                    $item['total'] = $item['quantite'] * $item['prix_vente'];
                    $this->totleTTC += ($produit->prix_vente * $this->qte);
                } else {
                    $this->erreur = "Stock insuffisant pour ce produit.";
                }
                $existe = true;
                break;
            }
        }
    
        // Ajouter un nouveau produit s'il n'existe pas déjà dans le panier
        if (!$existe) {
            if ($this->qte <= $produit->quantite_stock) {
                $this->produitStock[] = [
                    'id' => $produit->id,
                    'nom' => $produit->nom,
                    'prix_vente' => $produit->prix_vente,
                    'quantite' => $this->qte,
                    'total' => $produit->prix_vente * $this->qte,
                ];
                $this->totleTTC += ($produit->prix_vente * $this->qte);
            } else {
                $this->erreur = "La quantité demandée dépasse la quantité en stock.";
            }
        }
    
        $this->qte = 0;
        $this->codeBar = "";
    }
 public function supprimerProduit($index)
    {
        if (isset($this->produitStock[$index])) {
            // Déduire le total du produit supprimé
            $this->totleTTC -= $this->produitStock[$index]['total'];

            // Supprimer l'élément du tableau
            array_splice($this->produitStock, $index, 1);
        }
    }
public function Store(){

        if (empty($this->produitStock)) {
            $this->erreur = "Aucun produit à enregistrer.";
            return;
        }
        $totalArticles = array_sum(array_column($this->produitStock, 'quantite'));

        DB::beginTransaction();
    try {
        // Enregistrement de la vente
        $vente = Vente::create([
            'prix_total' => $this->totleTTC,
            'date_commande' => now(),
            'client_id' => 1,
            'statut'=>1,
            'quantite'=>$totalArticles
        ]);

        // Enregistrement des produits vendus
        foreach ($this->produitStock as $produit) {
            DetailFacture::create([
                'vente_id' => $vente->id,
                'produit_id' => $produit['id'],
                'quantite' => $produit['quantite'],
                'prix_unitaire' => $produit['prix_vente'],
                'sous_total' => $produit['total'],
            ]);

            // Mettre à jour le stock
            $produitDB = produit::find($produit['id']);
            if ($produitDB) {
                $produitDB->quantite_stock -= $produit['quantite'];
                $produitDB->save();
            }
        }

        DB::commit();
        $this->produitStock = [];
        $this->totleTTC = 0;
        session()->flash('message', 'Vente enregistrée avec succès !');
    } catch (\Exception $e) {
        DB::rollBack();
        $this->erreur = "Erreur lors de l'enregistrement : " . $e->getMessage();
    }

}
    public function render()
    {
        $produit = produit::orWhere('barcode', 'like', '%' . $this->produit . '%')
                 ->get()->first();
        return view('livewire.anglet-vente',[
            'produits'=>$produit,
        ]);
    }
}
