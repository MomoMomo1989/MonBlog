<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    //
    protected $fillable = [
        'image',
        'description',
        'title',
        'sous_titre',
        'tag',
    ];
}
