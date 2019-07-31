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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
 *  Product Routes
 */
Route::group(['middleware' => ['auth']], function () {
    Route::get('/product-list', 'products\ProductsController@productListing');
    Route::get('/add', 'products\ProductsController@addproduct');
    Route::post('/addpro', 'products\ProductsController@addpro');

});



