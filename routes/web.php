<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');

Route::post('chamado/{id}/info', 'ChamadoController@info')->name('chamado.info');
Route::get('chamado/show', 'ChamadoController@show')->name('chamado.show');
Route::get('chamado/create', 'ChamadoController@create')->name('chamado.create');
Route::post('chamado/', 'ChamadoController@store');

Route::get('usuario/show', 'UsuarioController@show')->name('usuario.show');
Route::get('usuario/create', 'UsuarioController@create')->name('usuario.create');
Route::post('usuario', 'UsuarioController@store');
Route::delete('usuario/destroy/{id}', 'UsuarioController@destroy')->name('usuario.destroy');


Route::get('cliente/show', 'ClienteController@show')->name('cliente.show');
Route::get('cliente/create', 'ClienteController@create')->name('cliente.create');
Route::post('cliente', 'ClienteController@store');
Route::delete('cliente/destroy/{id}', 'ClienteController@destroy')->name('cliente.destroy');
Route::get('cliente/{id}/update', 'ClienteController@edit')->name('cliente.edit');
Route::put('cliente', 'ClienteController@update')->name('cliente.update');





