<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $req)
    {
        if (isset($req->id))
        {
            //$book = Book::find($req->id);
            $book = Book::where('id', $req->id)->get();
        }
        else 
        {
            $book = Book::all();

        }
        
        $category = Category::all();
        return view('shop/shop' , ['book'=>$book,'category'=>$category]); 
    }

    public function show_cat(Request $req)
    {
        $book = Book::all();
        $category = Category::all();
        return view('shop/shop' , ['book'=>$book,'category'=>$category]); 

    }


}
