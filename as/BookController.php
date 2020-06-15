<?php

namespace App\Http\Controllers;
use App\Book;

use Illuminate\Http\Request;

class BookController extends Controller
{
    function index(){
        $books = Book::all();
        // echo $books;
        return view('books',["books"=>$books]);
    }
    function create(){
        return view('books.create');
    }
    function store(Request $request){
        $title = $request->title;
        $author = $request->author;
        $price = $request->price;
        $book = new Book;
        $book->title = $title;
        $book->author = $author;
        $book->price = $price;
        $book->save();
    }
    function destroy($id){
        $book = Book::find($id);
        $book -> delete();
        return redirect('books');
    }
    function edit($id){
        $book = Book::find($id);
        return view('books.edit',["book"=>$book]);
    }
    function update($id,Request $request){
        $title = $request->title;
        $author = $request->author;
        $price = $request->price;
        $book = Book::find($id);
        // $book->id = $id;
        $book->title = $title;
        $book->author = $author;
        $book->price = $price;
        $book->save();
        return redirect('books');
    }

}
