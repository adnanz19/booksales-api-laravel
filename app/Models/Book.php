<?php

namespace App\Models;

use App\Models\Author;
use App\Models\Genre;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';

    // Menggunakan nama tunggal dan namespace penuh untuk relasi belongsTo
    public function genre(){
        return $this->belongsTo(Genre::class);
    }

    public function author(){
        return $this->belongsTo(Author::class);
    }
}
