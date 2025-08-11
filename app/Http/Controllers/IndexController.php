<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;

class IndexController extends Controller
{
    public function index() 
    {
        $books = Book::existBooks()->get();
        $authors = Author::whoseBooksExist()->get();

        return view('index', compact('books', 'authors'));
    }
}
