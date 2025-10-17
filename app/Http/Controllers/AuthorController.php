<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(){
        $authors = Author::all();

        if ($authors->isEmpty()) {
            return response()->json([
                "success" => false,
                "message" => "Data not found",
                
            ], 200);
        }

        return response()->json([
            "success" => true,
            "message" => "Get all resource",
            "data" => $authors,
        ], 200 );
    }
}
