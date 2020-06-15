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

Route::get('/abc', function () {
    return view;
});
Route::get('/todos/create', "TodoController@create");
Route::get('/todos', "TodoController@index");
Route::post('/todos',"TodoController@store");
Route::delete('/todos/{id}', "TodoController@destroy");