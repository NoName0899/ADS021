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
    Route::get('/','MoradorController@listar');
    Route::get('listar','MoradorController@listar');
    Route::get('formulario','MoradorController@criar');
    Route::get('editar/{id}','MoradorController@editar');
    Route::get('remover/{id}','MoradorController@remover');
    Route::post('salvar','MoradorController@salvar');
    Route::post('editar/salvar','MoradorController@salvar');
});
