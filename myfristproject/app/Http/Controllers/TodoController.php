<?php

namespace App\Http\Controllers;
// use App\Db;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class TodoController extends Controller
{
    function create()
    {
        return view("todocreate");
    }

   
    function store(Request $request){
        $title = $request->input("title");
        $description = $request->input("description");

        DB::table('todos')->insert(
            ["title" => $title, "description" => $description]);
    

    }

    function index()
    {
        $todos = DB::table("todos")->get();
        return view("todos", ["todos" => $todos]);
    }
    function destroy($ida){
        DB::table('todos')->where ('id','=',$ida)->delete();
    }
}
