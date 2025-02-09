<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ListeProduct;
use App\Livewire\ListeMarque;
use App\Livewire\ListeCategorie;
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

});
