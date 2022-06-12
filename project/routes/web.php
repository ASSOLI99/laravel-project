<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\contactcontroller;

use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ordercontroller;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('/Home_page/index');
});



// Admin page route
Route::group([],function(){
    //dashboard
    Route::get('/dashboard', function () {
        return view('Admin.index');
    });
    //users
    Route::get('/admin/users' ,[userController::class,'index']);
    Route::delete('/admin/user/{id}',[userController::class, 'destroy']);
    //login
    Route::get('/admin/login', function () {

        return view('Admin/admins/login');
    });
    Route::post('admin/login',[AdminController::class,'login']);
    //admins
    Route::get('/admins',[AdminController::class, 'index']);
    Route::post('/admins',[AdminController::class, 'store']);
    Route::get('/admins/create', function () {
        return view('/Admin/admins/create');
    });
    Route::delete('/admin/{id}',[AdminController::class, 'destroy']);
    //posts
    Route::get('/admin/posts',[PostController::class, 'index']);
    Route::get('/admin/posts/update',[PostController::class, 'update']);
    //messages
    Route::get('/messages', function () {
        return view('Admin.messages');
    });
    //categories
    Route::get('/admin/category',[CategoryController::class, 'index']);
    Route::get('/admin/category/create',[CategoryController::class, 'create']);
    Route::post('/admin/category/create',[CategoryController::class, 'store']);

});
// End Admin page route

//create post
Route::get('create-post', [CategoryController::class , 'show_category']);
Route::post('create-post' , [CategoryController::class , 'add_post']);

// login
Route::get('/login', function(){
    if(session()->has('name')){
        return redirect('/');
    }
    return view('log/login');
});
Route::get('/signup',  function(){
    if(session()->has('name')){
        return redirect('/');
    }
    return view('log/signup');
});
Route::post('/signup',[userController::class,'data']);
Route::post('/login',[userController::class,'login']);

Route::get('/logout' ,[userController::class , 'logout']);

//home page


//about

Route::view('order', 'user/Order_history');
Route::view('profile', 'user/user_profile');


Route::view('contact', 'common/contact');
Route::post('contact',[contactcontroller::class,'message']);
Route::get('/home',[CategoryController::class,'show']);
Route::view('about', 'common/about');
Route::get('post/{id}/{user_id}', [PostController::class,'singlePage']);



// user

Route::get('profile',[userController::class,'view']);
Route::post('profile',[userController::class,'view']);

Route::get('order/{id}',[BookController::class,'view']);
Route::post('order',[BookController::class,'view']);


//shop
// Route::view('shop', 'shop/shop');
//oute::get('shop' , [BookController::class , 'show']);


Route::get('shop',[BookController::class,'show']);
Route::post('shop',[BookController::class,'show']);


Route::get('reset_password',[userController::class, 'view_rest']);
Route::view('forgetpassword','log/forget');
Route::post('/forget' , [userController::class , 'forget_password']);
Route::post('/rest' , [userController::class , 'rested_password']);


// chat route //
Route::get('/chat',function(){
    return view('chat/livechat');
});
