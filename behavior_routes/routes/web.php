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



/*Route::get('/', function () {
    return view('form');
});

Route::view('/form', 'form');
*/
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

/* next step, do  better
Route::get('/users/{id}', 'UserController@index');
Route::get('/getData', 'UserController@getData');
Route::post('/postData', 'UserController@postData');

Route::put('/users/{id}', 'UserController@testPut');
Route::patch('/users/1', 'UserController@testPatch');

Route::match(['put', 'patch'], '/users/2', 'UserController@testMatch');

Route::delete('/users/1', 'UserController@destroy');
*/

/* //rota "geral" (possui todas as rodas)
Route::resource('posts', 'PostController');
*/

/* usando Closure (não indicado)
Route::get('/users', function(){
    echo "Funciona...";
});
*/

/* callback = caso  seja "invocado"  uma  rota que não exista (usando Closure)
Route::fallback(function(){
    echo "Essa rota não existe, desculpe.";
});
*/

/* rota de redirecionamento:: redirect = 3 parametros = rota de origem, destino, código de retorno (301 - código de redirecionamento)
Route::redirect('/user/add', url('/form'), 301);
*/

/* dar nome as rotas
Route::get('/posts', 'PostController@index')->name('posts.index');
Route::get('/posts/index', 'PostController@indexRedirect')->name('posts.indexRedirect');

*/
/* tratamento de parametroS (2 ou +), com Closure
Route::get('users/{id}/comments/{comment}', function($id, $comment) {
    var_dump($id, $comment);
});
*/


/* tratamento de parametroS e parametro opcional(2 ou +), com tratamento de entrada de (com expressão regular) com Closure
Route::get('users/{id}/comments/{comment?}', function($id, $comment = null) {
    var_dump($id, $comment);
})->where(['id'=>'[0-9]+', 'comment'=>'[a-z A-Z 0-9]+']);
*/

/* tratamento de parametroS e parametro opcional(2 ou +), com tratamento de entrada de (com expressão regular)*/
Route::get('users/{id}/comments/{comment?}',
'UserController@userComments')->where(['id'=>'[0-9]+', 'comment'=>'[a-z A-Z 0-9]+']);


