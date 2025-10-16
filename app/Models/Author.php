<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    private $authors = [
        [
            'name' => 'Douglas Adams',
            'bio' => 'Douglas Adams was an English author, satirist, and comedic radio dramatist. He is best known for The Hitchhiker\'s Guide to the Galaxy series.',
            'photo' => 'douglas_adams.jpg',
        ],
        [
            'name' => 'J.K. Rowling',
            'bio' => 'J.K. Rowling is a British author, philanthropist, film producer, and screenwriter, best known for writing the Harry Potter fantasy series.',
            'photo' => 'jk_rowling.jpg',
        ],
        [
            'name' => 'Stephen King',
            'bio' => 'Stephen King is an American author of horror, supernatural fiction, suspense, crime, science-fiction, and fantasy novels.',
            'photo' => 'stephen_king.jpg',
        ],
        [
            'name' => 'Agatha Christie',
            'bio' => 'Agatha Christie was an English writer known for her sixty-six detective novels and fourteen short story collections, particularly those featuring Hercule Poirot and Miss Marple.',
            'photo' => 'agatha_christie.jpg',
        ],
        [
            'name' => 'George Orwell',
            'bio' => 'George Orwell was an English novelist, essayist, journalist, and critic. His work is characterized by lucid prose, biting social criticism, opposition to totalitarianism, and outspoken support of democratic socialism.',
            'photo' => 'george_orwell.jpg',
        ]
    ];

    public function getAuthors(){
        return $this->authors;
    }
}
