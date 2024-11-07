<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControlle;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/inscription',[UserControlle::class, 'showRegister'])->name('register');
Route::post('store_inscription',[UserControlle::class, 'storeregister'])->name('storeregister');
Route::get('/login',[UserControlle::class, 'showLogin'])->name('Login');
Route::post('store_Login',[UserControlle::class, 'storeLogin'])->name('storeLogin');
Route::get('/Home',[UserControlle::class,'home'])->name('home');
Route::post('LogOut',[UserControlle::class,'logOut'])->name('LogOut');