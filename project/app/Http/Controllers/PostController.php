<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // public function index(){
    //     return view('Admin.posts');
    // }
    public function singlePage($id){
        $data['post'] = Post::find($id);
        return view('Admin.posts');
    }
}
