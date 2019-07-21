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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'ProductController@index')->name('welcome');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/panier', 'CartController@index')->name('panier');
Route::get('/produits1', 'ProductsController@index1')->name('products1');
Route::get('/produits2', 'ProductsController@index2')->name('products2');
Route::get('/produits3', 'ProductsController@index3')->name('products3');


