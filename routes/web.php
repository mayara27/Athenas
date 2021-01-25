<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');

Route::get('chamado/show', 'ChamadoController@show')->name('chamado.show');
Route::get('chamado/create', 'ChamadoController@create')->name('chamado.create');
Route::post('chamado/', 'ChamadoController@store');

Route::get('usuario/show', 'UsuarioController@show')->name('usuario.show');
Route::get('usuario/create', 'UsuarioController@create')->name('usuario.create');
Route::post('usuario', 'UsuarioController@store');

Route::get('cliente/show', 'ClienteController@show')->name('cliente.show');
Route::get('cliente/create', 'ClienteController@create')->name('cliente.create');
Route::post('cliente', 'ClienteController@store');


