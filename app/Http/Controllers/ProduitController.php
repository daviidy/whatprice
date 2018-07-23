<?php

namespace App\Http\Controllers;

use App\Produit;
use App\Categorie;
use App\Magasin;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits = Produit::orderby ('prix','asc')->paginate(30);
        return view('produits.index', ['produits' => $produits]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::orderby ('nom_categorie','asc')->paginate(30);
        $magasins = Magasin::orderby ('nom_magasin','asc')->paginate(30);
        return view('produits.create', ['categories' => $categories, 'magasins' => $magasins]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $produit=Produit::create([
                        'marque' => $request['marque'],
                        'serie' => $request['serie'],
                        'prix' => $request['prix'],
                        'categorie_id' => $request['categorie_id'],
                      ]);

      if($request->hasFile('image')){
        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->save(public_path('/img/photos/' . $filename));
        $produit->image = $filename;
        $produit->save();
    }
    $magasin = Magasin::find($request['magasin_id']);
    $produit->magasins()->attach($magasin);


      return back()->with('status', 'Produit crée avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function show(Produit $produit)
    {
        return view('produits.show',['produit' => $produit]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit(Produit $produit)
    {
        return view('produits.edit',['produit'=> $produit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produit $produit)
    {

       $produit->update($request->all());

       if($request->hasFile('image')){

         $image = $request->file('image');
         $filename = time() . '.' . $image->getClientOriginalExtension();
         Image::make($image)->save(public_path('/img/photos/' . $filename));
         $produit->image = $filename;
         $produit->save();

       }

      return back()->with('status', 'Modifications enregistrées');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit $produit)
    {
        $produit->delete();
        return redirect('produits')->with('status', 'Produit supprimé avec succès');;
    }




}
