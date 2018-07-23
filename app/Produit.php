<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    //
    protected $fillable = ['marque', 'serie', 'prix', 'image', 'categorie_id'];

    public function categorie()
    {
        return $this->belongsTo('App\Categorie');
    }

    public function magasins()
    {
        return $this->belongsToMany('App\Magasin');
    }
}
