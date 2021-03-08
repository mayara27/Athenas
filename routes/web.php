<?php

use Illuminate\Support\Facades\Route;
Route::get('pdf', 'HorarioController@geraPdf');
Route::post('horario/horarioInfo', 'HorarioController@horarioInfo')->name('horario.horarioInfo');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@login')->name('login.login');

Route::get('logout', 'LoginController@logout')->name('login.logout');


Route::middleware(['auth', 'is-admin'])->group(function() {
    Route::resource('users', 'UserController');
    Route::get('users/{id}/edit', 'UserController@edit')->name('user.edit');
    Route::put('users/{id}/update', 'UserController@update')->name('user.update');
    
Route::get('usuario/show', 'UsuarioController@show')->name('usuario.show');
Route::get('usuario/create', 'UsuarioController@create')->name('usuario.create');
Route::post('usuario', 'UsuarioController@store');
Route::delete('usuario/destroy/{id}', 'UsuarioController@destroy')->name('usuario.destroy');
Route::get('usuario/{id}/edit', 'UsuarioController@edit')->name('usuario.edit');
Route::put('usuario/{id}/update', 'UsuarioController@update')->name('usuario.update');
Route::post('usuario/{id}/info', 'UsuarioController@info')->name('usuario.info');
});

Route::middleware('auth')->group(function() {

Route::get('horario/index', 'HorarioController@index')->name('horario.index');
Route::get('horario/search', 'HorarioController@search')->name('horario.search');
Route::post('horario/{id}/info', 'HorarioController@info')->name('horario.info');

Route::post('chamado/{id}/info', 'ChamadoController@info')->name('chamado.info');
Route::post('chamado/info/{id}', 'ChamadoController@concluir')->name('chamado.concluir');
Route::get('chamado/show', 'ChamadoController@show')->name('chamado.show');
Route::get('chamado/create', 'ChamadoController@create')->name('chamado.create');
Route::post('chamado/', 'ChamadoController@store');
Route::put('chamado/{id}/update', 'ChamadoController@update')->name('chamado.update');

Route::get('cliente/show', 'ClienteController@show')->name('cliente.show');
Route::get('cliente/create', 'ClienteController@create')->name('cliente.create');
Route::post('cliente', 'ClienteController@store');
Route::delete('cliente/destroy/{id}', 'ClienteController@destroy')->name('cliente.destroy');
Route::get('cliente/{id}/edit', 'ClienteController@edit')->name('cliente.edit');
Route::put('cliente/{id}/update', 'ClienteController@update')->name('cliente.update');
Route::post('cliente/{id}/info', 'ClienteController@info')->name('cliente.info');

});