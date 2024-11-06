<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    //
    protected $fillable = [
        'name',
        'brand_slug',
        'image',
    ];

    public function produit(){
        return $this->hasMany(produit::class);
    }
}
