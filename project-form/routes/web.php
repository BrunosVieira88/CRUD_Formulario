<?php

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



Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@indexHome');
Route::get('/formulario', 'FormularioController@index');
Route::get('/resultado', 'FormularioController@retornaIndex');
Route::post('/cadastro/formulario', 'FormularioController@recebe');
