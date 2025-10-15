<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'The Hitchhiker\'s Guide to the Galaxy',
            'description' => 'A comedic science fiction story about the misadventures of the last surviving human following the demolition of Earth.',
            'price' => 12.99,
            'stock' => 100,
            'cover_photo' => 'hitchhikers_guide.jpg',
            'genre_id' => 1, // Science Fiction
            'author_id' => 1, // Douglas Adams
        ]);

        Book::create([
            'title' => 'Harry Potter and the Sorcerer\'s Stone',
            'description' => 'The first novel in the Harry Potter series and J. K. Rowling\'s debut novel, it follows Harry Potter, a young wizard who discovers his magical heritage on his eleventh birthday.',
            'price' => 15.50,
            'stock' => 150,
            'cover_photo' => 'harry_potter.jpg',
            'genre_id' => 2, // Fantasy
            'author_id' => 2, // J.K. Rowling
        ]);

        Book::create([
            'title' => 'It',
            'description' => 'A horror novel about seven children who are terrorized by an evil entity which exploits the fears of its victims to disguise itself while hunting its prey.',
            'price' => 18.75,
            'stock' => 75,
            'cover_photo' => 'it.jpg',
            'genre_id' => 4, // Thriller (or Horror, if we had one)
            'author_id' => 3, // Stephen King
        ]);

        Book::create([
            'title' => 'And Then There Were None',
            'description' => 'Ten strangers are lured to a remote island, only to be murdered one by one.',
            'price' => 10.00,
            'stock' => 120,
            'cover_photo' => 'and_then_there_were_none.jpg',
            'genre_id' => 3, // Mystery
            'author_id' => 4, // Agatha Christie
        ]);
    }
}
