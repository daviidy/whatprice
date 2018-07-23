<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Magasin extends Model
{
    //
    protected $fillable = ['nom_magasin', 'localisation', 'contact', 'image'];

    public function produits()
    {
        return $this->belongsToMany('App\Produit');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Categorie');
    }
}
