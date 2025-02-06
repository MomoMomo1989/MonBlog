<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    //
    protected $fillable = ['nom', 'email', 'telephone','credit'];

    public function ventes() {
        return $this->hasMany(Vente::class);
    }
}
