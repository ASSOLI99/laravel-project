<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function show(Request $req)
    {
        if (isset($req->cat_id)) {
            //$book = Book::find($req->id);
            $book = Book::where('catigory_id', $req->cat_id)->get();
        } else {
            $book = Book::all();
        }

        $category = Category::all();
        return view('shop/shop', ['book' => $book, 'category' => $category]);
    }




    public function view(Request $req)
    {
        $req->session()->put('id', 1);

        $user = User::find(1);
        $book = Book::where('user_id', $req->id)->get();



        return view('user/Order_history', ['book' => $book, 'user' => $user]);
    }



    public function update($id)
    {
        $post = Book::find($id);
        $post->state = 3;
        $post->update();

        return  redirect('/order/'.$id)->with('flash_message', 'data Updated!');  
    }

    public function delete($id)
    {
        $post = Book::find($id);
        $post->delete();

        return  redirect('/order/'.$id)->with('flash_message', 'data Deleted!');  
    }



}
