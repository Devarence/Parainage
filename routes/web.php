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
    return view('index');
});

Route::get('admin', function () {
    return view('admin');
});

Route::get('parrain', function () {
    return view('parrain');
});

Route::post('enregistrement', 'InscriController@save');

Route::resource('inscription', 'InscriController');

Route::resource('parrain', 'ParrainController');
Route::post('parrain', 'ParrainController@loginParrain');
Route::post('parrain', 'ParrainController@loginParrain');

Route::resource('admin', 'AdminController');
Route::post('admin', 'AdminController@loginAdmin');
