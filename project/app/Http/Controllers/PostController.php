<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('Admin.posts');
    }
    public function singlePage($id,$userid){
        $data = Book::find($id);
        $userdata = User::where('id',$data->id)->first();
        return view('common/post',['data'=>$data,'userdata'=>$userdata]);
    }
}
