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
<<<<<<< HEAD
    public function data(Request $request){
=======
    public function data(Request $request)
    {
>>>>>>> 533bfdd7e3e4ebebb10dae5e31a39a5ccd4cf558


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
<<<<<<< HEAD



=======
>>>>>>> 533bfdd7e3e4ebebb10dae5e31a39a5ccd4cf558




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
<<<<<<< HEAD
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
=======
        $data = User::where('email', $email)->first();

        if (isset($data)) {

            if (Hash::check($password, $data->password) == true) {

                $request->session()->put('id', $data->id);
                $request->session()->put('name', $data->Fname);
                return redirect('/');
            } else {
                return redirect('login')->with('incorrect_password', 'Password Incorrect');
            }
        } else {
            return redirect('login')->with('email_incorrect', 'Email Does not Exist');
        }
    }

    public function logout()
    {
        if(session()->has('name'))
>>>>>>> 533bfdd7e3e4ebebb10dae5e31a39a5ccd4cf558
        {
            session()->pull('name');
            session()->pull('id');
            return redirect('/');
        }
<<<<<<< HEAD

       }else
       {
        return redirect('login')->with('email_incorrect' , 'Email Does not Exist');

       }
=======
>>>>>>> 533bfdd7e3e4ebebb10dae5e31a39a5ccd4cf558
    }

    //reset password functions

    public function forget_password(Request $request)
    {
<<<<<<< HEAD
        $user = User::where('email' , $request->forget_email)->first();
=======
        $user = User::where('email', $request->forget_email)->first();
>>>>>>> 533bfdd7e3e4ebebb10dae5e31a39a5ccd4cf558

        $token =  $request->input('_token');
        if (!isset($user)) {
            return redirect('forgetpassword')->with('miss_email', 'Email Does not exist');
        }
        $forget_data = new Forget();
        $forget_data->email = $request->forget_email;
        $forget_data->token = $token;

        $forget_data->save();

<<<<<<< HEAD

=======
>>>>>>> 533bfdd7e3e4ebebb10dae5e31a39a5ccd4cf558


        $tokenData = Forget::where('email', $request->forget_email)->first();

        if ($this->sendRestEmail($user->email, $tokenData->token)) {
            return redirect('forgetpassword')->with('sent', 'Email Sent');
        } else {
            return redirect('forgetpassword')->with('connect', 'Network issue');
        }
    }

    public function sendRestEmail($email, $token)
    {
        // $user = User::where('email' , $email)->first();

<<<<<<< HEAD
        $link = asset('/reset_password?token='.$token.'&email='.$email);

        try {
            //Here send the link with CURL with an external email API
            $data = ["link"=>$link , 'email'=>$email];
=======
        $link = asset('/reset_password?token=' . $token . '&email=' . $email);

        try {
            //Here send the link with CURL with an external email API 
            $data = ["link" => $link, 'email' => $email];
>>>>>>> 533bfdd7e3e4ebebb10dae5e31a39a5ccd4cf558
            Mail::to($email)->send(new ResetMail($data));
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function view_rest(Request $request)
    {
        $email = $request->input('email');
        return view('log/reset_password', ['email' => $email]);
    }

    public function rested_password(Request $request)
    {

        $password1 = $request->reset_password;
        $password2 = $request->confirm_reset_password;
        $email = $request->email_reset;
        $request->validate([
            'reset_password' => 'required|min:8|max:25',
            'confirm_reset_password' => 'required|min:8|max:25',


<<<<<<< HEAD

=======
>>>>>>> 533bfdd7e3e4ebebb10dae5e31a39a5ccd4cf558
        ]);
        if ($password1 === $password2) {
            $password1 = Hash::make($password1);
            User::where('email', $email)->update(array('password' => $password1));
            return redirect('create-post');
<<<<<<< HEAD

        }else
        {
            return redirect('resetpassword')->with('inn' , 'Password Not match');
=======
        } else {
            return redirect('resetpassword')->with('inn', 'Password Not match');
>>>>>>> 533bfdd7e3e4ebebb10dae5e31a39a5ccd4cf558
        }
        // return $request->input();
    }

    //show the details in (admin) board
    public function index()
    {
        return view('/admin/user', [
            'users' => User::all()
        ]);
    }
    //Delete the users in (admin) board
    public function destroy(User $id)
    {
        $id->delete();
        return redirect('/admin/users')->with('message', 'User deleted successfully');
    }

    public function view(Request $req)
    {

        if (isset($req->user_img)) {
            $req->session()->put('user_img', 'avatar.png');
        }


        if (isset($req->user_img)) {

            if ($req->hasfile('user_img')) {

                $img = $req->file('user_img');
                $imgname = $img->getClientOriginalName();
                $img->move('user_img/', $imgname);

                $req->session()->put('user_img', $imgname);
                // $user = User::find(1);
                // $user->user_img =  $imgname;
                // $user->update();

            }
        }
        if (isset($req->update)) {

            $user = User::find(1);
            $user->Fname = $req->input('Fname');
            $user->Lname = $req->input('Lname');
            $user->address = $req->input('address');
            $user->email = $req->input('email');
            $user->phone = $req->input('phone');
            $user->password = $req->input('password');
            $user->user_img = $req->input('user_image');
            $user->update();
        }

        // $id = session('id');
        $user = User::find(1);

        return view('user/user_profile', ['user' => $user]);
    }
}
