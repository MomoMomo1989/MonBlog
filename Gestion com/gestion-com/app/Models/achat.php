<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class achat extends Model
{
    //
    protected $fillable = ['produit_id', 'quantite', 'prix_total'];

    public function produit() {
        return $this->belongsTo(Produit::class);
    }
}
