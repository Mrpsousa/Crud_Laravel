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

/*
Route::get('/', function () {
    return view('welcome');
});
*/
//posts/create.../show
Route::resource('/', 'PostController');
Route::get('/sem1', 'PostController@sem1');
Route::get('/sem2', 'PostController@sem2');
Route::get('/sem3', 'PostController@sem3');
Route::get('/sem4', 'PostController@sem4');
Route::get('/sem5', 'PostController@sem5');
Route::get('/sem6', 'PostController@sem6');
Route::get('/sem7', 'PostController@sem7');
Route::get('/sem8', 'PostController@sem8');
Route::get('/opt', 'PostController@opt');

