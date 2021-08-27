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

/** Home */
Route::resource('/', "App\Http\Controllers\HomeController");

/** Chekout */
Route::get('/checkout', "App\Http\Controllers\OrderController@index");
Route::get('/checkout/search', "App\Http\Controllers\OrderController@search")->name('app.checkout.search');

/** Cozinha */
Route::get('/cozinha', "App\Http\Controllers\KitchenController@index")->name('app.kitchen');
