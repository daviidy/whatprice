<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $produits = Produit::orderby ('prix','asc')->paginate(30);

      $smartphones = Produit::orderby ('prix','asc')->where('categorie_id', '1')->paginate(30);
      $tablettes = Produit::orderby ('prix','asc')->where('categorie_id', '2')->paginate(30);
      $ordinateurs = Produit::orderby ('prix','asc')->where('categorie_id', '3')->paginate(30);
      return view('produits.index', ['produits' => $produits, 'smartphones' => $smartphones, 'tablettes' => $tablettes, 'ordinateurs' => $ordinateurs]);
    }

    
}
