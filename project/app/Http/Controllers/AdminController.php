<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class AdminController extends Controller
{
    public function index(){
        return view('Admin.admins',[
            'admins'=>Admin::all()
        ]);
    }
    public function create(){
        return view('Admin/admins/create');
    }
    public function store(Request $request){
        $formFields=$request->validate([
            'name'=>['required','min:5'],
            'email'=>['required','email',Rule::unique('admin','email')],
            'password'=>'required|confirmed|min:8',
            'phone'=>'required|min:10',
            'address'=>'required'
        ]);

        //hash password
        $formFields['password']=bcrypt($formFields['password']);
        $admin = Admin::create($formFields);
        return redirect('/admins')->with('message','Admin Added Successfully');
    }
    public function login(Request $request){
    
        $email=$request->email;
        $password=$request->password;
        $data= Admin::where('email',$email)->first();
        
        if(isset($data)){
        
        if(Hash::check($password,$data->password)==true){
        
            $request->session()->put('adminEmail',$data['email']);
            return redirect('dashboard');
        }else
        {
            return redirect('admin/login')->with('message' , 'Password Incorrect');
        }

       }else
       {
           return redirect('admin/login')->with('message' , 'Email Incorrect'); 
       }
    }
    public function destroy(Admin $id){
        $id->delete();
        return redirect('/admins')->with('message','Admin deleted successfully');
    }
}

