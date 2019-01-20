<?php

    /* ==========================================================================
    ** Project API Routes
    ** 19/01/2019
    ** Alan Medina Silva
    ** ========================================================================== */

use Illuminate\Http\Request;

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

/* ==========================================================================
** Marcas
** ========================================================================== */

    Route::apiResource('/marcas','MarcaController');

    Route::group(['prefix'=>'marcas'], function() {
        Route::apiResource('/modelos', 'ModeloController');
    });