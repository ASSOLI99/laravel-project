<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function show(Request $req)
    {
        if (isset($req->cat_id))
        {
            //$book = Book::find($req->id);
            $book = Book::where('catigory_id', $req->cat_id)->get();
        }
        else 
        {
            $book = Book::all();

        }

        $category = Category::all();
        return view('shop/shop' , ['book'=>$book,'category'=>$category]); 
    }



}
