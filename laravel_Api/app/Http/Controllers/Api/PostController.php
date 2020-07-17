<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{
    function index(){
        $posts = DB::table('posts')->get();
        return json_encode($posts);
    }
    function show($id){
        $detail = DB::table('posts')->find($id);
        return json_encode($detail);
    }
}
