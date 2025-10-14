<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    private $books = [
        [
            'title' => 'The Hitchhiker\'s Guide to the Galaxy',
            'description' => 'A comedic science fiction series.',
            'price' => 12.99,
            'stock' => 10,
            'cover_photo' => 'hitchhikers_guide.jpg',
            'genre_id' => 1,
            'author_id' => 1,
        ],
        [
            'title' => 'The Restaurant at the End of the Universe',
            'description' => 'The second book in the Hitchhiker\'s Guide to the Galaxy series.',
            'price' => 10.50,
            'stock' => 8,
            'cover_photo' => 'restaurant_end_universe.jpg',
            'genre_id' => 2,
            'author_id' => 1,
        ],
        [
            'title' => 'Life, the Universe and Everything',
            'description' => 'The third book in the Hitchhiker\'s Guide to the Galaxy series.',
            'price' => 11.25,
            'stock' => 15,
            'cover_photo' => 'life_universe_everything.jpg',
            'genre_id' => 3,
            'author_id' => 1
        ],
        [
            'title' => 'So Long, and Thanks for All the Fish',
            'description' => 'The fourth book in the Hitchhiker\'s Guide to the Galaxy series.',
            'price' => 9.75,
            'stock' => 12,
            'cover_photo' => 'so_long_fish.jpg',
            'genre_id' => 1,
            'author_id' => 1
        ],
        [
            'title' => 'Mostly Harmless',
            'description' => 'The fifth book in the Hitchhiker\'s Guide to the Galaxy series.',
            'price' => 13.00,
            'stock' => 7,
            'cover_photo' => 'mostly_harmless.jpg',
            'genre_id' => 2,
            'author_id' => 1
        ]
    ];

    public function getBooks()
    {
        return $this->books;
    }
}
