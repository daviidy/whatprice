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
      return view('bonjour', ['produits' => $produits]);
    }
}