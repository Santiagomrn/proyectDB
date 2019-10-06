<?php

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
route::get('/Esp32','Esp32Controller@index');
route::post('/Esp32','Esp32Controller@store');

Route::get('/Esp32/{id}','Esp32Controller@show')->name('showEsp32');
Route::put('/Esp32/{id}','Esp32Controller@update')->name('updateEsp32');
