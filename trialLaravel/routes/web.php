<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'PagesController@home'); 
Route::get('/about', 'PagesController@about');

// product

Route::get('/product', 'ProductsController@index');
Route::get('/product/create', 'ProductsController@create');
Route::get('/product/{product}', 'ProductsController@show');
Route::post('/product', 'ProductsController@store');
Route::delete('/product/{product}', 'ProductsController@destroy');
Route::get('/product/{product}/edit', 'ProductsController@edit');
Route::patch('/product/{product}', 'ProductsController@update');
