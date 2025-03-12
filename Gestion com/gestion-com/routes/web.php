<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ListeProduct;
use App\Livewire\ListeMarque;
use App\Livewire\ListeCategorie;
use App\Livewire\VenteListe;
use App\Http\Controllers\generalController;

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Produit
    route::get('Produit-Liste',[generalController::class,'ListeRenderProduct'])->name('product.show');
    route::get('Show-Add-Produit',[ListeProduct::class,'show'])->name('product.show.Add');
    route::post('Add-Produit',[ListeProduct::class,'store'])->name('product.store');
    route::post('delete-Produit',[ListeProduct::class,'delete'])->name('produit.supprime');
    
    // Marque
    route::get('Marque-Liste',[generalController::class,'ListeRenderMarque'])->name('Marque.show');
    route::get('Show-Add-Marque',[ListeMarque::class,'show'])->name('Marque.show.Add');
    route::post('store-Marque',[ListeMarque::class,'store'])->name('Marque.store');

    // Categorie
    route::get('categorie-Liste',[generalController::class,'ListeRenderCategorie'])->name('categorie.show');
    route::get('Show-Add-categorie',[ListeCategorie::class,'show'])->name('categorie.show.Add');
    route::post('store-categorie',[ListeCategorie::class,'store'])->name('categorie.store');

    // vente
    route::get('vente',[generalController::class,'showVente'])->name('vente.show');
    route::get('store',[VenteListe::class,'StoreVente'])->name('vente.show.Add');
    route::post('storeVente',[VenteListe::class,'Store'])->name('vente.add');
    
    //Retour en stock
    route::get('Retour',[generalController::class,'showRetour'])->name('retour.show');
    route::get('Update-Retour/{id}',[generalController::class,'UpdateRetour'])->name('vente.update');
    
    //client 
    route::get('Client',[generalController::class,'showClient'])->name('client.show');
    route::get('clients.create',[generalController::class,'clients_create'])->name('clients.create');
    route::patch('clients.edit/{id}',[generalController::class,'clients_edit'])->name('clients.edit');
    route::get('clients.destroy/{id}',[generalController::class,'clients_destroy'])->name('clients.destroy');
});
