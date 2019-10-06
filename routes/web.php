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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Esp32/config', function () {
    return view('ESP32');
});
route::post('/Esp32','Esp32Controller@store');
route::get('/Esp32','Esp32Controller@index');
Route::get('/Esp32/{id}','Esp32Controller@show')->name('showEsp32');
Route::put('/Esp32/{id}','Esp32Controller@update')->name('updateEsp32');

