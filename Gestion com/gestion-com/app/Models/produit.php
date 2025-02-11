<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produit extends Model
{
    //
    protected $fillable = [
        'nom', 
        'description',
        'prix_achat',
        'prix_vente',
        'quantite_stock',
        'categorie_id',
        'brand_id',
        'barcode'
    ];

    public function categorie() {
        return $this->belongsTo(Categorie::class);
    }

    public function brand() {
        return $this->belongsTo(Brand::class);
    }
    public function DetailFacture() {
        return $this->hasMany(DetailFacture::class);
    }
}
