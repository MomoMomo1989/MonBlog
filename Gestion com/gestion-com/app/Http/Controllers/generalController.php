<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailFacture;
use App\Models\vente;

class generalController extends Controller
{
    //
    public function ListeRenderProduct(){
        return view('product.listeProduitsShow');
    }
    public function ListeRenderMarque(){
        return view('marque.listeMarques');
    }
    public function ListeRenderCategorie(){
        return view('categorie.listeCategories');
    }
    public function showVente(){
        return view('vente.vente-show');
    }
    public function showRetour(){
        return view('Retour.vente_retour');
    }
    public function UpdateRetour($id){
        $vents = vente::where('id',$id)->get()->first();
        $detailVente = DetailFacture::where('vente_id',$id)
        ->with('produit')
        ->get()->toArray();
        // dd($vents);
        return view('Retour.update_retour',[
            'detailVentes' => $detailVente,
            'vents'=>$vents->prix_total
        ]);
    }  
    public function showClient(){
        
        return view('client.client_liste');
    } 
    
}
