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


Route::get('/', 'ClientesController@index')->name('clientes.index');

//Route::group(['namespace' => 'Auth', 'as' => 'auth'], function(){
//    // Login Page
//    Route::get('/login',     'LoginController@showLoginForm')->name('.login');
//    // Login Post
//    Route::post('/login',    'LoginController@login')->name('.login');
//    // Logout
//    Route::get('/logout',    'LoginController@logout')->name('.logout');
//});

Auth::routes();


Route::get('/clientes', 'ClientesController@index')->name('clientes.index');
Route::get('/clientes/novocliente', 'ClientesController@NovoCliente')->name('clientes.novocliente');
Route::post('/clientes/clienteadd', 'ClientesController@ClienteAdd')->name('clientes.add');

Route::get('/clientes/{id}/viewcliente', 'ClientesController@ViewCliente')->name('clientes.viewcliente');
Route::get('/clientes/{id}/ocultar', 'ClientesController@OcultarCliente')->name('clientes.ocultar');

Route::get('/produtos/create', 'ProdutosController@create')->name('produtos.create');
Route::post('/produtos/store', 'ProdutosController@store')->name('produtos.store');
Route::get('/produtos/index', 'ProdutosController@index')->name('produtos.index');

Route::get('/precos/index', 'PrecosController@index')->name('precos.index');

Route::get('/relatorios/index', 'RelatoriosController@index')->name('relatorios.index');


Route::get('/cadastrousuarios', 'HomeController@index')->name('home');
Route::post('/usuarios/store', 'HomeController@usuarios_insert')->name('HomeController.Usuarios.insert');
Route::post('/usuarios/trazdados', 'HomeController@usuarios_trazdados')->name('HomeController.Usuarios.trazdados');
Route::post('/usuarios/trazperfils', 'HomeController@usuarios_trazperfils')->name('HomeController.Usuarios.trazperfils');
Route::post('/usuarios/delete', 'HomeController@usuarios_delete')->name('HomeController.Usuarios.delete');

