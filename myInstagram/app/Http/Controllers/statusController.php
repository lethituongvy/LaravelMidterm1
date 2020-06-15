<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class statusController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    function create(){
        return view("form");
    }

   function store(Request $request)
    {
        $title = $request -> input("title");
        $description = $request -> input("description");
        $filePath = $request ->file('photo')->store("public");
        // $filed = str_replace("public", "storage", $filePath);
        //store file path to database
        DB::table('instagram')->insert(["title" => $title,"description" => $description,"photo" => $filePath]);
        return redirect('display1');
    }
   
    function index() {
        $tuongvy = DB::table('instagram')->get();
        return view("status",['data'=>$tuongvy]);
    }
    function destroy($id){
        DB::table('instagram')->where('id', "=", $id)-> delete();
    }
    
    function edit($id){
        $photos = DB::table('instagram')->find($id) ;
        return view("photo.edit",['photo'=>$photos]);
    }
    function update($id, Request $request){
        $title =  $request->title;
        $description =  $request->description;
        $photo = $request->file('photo')->store("public");
        DB::table('instagram')
        ->where("id",$id)
        ->update(["title"=> $title,"description"=> $description,"photo"=>$photo]);

        return redirect('display1');
    }

}
