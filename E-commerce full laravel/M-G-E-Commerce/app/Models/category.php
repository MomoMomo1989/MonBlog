<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //
    protected $fillable = [
        'name',
        'image',
        'category_slug'
    ];
    public function produit(){
        return $this->hasMany(produit::class);
    }
}
