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

Route::resource('/', "App\Http\Controllers\HomeController");
Route::resource('/checkout', "App\Http\Controllers\OrderController");
Route::get('/cozinha', "App\Http\Controllers\KitchenController@index");
