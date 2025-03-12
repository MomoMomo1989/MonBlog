<?php

namespace App\Livewire;
use App\Models\produit;
use App\Models\vente;
use Illuminate\Http\Request;
use Livewire\Component;

class VenteListe extends Component
{
    public function render()
    {

         $ventes = vente::with('client')->orderBy('id','desc')->get();
        //  dd($ventes);
        return view('livewire.vente-liste',[
            'ventes'=>$ventes
        ]);
    }

    public function StoreVente(){
        $produits=produit::all();
        return view('vente.venteShowAdd',[
            '$produits'=>$produits
        ]);
    }
    
}
