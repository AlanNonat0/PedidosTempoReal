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

/** Chekout CheckoutController routes */
Route::get('/checkout', "App\Http\Controllers\CheckoutController@index")->name('app.order.index');
Route::post('/checkout/finalizar', "App\Http\Controllers\CheckoutController@endOrder")->name('app.chekout.finish');

/** Search SearchController routes */
Route::get('/checkout/search', "App\Http\Controllers\SearchController@search")->name('app.checkout.search');

/** adicionar OrderProductscontroller routes */
Route::get('/checkout/adicionar/{id}', "App\Http\Controllers\OrderProductsController@addProductsToOrder")->name('app.chekout.add');

/** Cozinha */
Route::get('/cozinha', "App\Http\Controllers\KitchenController@index")->name('app.kitchen');

/** Pedido Pronto (Saida) */
Route::get('/saida', "App\Http\Controllers\ReadyOrderController@index")->name('app.readyorder.index');
