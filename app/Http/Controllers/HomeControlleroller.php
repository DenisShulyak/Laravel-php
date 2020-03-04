<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class HomeControlleroller extends Controller
{
    function index(){

        return view('index', [
            'books'=>Book::all()
        ]);
    }
}
