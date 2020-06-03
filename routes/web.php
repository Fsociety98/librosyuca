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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'PanelLibrosController@index')->name('PanelLibros');
Route::get('/gratis', 'PanelLibrosController@gratis')->name('PanelLibrosGratis');
Route::get('/popular', 'PanelLibrosController@popular')->name('PanelLibrosPopular');
Route::get('/reciente', 'PanelLibrosController@reciente')->name('PanelLibrosReciente');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//autores
//Route::get('/autores', 'AutoresController@index')->name('autores');
//Route::get('/autores/create', 'AutoresController@create')->name('autores_create');
Route::resource('autores','AutoresController');

//libros
Route::resource('libros','LibrosController');

//clasificaciones
Route::resource('clasificaciones','ClasificacionesController');
