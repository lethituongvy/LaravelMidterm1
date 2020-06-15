<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/create',"statusController@create");

Route::get('/display1',"statusController@index");

Route::post('/display',"statusController@store");

Route::get('display/{id}/edit',"statusController@edit");

Route::delete('display/{id}',"statusController@destroy");

Route::patch('/display/{id}',"statusController@update");
