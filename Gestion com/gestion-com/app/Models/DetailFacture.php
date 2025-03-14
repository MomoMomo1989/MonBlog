<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailFacture extends Model
{
    //
    protected $fillable = [
        'vente_id',
        'produit_id',
        'quantite',
        'prix_unitaire',
        'sous_total',
    ];

    // Relation avec la commande
    public function vente()
    {
        return $this->belongsTo(vente::class, 'vente_id');
    }

    // Relation avec le produit
    public function produit()
    {
        return $this->belongsTo(Produit::class, 'produit_id');
    }
}
