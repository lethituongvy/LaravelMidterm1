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
//LOGIN
Route::POST("/auth/login","Auth\LoginController@login");

Route::GET("/auth/login","Auth\LoginController@index")->name('auth.login');
//REGISTER
Route::POST("/auth/register","Auth\RegisterController@register");

Route::GET("/auth/register","Auth\RegisterController@index")->name('auth.register');

//Trang admin
route::get('/admin/dashboard',"Admin\DashboardController@index")->name('admin.dashboard');

//Trang home user
route::get('/home',"User\HomeController@index")->name('home');


