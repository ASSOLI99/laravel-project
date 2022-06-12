<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Mail\ResetMail;
use App\Models\Forget;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

// use Illuminate\Validation\Rules\Password;

class userController extends Controller
{
    public function data(Request $request)
    {


        $validated = $request->validate([
            'fname' => 'required|max:255|regex:/(^([a-zA-Z]+)(\d+)?$)/u',
            'lname' => 'required|max:255|regex:/(^([a-zA-Z]+)(\d+)?$)/u',
            'email' => 'required|unique:user|email',
            'phone' => 'required|regex:/^([0]{1}[7-9]{1})([0-9]{8})$/|digits:10|unique:user,phone',
            'pass' => 'required|max:25|min:8|',
            'pass2' => 'required|max:25|min:8|',
            'pass2' => 'required|max:25|min:8|',
            'address' => 'required',

        ]);




        if ($request->pass !== $request->pass2) {
            var_dump($request->all());
            return redirect('signup')->with('message', 'password does not match');
        } else {
            $user = new User;
            $user->Fname = $request->fname;
            $user->Lname = $request->lname;
            $user->email = $request->email;
            $password = $request->pass;
            $hashed = Hash::make($password);
            $user->password = $hashed;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->save();
            return redirect('/login');
        }
    }





    public function login(Request $request)
    {

        $email = $request->email;
        $password = $request->pass;
        $data = User::where('email', $email)->first();

        if (isset($data)) {

            if (Hash::check($password, $data->password) == true) {

                $request->session()->put('email', $data['email']);
                return redirect('create-post');
            } else {
                return redirect('login')->with('incorrect_password', 'Password Incorrect');
            }
        } else {
            return "Email Does not Exist";
        }
    }

    public function forget_password(Request $request)
    {

        $user = User::where('email', $request->forget_email)->first();
        $token =  $request->input('_token');
        if (!isset($user)) {
            return redirect('forget')->with('miss_email', 'Email Does not exist');
        }
        $forget_data = new Forget();
        $forget_data->email = $request->forget_email;
        $forget_data->token = $token;

        $forget_data->save();



        $tokenData = Forget::where('email', $request->forget_email)->first();

        if ($this->sendRestEmail($request->forget_email, $tokenData->token)) {
            return redirect('forget')->with('sent', 'Email Sent');
        } else {
            return redirect('forget')->with('connect', 'Network issue');
        }
    }

    public function sendRestEmail($email, $token)
    {
        $user = User::where('email', $email)->first();

        $link = asset('/reset_password?token=' . $token);

        try {
            //Here send the link with CURL with an external email API 
            Mail::to($email)->send(new ResetMail($link));
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function view_rest(Request $request)
    {
        $token = $request->input('token');
        return view('students/reset_password', ['token' => $token]);
    }

    public function rested_password(Request $request)
    {
        $password1 = $request->pass;
        $password2 = $request->pass2;

        if ($password1 === $password2) {
        } else {
        }
        return $request->input();
    }

    public function view(Request $req)
    {
        if (isset($req->user_img)) {

            if($req->hasfile('user_img')){

                $img = $req->file('user_img');
                $imgname = $img->getClientOriginalName();
                $img->move('user_img/', $imgname);
                $user = User::find(1);
                $user->user_img =  $imgname;
                $user->update();

            }
        }
        if(isset($req->update))
        {
            $user = User::find(1);
            $user->Fname = $req->input('Fname');
            $user->Lname = $req->input('Lname');
            $user->address = $req->input('address');
            $user->email = $req->input('email');
            $user->phone = $req->input('phone');
            $user->password = $req->input('password');
            $user->user_img = $req->input('user_img');
            $user->update();
        }

        // $id = session('id');
        $user = User::find(1);

        return view('user/user_profile', ['user' => $user]);
    }
}
