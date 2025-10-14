<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    private $authors = [
        [
            'name' => 'Douglas Adams',
            'bio' => 'Douglas Adams was an English author, satirist, and comedic radio dramatist. He is best known for The Hitchhiker\'s Guide to the Galaxy series.',
            'birth_date' => '1952-03-11',
            'nationality' => 'British'
        ],
        [
            'name' => 'J.K. Rowling',
            'bio' => 'J.K. Rowling is a British author, philanthropist, film producer, and screenwriter, best known for writing the Harry Potter fantasy series.',
            'birth_date' => '1965-07-31',
            'nationality' => 'British'
        ],
        [
            'name' => 'Stephen King',
            'bio' => 'Stephen King is an American author of horror, supernatural fiction, suspense, crime, science-fiction, and fantasy novels.',
            'birth_date' => '1947-09-21',
            'nationality' => 'American'
        ],
        [
            'name' => 'Agatha Christie',
            'bio' => 'Agatha Christie was an English writer known for her sixty-six detective novels and fourteen short story collections, particularly those featuring Hercule Poirot and Miss Marple.',
            'birth_date' => '1890-09-15',
            'nationality' => 'British'
        ],
        [
            'name' => 'George Orwell',
            'bio' => 'George Orwell was an English novelist, essayist, journalist, and critic. His work is characterized by lucid prose, biting social criticism, opposition to totalitarianism, and outspoken support of democratic socialism.',
            'birth_date' => '1903-06-25',
            'nationality' => 'British'
        ]
    ];

    public function getAuthors(){
        return $this->authors;
    }
}
