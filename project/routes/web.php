<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

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
    Route::get('/dashboard', function () {
        return view('Admin.index');
    });
    Route::get('/user', function () {
        return view('Admin.user');
    });
    Route::get('/products', function () {
        return view('Admin.products');
    });
    Route::get('/posts', function () {
        return view('Admin.posts');
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



