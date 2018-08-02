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

Route::get('/', 'ProduitController@home')->name('home');

Route::get('/contact', function () {
    return view('bonjour');
})->name('contact');

Route::resource('produits','ProduitController');
Route::resource('categories','CategorieController');
Route::resource('magasins','MagasinController');

Route::post('/searchProduit', 'SearchController@searchProduit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');

Route::get('/marchand', 'MarchandController@marchand')
    ->middleware('is_marchand')
    ->name('marchand');
