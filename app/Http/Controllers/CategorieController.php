<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Produit;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $smartphones = Produit::orderby ('prix','asc')->where('categorie_id', '1')->paginate(30);
      $tablettes = Produit::orderby ('prix','asc')->where('categorie_id', '2')->paginate(30);
      $ordinateurs = Produit::orderby ('prix','asc')->where('categorie_id', '3')->paginate(30);
        $categories = Categorie::orderby ('nom_categorie','asc')->paginate(30);
        return view('categories.index', ['categories' => $categories, 'smartphones' => $smartphones, 'tablettes' => $tablettes, 'ordinateurs' => $ordinateurs]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $categorie=Categorie::create($request->all());

      if($request->hasFile('image')){
        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->save(public_path('/img/photos/' . $filename));
        $categorie->image = $filename;
        $categorie->save();
    }
      return back()->with('status', 'Catégorie créée avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $categorie)
    {
        return view('categories.show',['categorie' => $categorie]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $categorie)
    {
        return view('categories.edit',['categorie'=> $categorie]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorie $categorie)
    {

       $categorie->update($request->all());

       if($request->hasFile('image')){

         $image = $request->file('image');
         $filename = time() . '.' . $image->getClientOriginalExtension();
         Image::make($image)->save(public_path('/img/photos/' . $filename));
         $categorie->image = $filename;
         $categorie->save();

       }

      return back()->with('status', 'Modifications enregistrées');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $categorie)
    {
        $categorie->delete();
        return redirect('categories')->with('status', 'Categorie supprimée avec succès');;
    }




}
