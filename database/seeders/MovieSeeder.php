<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = [
            [
                'name' => 'Terminator',
                'user_id' => 5,
                'image' => 'https://dummyimage.com/200x300/000/fff&text=Samsung',
                'imdb_rating' => 10,
                'year' => 2020
            ],
            [
                'name' => 'Maratonci',
                'user_id' => 6,
                'image' => 'https://dummyimage.com/200x300/000/fff&text=Samsung',
                'imdb_rating' => 10,
                'year' => 2020
            ],
            [
                'name' => 'Kad jaganjci utihnu',
                'user_id' => 3,
                'image' => 'https://dummyimage.com/200x300/000/fff&text=Samsung',
                'imdb_rating' => 10,
                'year' => 2020
            ],
            [
                'name' => 'Rambo',
                'user_id' => 7,
                'image' => 'https://dummyimage.com/200x300/000/fff&text=Samsung',
                'imdb_rating' => 10,
                'year' => 2020
            ],
            [
                'name' => 'Mister Been',
                'user_id' => 5,
                'image' => 'https://dummyimage.com/200x300/000/fff&text=Samsung',
                'imdb_rating' => 10,
                'year' => 2020
            ],
            [
                'name' => 'Batman',
                'user_id' => 8,
                'image' => 'https://dummyimage.com/200x300/000/fff&text=Samsung',
                'imdb_rating' => 10,
                'year' => 2020
            ],
            [
                'name' => 'Spiderman 4',
                'user_id' => 9,
                'image' => 'https://dummyimage.com/200x300/000/fff&text=Samsung',
                'imdb_rating' => 10,
                'year' => 2020
            ],[
                'name' => 'X-man',
                'user_id' => 4,
                'image' => 'https://dummyimage.com/200x300/000/fff&text=Samsung',
                'imdb_rating' => 10,
                'year' => 2020
            ],[
                'name' => 'Robin Hood',
                'user_id' => 7,
                'image' => 'https://dummyimage.com/200x300/000/fff&text=Samsung',
                'imdb_rating' => 10,
                'year' => 2020
            ],
            [
                'name' => 'James Bond',
                'user_id' => 2,
                'image' => 'https://dummyimage.com/200x300/000/fff&text=Samsung',
                'imdb_rating' => 10,
                'year' => 2020
            ],
            [
                'name' => 'American Pie',
                'user_id' => 9,
                'image' => 'https://dummyimage.com/200x300/000/fff&text=Samsung',
                'imdb_rating' => 10,
                'year' => 2020
            ],
            [
                'name' => 'Hitler Germany',
                'user_id' => 5,
                'image' => 'https://dummyimage.com/200x300/000/fff&text=Samsung',
                'imdb_rating' => 10,
                'year' => 2020
            ],
            [
                'name' => 'Fight Club',
                'user_id' => 9,
                'image' => 'https://dummyimage.com/200x300/000/fff&text=Samsung',
                'imdb_rating' => 10,
                'year' => 2020
            ],
            [
                'name' => 'The Godfather',
                'user_id' => 10,
                'image' => 'https://dummyimage.com/200x300/000/fff&text=Samsung',
                'imdb_rating' => 10,
                'year' => 2020
            ],
            [
                'name' => 'Scareface',
                'user_id' => 5,
                'image' => 'https://dummyimage.com/200x300/000/fff&text=Samsung',
                'imdb_rating' => 10,
                'year' => 2020
            ],
            [
                'name' => 'The Godfather 2',
                'user_id' => 7,
                'image' => 'https://dummyimage.com/200x300/000/fff&text=Samsung',
                'imdb_rating' => 10,
                'year' => 2020
            ],
            [
                'name' => 'The godfather 3',
                'user_id' => 8,
                'image' => 'https://dummyimage.com/200x300/000/fff&text=Samsung',
                'imdb_rating' => 10,
                'year' => 2020
            ],

        ];

        foreach ($movies as $key => $value) {
            Movie::create($value);
        }
    }
}
