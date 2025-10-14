<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(){
        $dataauthor = new Author();
        $authors = $dataauthor->getAuthors();

        return view('authors', ['authors' => $authors ]);
    }
}
