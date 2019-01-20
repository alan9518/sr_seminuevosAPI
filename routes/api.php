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
    // --------------------------------------
    // List all Marcas Route
    // --------------------------------------
        Route::get('marcas','MarcaController@index');

    // --------------------------------------
    // Get Single Marca
    // --------------------------------------
        Route::get('marca/{id}', 'MarcaController@show');

    // --------------------------------------
    // Add a new Marca
    // --------------------------------------
        Route::post('marca', 'MarcaController@store');


    // --------------------------------------
    // Edit Marca
    // --------------------------------------
        Route::put('marca/{id}', 'MarcaController@store');

    // --------------------------------------
    // Delete Marca
    // --------------------------------------
        Route::delete('marca/{id}','MarcaController@destroy');
