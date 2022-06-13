<?php

namespace App\Http\Controllers;
use App\Models\Message;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageConttoller extends Controller
{
    public function index(){
        $data= DB::table('messages')
        ->join('user','messages.user_id',"=",'user.id')->get();
        return view('Admin.messages',['data'=>$data]);
    }
    public function destroy(Message $id){
        $id->delete();
        return redirect('/admin/messages')->with('message','Message deleted successfully');
    }
}
