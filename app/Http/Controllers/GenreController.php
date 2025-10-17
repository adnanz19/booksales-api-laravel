<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index(){
        $genres = Genre::all();

        if ($genres->isEmpty()) {
            return response()->json([
                "success" => false,
                "message" => "Data not found",
                
            ], 200);
        }

        return response()->json([
            "success" => true,
            "message" => "Get all resource",
            "data" => $genres,
        ], 200);
    }
}
