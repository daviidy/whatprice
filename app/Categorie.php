<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    //
    protected $fillable = ['nom_categorie'];

    public function produits()
    {
        return $this->hasMany('App\Produit');
    }

    public function magasins()
    {
        return $this->belongsToMany('App\Magasin');
    }
}
