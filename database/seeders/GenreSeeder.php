<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genre = [
            ['name' => 'Horror'],
            ['name' => 'Thriller'],
            ['name' => 'Animation'],
            ['name' => 'Adventure'],
            ['name' => 'Romance'],
            ['name' => 'Action'],
            ['name' => 'Comedy'],
            ['name' => 'Drama'],
            ['name' => 'SCI-FI']
        ];

        foreach ($genre as $genres) {
            Genre::create($genres);
        }
    }
}
