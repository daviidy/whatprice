<?php

use App\Categorie;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategorieController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $categories=Categories::orderby('nom', 'asc')->paginate(10);
        return view('Categories.index' , ['categories'=>$categories] ) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Categories.create' , ['categories'=>$magasins] );
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
        return redirect('categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Magasin  $magasin
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $categorie)
    {
        
        return view('Categories.show' , ['categorie'=>$categorie] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Magasin  $magasin
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $categorie)
    {
        return view('Categories.edit' , ['categorie'=>$categorie] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Magasin  $magasin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorie $categorie)
    {
        $categorie->update($request->all());
        return redirect('categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Magasin  $magasin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $categorie)
    {
        $categorie->delete();
        return redirect('categories');
    }
}
