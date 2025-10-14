<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $databook = new Book();
        $books = $databook->getBooks();

        return view('books', ['books' => $books]);
    }
}
