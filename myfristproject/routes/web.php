<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/abc', function () {
    return "ABC";
});
Route::get('/todos/create', "TodoController@create");
Route::get('/todos', "TodoController@index");
Route::post('/todos',"TodoController@store");
Route::DELETE('/todos/{id}', "TodoController@destroy");
