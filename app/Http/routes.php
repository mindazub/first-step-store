<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'ProductsController@index');

Route::resource('products', 'ProductsController');	

// Route::get('/products/{id}', 'ProductsController@show');
// Route::post('/products/{id}', 'ProductsController@update');
// Route::get('/products/{id}/edit', 'ProductsController@edit');


Route::get('/home', 'HomeController@index');

Route::get('/search', 'HomeController@search');

Route::auth();