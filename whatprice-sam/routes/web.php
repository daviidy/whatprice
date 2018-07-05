<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () 
    {
    	return view('index');
	}
);


Route::resource('produits', 'ProduitController');
Route::get('/produits/create', function () 
    {
    	return view('produits.create');
	}
);
Route::get('/produits/index', function () 
    {
    	return view('produits.index');
	}
);

Route::get('/produits/edit', function () 
    {
    	return view('produits.edit');
	}
);
Route::get('/produits/show', function () 
    {
    	return view('produits.show');
	}
);
Route::resource('magasins' , 'MagasinController');
Route::get('/magasins/create', function () 
    {
    	return view('magasins.create');
	}
);
Route::get('/magasins/edit', function () 
    {
    	return view('magasins.edit');
	}
);
Route::get('/magasins/show', function () 
    {
    	return view('magasins.show');
	}
);
Route::resource('categories' , 'CategorieController');
Route::get('/categories/create', function () 
    {
    	return view('categories.create');
	}
);
Route::get('/categories/edit', function () 
    {
    	return view('categories.edit');
	}
);
Route::get('/categories/show', function () 
    {
    	return view('categories.show');
	}
);
