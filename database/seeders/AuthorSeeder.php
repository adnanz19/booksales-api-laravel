<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name' => 'Douglas Adams',
            'bio' => 'Douglas Adams was an English author, satirist, and comedic radio dramatist. He is best known for The Hitchhiker\'s Guide to the Galaxy series.',
            'photo' => 'douglas_adams.jpg',
        ]);

        Author::create([
            'name' => 'J.K. Rowling',
            'bio' => 'J.K. Rowling is a British author, philanthropist, film producer, and screenwriter, best known for writing the Harry Potter fantasy series.',
            'photo' => 'jk_rowling.jpg',
        ]);

        Author::create([
            'name' => 'Stephen King',
            'bio' => 'Stephen King is an American author of horror, supernatural fiction, suspense, crime, science-fiction, and fantasy novels.',
            'photo' => 'stephen_king.jpg',
        ]);

        Author::create([
            'name' => 'Agatha Christie',
            'bio' => 'Agatha Christie was an English writer known for her sixty-six detective novels and fourteen short story collections, particularly those featuring Hercule Poirot and Miss Marple.',
            'photo' => 'agatha_christie.jpg',
        ]);

        Author::create([
            'name' => 'George Orwell',
            'bio' => 'George Orwell was an English novelist, essayist, journalist, and critic. His work is characterized by lucid prose, biting social criticism, opposition to totalitarianism, and outspoken support of democratic socialism.',
            'photo' => 'george_orwell.jpg',
        ]);
    }
}
