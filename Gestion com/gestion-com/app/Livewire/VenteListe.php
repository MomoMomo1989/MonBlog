<?php

namespace App\Livewire;
use App\Models\produit;
use Illuminate\Http\Request;
use Livewire\Component;

class VenteListe extends Component
{
    public function render()
    {
        // $vente = vente::where()
        return view('livewire.vente-liste',[
            
        ]);
    }

    public function StoreVente(){
        $produits=produit::all();
        return view('vente.venteShowAdd',[
            '$produits'=>$produits
        ]);
    }
}
