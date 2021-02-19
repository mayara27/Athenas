<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');

Route::get('horario/index', 'HorarioController@index')->name('horario.index');
Route::get('horario/search', 'HorarioController@search')->name('horario.search');


Route::post('chamado/{id}/info', 'ChamadoController@info')->name('chamado.info');
Route::post('chamado/info/{id}', 'ChamadoController@concluir')->name('chamado.concluir');
Route::get('chamado/show', 'ChamadoController@show')->name('chamado.show');
Route::get('chamado/create', 'ChamadoController@create')->name('chamado.create');
Route::post('chamado/', 'ChamadoController@store');
Route::put('chamado/{id}/update', 'ChamadoController@update')->name('chamado.update');


Route::get('usuario/show', 'UsuarioController@show')->name('usuario.show');
Route::get('usuario/create', 'UsuarioController@create')->name('usuario.create');
Route::post('usuario', 'UsuarioController@store');
Route::delete('usuario/destroy/{id}', 'UsuarioController@destroy')->name('usuario.destroy');
Route::get('usuario/{id}/edit', 'UsuarioController@edit')->name('usuario.edit');
Route::put('usuario/{id}/update', 'UsuarioController@update')->name('usuario.update');
Route::post('usuario/{id}/info', 'UsuarioController@info')->name('usuario.info');


Route::get('cliente/show', 'ClienteController@show')->name('cliente.show');
Route::get('cliente/create', 'ClienteController@create')->name('cliente.create');
Route::post('cliente', 'ClienteController@store');
Route::delete('cliente/destroy/{id}', 'ClienteController@destroy')->name('cliente.destroy');
Route::get('cliente/{id}/edit', 'ClienteController@edit')->name('cliente.edit');
Route::put('cliente/{id}/update', 'ClienteController@update')->name('cliente.update');
Route::post('cliente/{id}/info', 'ClienteController@info')->name('cliente.info');





