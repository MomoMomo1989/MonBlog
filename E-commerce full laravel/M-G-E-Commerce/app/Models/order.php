<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    //
    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
        'unity',
        'price_ht',
        'price_ttc',
        'tax',
        'delivered',
    ];
}
