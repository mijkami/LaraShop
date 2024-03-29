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
Route::get('/cutecats', 'ProductController@index1')->name('cutecats');
Route::get('/sportscats', 'ProductController@index2')->name('sportscats');
Route::get('/lolcats', 'ProductController@index3')->name('lolcats');

Route::get('addtocart/{id}', 'ProductController@addToCart');
Route::patch('update-cart', 'ProductController@update')->name('update-cart');
Route::delete('remove-from-cart', 'ProductController@remove')->name('remove-from-cart');

Route::get('/products/pdf', 'ProductController@export_pdf');
Route::get('exportPDF','ProductController@viewPDF');
