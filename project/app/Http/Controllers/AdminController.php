<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class AdminController extends Controller
{
    public function index(){
        return view('Admin.admins');
    }
    public function create(){
        return view('Admin/admins/create');
    }
    public function store(Request $request){
        $formFields=$request->validate([
            'name'=>['required','min:5'],
            'email'=>['required','email',Rule::unique('admin','email')],
            'password'=>['required','confirmed','min:8']
        ]);

        //hash password
        $formFields['password']=bcrypt($formFields['password']);
        $admin = Admin::create($formFields);
        return redirect('/')->with('message','Admin Added');
    }
}
