<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\brand;

class ListeMarque extends Component
{
    public $search;
    public function render()
    {
        $brands = brand::all();
        return view('livewire.liste-marque',[
            'brands' => $brands ,
        ]);
    }
    public function searchBrands()
    {
        dd($this->search);
        // Récupérer les marques filtrées
        $brands = Brand::where('nom', 'like', '%' . $this->search . '%')->get();

        // Retourner les résultats
        return view('livewire.liste-marque',[
            'brands' => $brands ,
        ]);
    }

    public function show()
    {
        $brands = brand::all();
        return view('marque.marque-produit-add',[
            'brands' => $brands ,
        ]);
    }
    public function store(Request $request){
        // Validation
        // dd($request);
        $request->validate([
            'nom' => 'required|unique:brands,nom',
        ]);

        // Création de la marque
        $brand = Brand::create([
            'nom' => $request->nom,
        ]);
        // Stocker le message de succès dans la session
            session()->flash('success', 'Marque ajoutée avec succès !');

    // Rediriger vers la vue
       return redirect()->route('Marque.show.Add');
        
    }
}
