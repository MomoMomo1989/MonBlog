<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\produit;

class AngletVente extends Component
{
    public $produit;
    public $codeBar;
    public $qte;
    public $erreur;
    public $produitStock=[];
    public $totleTTC;

public function recuperProduit(){
    $this->produit = $this->codeBar;
    $produit = produit::orWhere('barcode', 'like', '%' . $this->produit . '%')
        ->get()->first();
            if (!$produit) {
                $this->erreur = "Aucun produit trouvé avec ce code-barres.";
            return;
            }         
    if ($this->qte < $produit->quantite_stock) {
        $this->produitStock[] = [
            'id'=> $produit->id,
            'nom' => $produit->nom,
            'prix_vente' => $produit->prix_vente,
            'quantite' => $this->qte,
            'total' => $produit->prix_vente * $this->qte ,
        ];
        
        $this->totleTTC= $this->totleTTC+($produit->prix_vente * $this->qte);
        $this->qte=0;
        $this->codeBar="";
        // dd($this->produitStock,$produit,$this->totleTTC);
    } else {

         $this->erreur = "La quantité demandée dépasse la quantité en stock. Stock disponible : " . $produit->quantite_stock;
         
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
