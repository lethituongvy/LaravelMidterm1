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
        $release_year = $request->release_year;
        $request->validate([
            'title'=>'required|unique:books|max:255',
            'author' => 'required',
            'price'=> 'required',
            'release_year'=>'required',
            'publish_at'=>'nullable|date',
        ]);
        $book = new Book;
        $book->title = $title;
        $book->author = $author;
        $book->price = $price;
        $book->release_year = $release_year;
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
        $release_year = $request->release_year;
        $book = Book::find($id);
        $book->title = $title;
        $book->author = $author;
        $book->price = $price;
        $book->release_year = $release_year;
        $book->save();
        return redirect('books');
    }

}
