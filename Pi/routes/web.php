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
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'area'], function (){
    Route::get('listar','AreaController@listar')->middleware('auth');
    Route::get('formulario','AreaController@criar')->middleware('auth');
    Route::get('editar/{id}','AreaController@editar')->middleware('auth');
    Route::get('remover/{id}','AreaController@remover')->middleware('auth');
    Route::post('salvar','AreaController@salvar')->middleware('auth');
    Route::post('editar/salvar','AreaController@salvar')->middleware('auth');
});

Route::group(['prefix' => 'condominio'], function (){
    Route::get('listar','CondominioController@listar')->middleware('auth');
    Route::get('formulario','CondominioController@criar')->middleware('auth');
    Route::get('editar/{id}','CondominioController@editar')->middleware('auth');
    Route::get('remover/{id}','CondominioController@remover')->middleware('auth');
    Route::post('salvar','CondominioController@salvar')->middleware('auth');
    Route::post('editar/salvar','CondominioController@salvar')->middleware('auth');
    Route::get('verificar-cnpj/{cpnj}','CondominioController@verificarCnpj')->middleware('auth');
});

Route::group(['prefix' => 'morador'],function (){
    Route::get('listar','MoradorController@listar')->middleware('auth');
    Route::get('formulario','MoradorController@criar')->middleware('auth');
    Route::get('editar/{id}','MoradorController@editar')->middleware('auth');
    Route::get('remover/{id}','MoradorController@remover')->middleware('auth');
    Route::post('salvar','MoradorController@salvar')->middleware('auth');
    Route::post('editar/salvar','MoradorController@salvar')->middleware('auth');
    Route::get('verificar-email/{email}','MoradorController@verificarEmail')->middleware('auth');
    Route::get('verificar-cpf/{cpf}','MoradorController@verificarCpf')->middleware('auth');
    Route::get('verificar-placa/{placa}','MoradorController@verificarPlaca')->middleware('auth');
});

Route::group(['prefix' => 'reserva'], function (){
    Route::get('listar','ReservaController@listar')->middleware('auth');
    Route::get('formulario','ReservaController@criar')->middleware('auth');
    Route::get('editar/{id}','ReservaController@editar')->middleware('auth');
    Route::get('remover/{id}','ReservaController@remover')->middleware('auth');
    Route::post('salvar','ReservaController@salvar')->middleware('auth');
    Route::post('editar/salvar','ReservaController@salvar')->middleware('auth');
});

Route::group(['prefix' => 'unidade'], function (){
    Route::get('listar','UnidadeController@listar')->middleware('auth');
    Route::get('formulario','UnidadeController@criar')->middleware('auth');
    Route::get('editar/{id}','UnidadeController@editar')->middleware('auth');
    Route::get('remover/{id}','UnidadeController@remover')->middleware('auth');
    Route::post('salvar','UnidadeController@salvar')->middleware('auth');
    Route::post('editar/salvar','UnidadeController@salvar')->middleware('auth');
    Route::get('verificar-email/{email}','UnidadeController@verificarEmail')->middleware('auth');
});

Route::group(['prefix' => 'visitante'], function (){
    Route::get('listar','VisitanteController@listar')->middleware('auth');
    Route::get('formulario','VisitanteController@criar')->middleware('auth');
    Route::get('editar/{id}','VisitanteController@editar')->middleware('auth');
    Route::get('remover/{id}','VisitanteController@remover')->middleware('auth');
    Route::post('salvar','VisitanteController@salvar')->middleware('auth');
    Route::post('editar/salvar','VisitanteController@salvar')->middleware('auth');
    Route::get('verificar-email/{email}','VisitanteController@verificarEmail')->middleware('auth');
    Route::get('verificar-rg/{rg}','VisitanteController@verificarRg')->middleware('auth');
});
