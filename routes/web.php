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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cart', 'CartController@index')->name('cart');
Route::put('/cart_item/{id}', 'CartItemController@update')->name('cartUpdate');
Route::get('/cart_item/{id}', 'CartItemController@destroy')->name('cartDelete');
Route::post('/addToCart', 'CartItemController@store')->name('addToCart');
Route::get('/profile', 'Auth\ProfileController@show')->name('profile');
Route::put('/profile', 'Auth\ProfileController@update')->name('profile.update');
