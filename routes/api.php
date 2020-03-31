<?php

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

/**
 *  Обратная связь
 */
Route::prefix('/message')->group(function () {
    // Route::get('/', 'MessageController@index');
    // Route::get('/{id}', 'MessageController@show');
    Route::post('/', 'MessageController@store');
    // Route::put('/{id}', 'MessageController@update');
    // Route::delete('/{id}', 'MessageController@destroy');
});

/**
 *  Портфолио
 */
Route::prefix('/portfolio')->group(function () {
    Route::get('/', 'PortfolioController@index');
});