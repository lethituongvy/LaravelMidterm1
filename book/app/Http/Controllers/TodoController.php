<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TodoController extends Controller
{
   function store(Request $Request)
	{
		$title = $Request ->input("title");
		$description = $Request -> input("description");

		DB::table('todobooks')->insert(["title" => $title, "description" => $description]);
		return redirect('todos');
	}
	function index(){
		$todos = DB::table('todobooks')->get();
		return view("todos", ["todos"=>$todos]);
	}
	function destroy($ida){
		DB::table('todobooks')->where('id', "=", $ida)-> delete();
	}
	function create(){
        return view("todocreate");

	}
}
