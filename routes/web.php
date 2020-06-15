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
Route::GET('/admin/tour/index',"Admin\DashboardController@index")->name('admin.users.index');

Route::POST('/admin/tour/create',"Admin\DashboardController@create");

Route::POST('/admin/tour',"Admin\DashboardController@store");

Route::get('/home',"Users\UserController@index")->name('home');
