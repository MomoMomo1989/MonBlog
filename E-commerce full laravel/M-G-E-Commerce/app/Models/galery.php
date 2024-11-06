<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class galery extends Model
{
    //
    protected $fillable = [
        'produit_id',
        'image',
    ];
    public function produit(){
        return $this->belongsTo(produit::class);
    }
}
