<?php

namespace App\Livewire\Retour;
use App\Models\vente; 

use Livewire\Component;

class RetourEnStock extends Component
{
    public function render()
    {
        $ventes = vente::with('client')->orderBy('id','desc')->get();
        return view('livewire.retour.retour-en-stock',[
            'ventes'=>$ventes
        ]);
    }
}
