<?php

namespace App\Livewire;

use Livewire\Component;

class ListeProduct extends Component
{
    public function render()
    {
        return view('livewire.liste-product');
    }

    
    public function show()
    {
        return view('product.add-product');
    }


    public function store(Request $request){
       
    }
}
