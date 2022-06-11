<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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
    Route::get('/user', function () {
        return view('Admin.user');
    });
    //admins
    Route::get('/admins', function () {
        return view('Admin.admins');
    });
    //posts
    Route::get('/posts',[PostController::class, 'index']);
    //messages
    Route::get('/messages', function () {
        return view('Admin.messages');
    });
    //categories
    Route::get('/category', function () {
        return view('Admin.category');
    });
});
// End Admin page route

//create post 
Route::get('create-post', [CategoryController::class , 'show_category']);
Route::post('create-post' , [CategoryController::class , 'add_post']);

// login
Route::view('login', 'log/login');
Route::view('signup', 'log/signup');

//home page

Route::view('/home', '/Home_page/index');

//about

Route::view('order', 'user/Order_history');
Route::view('profile', 'user/user_profile');


Route::view('contact', 'common/contact');
Route::view('about', 'common/about');
Route::view('post', 'common/post');


// user
Route::view('order', 'user/Order_history');
Route::view('profile', 'user/user_profile');

//shop
// Route::view('shop', 'shop/shop');
//oute::get('shop' , [BookController::class , 'show']);

//route::get('shop/{cat_id}', [BookController::class , 'show']);

Route::get('shop',[BookController::class,'show']);
Route::post('shop',[BookController::class,'show']);


