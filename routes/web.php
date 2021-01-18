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

Route::get('/', 'HomeController@index');

Route::get('chamado/create', 'ChamadoController@create')->name('chamado.create');
Route::post('chamado/', 'ChamadoController@store');

Route::get('usuario/create', 'UsuarioController@create')->name('usuario.create');
Route::post('usuario', 'UsuarioController@store');

Route::get('cliente/create', 'ClienteController@create')->name('cliente.create');
Route::post('cliente', 'ClienteController@store');


