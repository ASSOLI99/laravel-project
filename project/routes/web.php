<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;


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
    Route::get('/admins',[AdminController::class, 'index']);
    Route::get('/admins/create', function () {
        return view('/Admin/admins/create');
    });
    //posts
    Route::get('/posts',[PostController::class, 'index']);
    Route::get('/posts/create',[PostController::class, 'create']);
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
Route::view('/login', 'log/login');
Route::view('/signup', 'log/signup');
Route::post('/signup',[userController::class,'data']);
Route::post('/login',[userController::class,'login']);

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

Route::resource('shop', BookController::class);



