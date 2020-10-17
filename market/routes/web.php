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
Route::get('/admin','HomeController@indexView');
Route::get('/urun-ekle','ProductController@productCreateView');
Route::post('/urun-kaydet','ProductController@productCreate');
Route::get('/market','ProductController@indexView');
Route::get('/sepet-ekle/{product}','CartController@addcart')->name('cart.add')->middleware('auth');
Route::get('/sepet','CartController@index')->name('cart.index')->middleware('auth');
Route::get('/sepet/sil/{itemId}','CartController@destroy')->name('cart.destroy')->middleware('auth');
Route::get('/sepet/guncelle/{itemId}','CartController@update')->name('cart.update')->middleware('auth');
Route::get('/sepet/kontrol','CartController@checkout')->name('cart.checkout')->middleware('auth');
Route::resource('orders','OrderController')->middleware(auth());


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/mail', 'HomeController@indexMail');
