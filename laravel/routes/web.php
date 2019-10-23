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

Route::get('/', function () {return view('welcome');});
Route::get('teste', function () {return view('morador/teste');});

Route::group(['prefix' => 'morador'],function (){
    Route::get('listar','MoradorController@listar');
    Route::get('criar','MoradorController@criar');
    Route::get('{id}/editar','MoradorController@editar');
    Route::get('{id}/remover','MoradorController@remover');
    Route::post('salvar','MoradorController@listar');
});
