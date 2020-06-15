<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    function index(){
        return view("user.home");
    }
    function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
