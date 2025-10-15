<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Science Fiction',
            'description' => 'Books that deal with imaginative and futuristic concepts'
        ]);

        Genre::create([
            'name' => 'Fantasy',
            'description' => 'Books that feature magical abilities'
        ]);

        Genre::create([
            'name' => 'Mystery',
            'description' => 'Books that revolve around a crime or a puzzling event'
        ]);

        Genre::create([
            'name' => 'Thriller',
            'description' => 'Books characterized by a sense of excitement'
        ]);
    }
}
