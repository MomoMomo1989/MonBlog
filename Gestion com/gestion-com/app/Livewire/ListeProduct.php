<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\categorie;
use App\Models\brand;
use App\Models\produit;

class ListeProduct extends Component
{

    public $search='';
    public function render()
    {
        $produit = produit::where('nom', 'like', '%' . $this->search . '%')
        ->orderBy('id','desc')
        ->with('categorie')
        ->with('brand')
        ->get();
        return view('livewire.liste-product',[
            'produit'=>$produit,
        ]);
    }
    
    public function searchProduct()
    {
        // dd($this->search);
        $produit = produit::where('nom', 'like', '%' . $this->search . '%')
        ->orderBy('id','desc')
        ->with('categorie')
        ->with('brand')
        ->get();
    }
    
    public function show()
    {
        $produit = produit::orderBy('id','desc')->get();
        $categories = categorie::all();
        $brands = brand::all();
        return view('product.add-product',[
            'brands'=>$brands,
            'categories'=>$categories,
            'produit'=>$produit,
        ]);
    }



    public function store(Request $request){
       // Validation
        // dd($request);
        $request->validate([
            'nom' => 'required',
            'prix_achat'=> 'required',
            'prix_vente'=> 'required',
            'quantite_stock'=> 'required',
            'categorie_id'=> 'required',
            'brand_id'=> 'required',
            'barcode' => 'required',
        ]);

        // Création de la marque
        $produit = produit::create([
            'nom' => $request->nom,
            'description'=> $request->description,
            'prix_achat'=> $request->prix_achat,
            'prix_vente'=> $request->prix_vente,
            'quantite_stock'=> $request->quantite_stock,
            'categorie_id'=> $request->categorie_id,
            'brand_id'=> $request->brand_id,
            'barcode'=> $request->barcode
        ]);
        // Stocker le message de succès dans la session
            $produit = produit::orderBy('id','asc')->get();
            $categories = categorie::all();
            $brands = brand::all();
            session()->flash('success', 'Produit ajoutée avec succès !');
        return view('product.add-product',[
                'brands'=>$brands,
                'categories'=>$categories,
                'produit'=>$produit,
            ]);
    }
}
