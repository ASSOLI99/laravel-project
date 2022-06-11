<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

// use Illuminate\Validation\Rules\Password;

class userController extends Controller
{
    public function data(Request $request){
        
      
        $validated = $request->validate([
            'fname' => 'required|unique:user|max:255',
            'lname' => 'required|max:255',
            'email' => 'required|unique:user|email',
            // 'phone' => 'required|regex:/^([0]{1}[7-9]{1})([0-9]{10})$/|digits:10|unique:user,phone',
            'pass' => 'required|max:25|min:8|'

        ]);
     
    
        

        if($request->pass !== $request->pass2){
             var_dump($request->all());
            return redirect('signup')->with('message','password does not match');
        }else{
            $user=new User;
        $user->Fname=$request->fname;
        $user->Lname=$request->lname;
        $user->email=$request->email;
        $password = $request->pass;
        $hashed = Hash::make($password);
        $user->password =$hashed;
        $user->phone=$request->phone;
        $user->address=$request->address;
        $user->save();
           return redirect('/login');
        } 
        }
       
        
      
    

       public function login(Request $request){
    
        $email=$request->email;
        $password=$request->pass;
        $data= User::where('email',$email)->first();
        
        if(isset($data)){
        
        if(Hash::check($password,$data->password)==true){
        
            $request->session()->put('email',$data['email']);
            return redirect('create-post');
        }else
        {
            return redirect('login')->with('incorrect_password' , 'Password Incorrect');
        }

       }else
       {
           return "Email Does not Exist"; 
       }
    }
}
