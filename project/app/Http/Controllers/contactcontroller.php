<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\contact;

class contactcontroller extends Controller
{

   public function message(Request $request){
    $message= new contact;
    $message->name=$request->name;
    $message->email=$request->email;
    $message->message=$request->message;
    $message->save();
    return redirect('contact')->with('success','we have successfully recieved your message , we will respond shortly');

   }
}
