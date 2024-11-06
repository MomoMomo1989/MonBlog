<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    //
    protected $fillable = [
            'product_description',
            'product_price',
            'product_disponibility',
            'product_pics',
            'product_qte_stock',
    ];
    public function user(){
        return $this->belongsToMany(user::class,'order')
               ->withPivot('quantity','unity','price_ht','price_ttc','tax','delivered')
               ->withTimestemps();
    }
}
