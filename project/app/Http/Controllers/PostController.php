<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('Admin.posts',[
            'posts'=>Post::all()
        ]);
    }
    public function singlePage($id,$userid){
        $data = Book::find($id);
        $userdata = User::where('id',$data->id)->first();
        return view('common/post',['data'=>$data,'userdata'=>$userdata]);
    }


    public function view($id)
 {

    $post = Post::where('user_id_oner', $id)->get();



    //return view('user/Order_history' , ['order'=>$order,'user'=>$user]); 
 }
 
}
