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

Route::get('/', 'InicioController')->name('inicio.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::middleware(['auth'])->group(function () {
    Route::get('/productos','ProductoController@index')->name('productos.index');
    Route::get('/productos/create','ProductoController@create')->name('productos.create');
    Route::post('/productos','ProductoController@store')->name('productos.store');
    Route::get('/productos{producto}','ProductoController@show')->name('productos.show');
    Route::get('/productos{producto}/edit','ProductoController@edit')->name('productos.edit');
    Route::put('/productos{producto}','ProductoController@update')->name('productos.update');
    Route::delete('/productos{producto}','ProductoController@destroy')->name('productos.destroy');
});

Route::get('/productos{producto}/comprar','ProductoController@comprar')->name('productos.comprar');