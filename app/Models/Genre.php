<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    private $genres = [
        [
            'name' => 'Science Fiction',
            'description' => 'Books that deal with imaginative and futuristic concepts such as advanced science and technology, space exploration, time travel, parallel universes, and extraterrestrial life.'
        ],
        [
            'name' => 'Fantasy',
            'description' => 'Books that feature magical abilities, mythical creatures, and supernatural phenomena as primary plot elements, often set in fictional worlds.'
        ],
        [
            'name' => 'Mystery',
            'description' => 'Books that revolve around a crime or a puzzling event that needs to be solved, often involving a detective or an amateur sleuth.'
        ],
        [
            'name' => 'Thriller',
            'description' => 'Books characterized by a sense of excitement, suspense, and anticipation, often involving danger, intrigue, and a fast-paced plot.'
        ],
        [
            'id' => 5,
            'name' => 'Romance',
            'description' => 'Books that focus on the development of a romantic relationship between two or more characters, often with an emotionally satisfying and optimistic ending.'
        ]
    ];

    public function getGenres() {
        return $this->genres;
    }
}
