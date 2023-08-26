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

Route::get('clientes2', 'ClientesController@listagem_clientes_api');
Route::get('clientes/{id}', 'ClientesController@view_clientes_api');
Route::post('clientes', 'ClientesController@insert_clientes_api');
Route::put('clientes', 'ClientesController@update_clientes_api');
Route::delete('clientes/{id}', 'ClientesController@delete_clientes_api');