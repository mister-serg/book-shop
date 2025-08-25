<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
        $books = Book::existBooks()->get();
        $authors = Author::whoseBooksExist()->get();
        $cart = $this->getCart();

        return view('index', compact('books', 'authors', 'cart'));
    }

    private function getCart(): ?Cart
    {
        if (Auth::user() && Auth::user()->cart && !Auth::user()->cart->isEmpty()) {
            return Auth::user()->cart;
        }

        return null;
    }
}
