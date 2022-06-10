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

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
});

// Admin page route
Route::get('/home', function () {
    return view('Admin.index');
});
=======
Route::view('create-post', 'books/create_post');
>>>>>>> 37bb451d3ba6d689387943534ffafeb61757128d
