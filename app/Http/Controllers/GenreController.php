<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index(){
        $datagenre = new Genre();
        $genres = $datagenre->getGenres();

        return view('genres', ['genres' => $genres]);
    }
}
