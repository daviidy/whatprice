<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;
use App\Categorie;
use App\Magasin;
use Input;

class SearchController extends Controller
{
  public function searchSmartphones(){

    $q = Input::get('q');
    if ($q != "") {
      $user = Produit::where('categorie_id', '1')->where('serie', 'LIKE', '%' . $q . '%')
                    ->orWhere('marque', 'LIKE', '%' . $q . '%')
                    ->get()
                    ->sortBy('prix');

                    if (count($user) > 0) {
                      $smartphones = Produit::orderby ('prix','asc')->where('categorie_id', '1')->paginate(30);
                      $tablettes = Produit::orderby ('prix','asc')->where('categorie_id', '2')->paginate(30);
                      $ordinateurs = Produit::orderby ('prix','asc')->where('categorie_id', '3')->paginate(30);
                      return view('produits.smartphones', ['smartphones' => $smartphones, 'tablettes' => $tablettes, 'ordinateurs' => $ordinateurs])->withDetails($user)->withQuery($q);;
                    }
    }

    $smartphones = Produit::orderby ('prix','asc')->where('categorie_id', '1')->paginate(30);
    $tablettes = Produit::orderby ('prix','asc')->where('categorie_id', '2')->paginate(30);
    $ordinateurs = Produit::orderby ('prix','asc')->where('categorie_id', '3')->paginate(30);
    return view('produits.smartphones', ['smartphones' => $smartphones, 'tablettes' => $tablettes, 'ordinateurs' => $ordinateurs])->withMessage("Aucun produit trouvé !");

  }


  public function searchTablettes(){

    $q = Input::get('q');
    if ($q != "") {
      $user = Produit::where('categorie_id', '2')->where('serie', 'LIKE', '%' . $q . '%')
                    ->orWhere('marque', 'LIKE', '%' . $q . '%')
                    ->get()
                    ->sortBy('prix');

                    if (count($user) > 0) {
                      $smartphones = Produit::orderby ('prix','asc')->where('categorie_id', '1')->paginate(30);
                      $tablettes = Produit::orderby ('prix','asc')->where('categorie_id', '2')->paginate(30);
                      $ordinateurs = Produit::orderby ('prix','asc')->where('categorie_id', '3')->paginate(30);
                      return view('produits.tablettes', ['smartphones' => $smartphones, 'tablettes' => $tablettes, 'ordinateurs' => $ordinateurs])->withDetails($user)->withQuery($q);;
                    }
    }

    $smartphones = Produit::orderby ('prix','asc')->where('categorie_id', '1')->paginate(30);
    $tablettes = Produit::orderby ('prix','asc')->where('categorie_id', '2')->paginate(30);
    $ordinateurs = Produit::orderby ('prix','asc')->where('categorie_id', '3')->paginate(30);
    return view('produits.tablettes', ['smartphones' => $smartphones, 'tablettes' => $tablettes, 'ordinateurs' => $ordinateurs])->withMessage("Aucun produit trouvé !");

  }


  public function searchOrdinateurs(){

    $q = Input::get('q');
    if ($q != "") {
      $user = Produit::where('categorie_id', '3')->where('serie', 'LIKE', '%' . $q . '%')
                    ->orWhere('marque', 'LIKE', '%' . $q . '%')
                    ->get()
                    ->sortBy('prix');

                    if (count($user) > 0) {
                      $smartphones = Produit::orderby ('prix','asc')->where('categorie_id', '1')->paginate(30);
                      $tablettes = Produit::orderby ('prix','asc')->where('categorie_id', '2')->paginate(30);
                      $ordinateurs = Produit::orderby ('prix','asc')->where('categorie_id', '3')->paginate(30);
                      return view('produits.ordinateurs', ['smartphones' => $smartphones, 'tablettes' => $tablettes, 'ordinateurs' => $ordinateurs])->withDetails($user)->withQuery($q);;
                    }
    }

    $smartphones = Produit::orderby ('prix','asc')->where('categorie_id', '1')->paginate(30);
    $tablettes = Produit::orderby ('prix','asc')->where('categorie_id', '2')->paginate(30);
    $ordinateurs = Produit::orderby ('prix','asc')->where('categorie_id', '3')->paginate(30);
    return view('produits.ordinateurs', ['smartphones' => $smartphones, 'tablettes' => $tablettes, 'ordinateurs' => $ordinateurs])->withMessage("Aucun produit trouvé !");

  }






}
