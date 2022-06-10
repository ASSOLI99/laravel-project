<?php

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
    return view('welcome');
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

Route::view('create-post', 'books/create_post');

// login
Route::view('login', 'log/login');
Route::view('signup', 'log/signup');

Route::view('order', 'user/Order_history');
Route::view('profile', 'user/user_profile');


