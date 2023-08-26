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


Auth::routes();

Route::get('/clientes', 'ClientesController@index')->name('clientes.index');
Route::get('/clientes/novocliente', 'ClientesController@NovoCliente')->name('clientes.novocliente');
Route::post('/clientes/clienteadd', 'ClientesController@ClienteAdd')->name('clientes.add');

Route::get('/clientes/{id}/viewcliente', 'ClientesController@ViewCliente')->name('clientes.viewcliente');
Route::get('/clientes/{id}/ocultar', 'ClientesController@OcultarCliente')->name('clientes.ocultar');



Route::get('/cadastrousuarios', 'HomeController@index')->name('home');
Route::post('/usuarios/store', 'HomeController@usuarios_insert')->name('HomeController.Usuarios.insert');
Route::post('/usuarios/trazdados', 'HomeController@usuarios_trazdados')->name('HomeController.Usuarios.trazdados');
Route::post('/usuarios/trazperfils', 'HomeController@usuarios_trazperfils')->name('HomeController.Usuarios.trazperfils');
Route::post('/usuarios/delete', 'HomeController@usuarios_delete')->name('HomeController.Usuarios.delete');

