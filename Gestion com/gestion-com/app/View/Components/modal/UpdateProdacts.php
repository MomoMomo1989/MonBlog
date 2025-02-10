<?php

namespace App\View\Components\modal;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\produit;
use App\Models\categorie;
use App\Models\brand;

class UpdateProdacts extends Component
{
    public $id;
    /**
     * Create a new component instance.
     */
    public function __construct($id)
    {
        //
        $this->id=$id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $categories = categorie::all();
        $brands = brand::all();
        $produit = produit::where('id',  $this->id )
        ->get()->first();
        return view('components.modal.update-prodacts',[
            'produit' => $produit,
            'brands'=>$brands,
            'categories'=>$categories,
        ]);
    }
}
