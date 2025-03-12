<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vente extends Model
{
    //
    protected $fillable = [ 'quantite', 'prix_total','date_commande','statut','client_id'];

    public function client() {
        return $this->belongsTo(Client::class);
    }
    public function DetailFacture() {
        return $this->hasMany(DetailFacture::class);
    }
}
