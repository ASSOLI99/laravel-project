<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Book;
use App\Models\contact;


class DashboardController extends Controller
{
    public function index(){
        $user=User::all();
        $book= Book::all();
        $contact= contact::all();
        return view('Admin.index');
}
}