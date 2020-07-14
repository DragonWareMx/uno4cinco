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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/','paginaInicioController@index')->name('inicio');
Route::get('/contacto','paginaInicioController@contacto')->name('contacto');
Route::get('/quienes-somos','paginaInicioController@sobreNosotros')->name('sobreNosotros');
Route::get('/registro','paginaInicioController@registro')->name('registro');
Route::get('/blogs/{id}','paginaBlogsController@index')->name('blogs'); 
Route::get('/blog/{id}','paginaBlogsController@show')->name('blog');
Route::get('/tienda-novedades','paginaTiendaController@index')->name('tiendaNovedades');
Route::get('/libro/{id}','paginaTiendaController@libro')->name('libro');
Route::get('/autores-uno4cinco','paginaAutoresController@uno4cinco')->name('autoresUno4cinco');
Route::get('/autores-145','paginaAutoresController@autores145')->name('autores145');
Route::get('/autor-leer/{id}','paginaAutoresController@index')->name('autor');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/adminuno4cinco',function(){
    return view('gestor.inicio'); 
})->name('gestorInicio')->middleware('auth');