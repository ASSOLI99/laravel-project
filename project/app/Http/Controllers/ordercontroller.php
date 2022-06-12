<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\order;
use App\Models\User;

class ordercontroller extends Controller
{
 public function view()
 {
    // $id = session('id');
    $user = User::find(1);
    $order = order::where('user_id_request ', 1)->get();
    return view('user/Order_history' , ['order'=>$order,'user'=>$user]); 
 }
}