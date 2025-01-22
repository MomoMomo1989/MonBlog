<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Increment;

Route::get('/', function () {
    return view('welcome');
});
Route::get('test', Increment::class);
