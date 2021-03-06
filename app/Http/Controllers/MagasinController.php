<?php

namespace App\Http\Controllers;

use App\Magasin;
use App\Produit;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MagasinController extends Controller
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
      $magasins = Magasin::orderby ('nom_magasin','asc')->paginate(30);
      return view('magasins.index', ['magasins' => $magasins, 'smartphones' => $smartphones, 'tablettes' => $tablettes, 'ordinateurs' => $ordinateurs]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      if (Auth::user()->isAdmin()) {
        return view('magasins.create');
      }
      else {
        return redirect('/');
      }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $magasin=Magasin::create($request->all());

      if($request->hasFile('image')){
        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->save(public_path('/img/photos/' . $filename));
        $magasin->image = $filename;
        $magasin->save();
    }
      return back()->with('status', 'Magasin crée avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Magasin  $magasin
     * @return \Illuminate\Http\Response
     */
    public function show(Magasin $magasin)
    {
      if (Auth::user()->isAdmin()) {
        return view('magasins.show',['magasin' => $magasin]);
      }
      else {
        return redirect('/');
      }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Magasin  $magasin
     * @return \Illuminate\Http\Response
     */
    public function edit(Magasin $magasin)
    {
        return view('magasins.edit',['magasin'=> $magasin]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Magasin  $magasin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Magasin $magasin)
    {

       $magasin->update($request->all());

       if($request->hasFile('image')){

         $image = $request->file('image');
         $filename = time() . '.' . $image->getClientOriginalExtension();
         Image::make($image)->save(public_path('/img/photos/' . $filename));
         $magasin->image = $filename;
         $magasin->save();

       }

      return back()->with('status', 'Modifications enregistrées');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Magasin  $magasin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Magasin $magasin)
    {
        $magasin->delete();
        return redirect('magasins')->with('status', 'Magasin supprimé avec succès');;
    }




}
