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

Route::get('/main', function () {
    return view('main');
});

Route::get('/cobaias_', function () {
    return view('cobaias');
});

Route::get('/cientistas', function () {
    return view('cientistas');
});

Route::get('/militares', function () {
    return view('militares');
});




Route::get('/cobaias', 'CobaiaController@listar');
Route::get('/cobaiaCadastrar', 'CobaiaController@cadastrar');
Route::post('/cobaia/salvar/{id}', 'CobaiaController@salvar');
Route::get('/cobaia/editar/{id}', 'CobaiaController@editar');
Route::get('/cobaia/deletar/{id}', 'CobaiaController@deletar');
Route::post('/cobaia/buscar/', 'CobaiaController@buscar');

Route::get('/cientistas', 'CientistasController@listar');
Route::get('/cientistaCadastrar', 'CientistasController@cadastrar');
Route::post('/cientista/salvar/{id}', 'CientistasController@salvar');
Route::get('/cientista/editar/{id}', 'CientistasController@editar');
Route::get('/cientista/deletar/{id}', 'CientistasController@deletar');
Route::post('/cientista/buscar/', 'CientistasController@buscar');
