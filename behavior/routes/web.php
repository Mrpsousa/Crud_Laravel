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



Route::get('/', function () {
    return view('form');
});

Route::view('/form', 'form');

/*
Route::verbo_http('URI', 'Controller@método');
step by step = definir rota(routs/web) -> criar controlador -cria-se 1x -(app/http/controllers) -> criação do método(in controllers) -> camada view(resoucers/views)
- Básicos -
Route::get($uri, $callback);
Route::post($uri, $callback);

- Verbos de Atualização-
Route::put($uri, $callback); se o registo que está sendo atualizado não existe, o "put" o cria
Route::patch($uri, $callback); se o registo que está sendo atualizado não existe, o "patch" não o cria - simplismente atualiza

- in comming-
Route::delete($uri, $callback);
Route::options($uri, $callback);
*/

Route::get('/users/{id}', 'UserController@index');
Route::get('/getData', 'UserController@getData');
Route::post('/postData', 'UserController@postData');

Route::put('/users/{id}', 'UserController@testPut');

