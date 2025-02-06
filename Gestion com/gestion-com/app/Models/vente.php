<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vente extends Model
{
    //
    protected $fillable = ['produit_id', 'quantite', 'prix_total', 'client_id'];

    public function produit() {
        return $this->belongsTo(Produit::class);
    }

    public function client() {
        return $this->belongsTo(Client::class);
    }
}
