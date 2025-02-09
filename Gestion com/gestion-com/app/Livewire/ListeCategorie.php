<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\categorie;

class ListeCategorie extends Component
{
    

    public $search ;

    public function searchfUNCT()
    {
        $categories = categorie::where('nom', 'like', '%' . $this->search . '%')->get(); 
    }
    public function render()
    {
        $categories = categorie::where('nom', 'like', '%' . $this->search . '%')->get();
        return view('livewire.liste-categorie',[
            'categories' => $categories,
        ]);
    }
    public function show()
    {
        return view('categorie.categorie-produit-add');
    }
    public function store(Request $request){
        // Validation
       
        $request->validate([
            'nom' => 'required|unique:brands,nom',
        ]);

        // Création de la marque
        $brand = categorie::create([
            'nom' => $request->nom,
        ]);
        // Stocker le message de succès dans la session
            session()->flash('success', 'Marque ajoutée avec succès !');

    // Rediriger vers la vue
       return redirect()->route('categorie.categorie-produit-Add');
    }
}
