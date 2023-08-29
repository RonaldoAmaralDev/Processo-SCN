<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ClientesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('clientes', 'ClientesController@api_listagem');
Route::get('clientes/{id}', 'ClientesController@api_view');
Route::post('clientes', 'ClientesController@api_create');
Route::put('clientes/{id}', 'ClientesController@api_update');
Route::delete('clientes/{id}', 'ClientesController@api_delete');

Route::get('produtos', 'ProdutosController@api_listagem');
Route::get('produtos/{id}', 'ProdutosController@api_view');
Route::post('produtos', 'ProdutosController@api_create');
Route::put('produtos/{id}', 'ProdutosController@api_update');
Route::delete('produtos/{id}', 'ProdutosController@api_delete');

Route::get('precos', 'PrecosController@api_listagem');
