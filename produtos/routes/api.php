<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerProduto;
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

Route::get('/produtos', [ControllerProduto::class, 'index']);
Route::post('/produtos', [ControllerProduto::class, 'store']);
Route::get('/produtos/{id}', [ControllerProduto::class, 'show']);
Route::put('/produtos/{id}', [ControllerProduto::class, 'update']);
Route::delete('/produtos/{id}',[ControllerProduto::class, 'destroy']);


