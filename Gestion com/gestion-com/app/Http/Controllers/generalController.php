<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
