<?php

namespace Database\Seeders;

use App\Models\Theatre;
use Illuminate\Database\Seeder;

class TheatreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $theatres = [
            ['name' => 'Central X Cinema Arusha', 'region_id' => '1', 'location' => 'Njiro'],
            ['name' => 'Central X Cinema Morogoro', 'region_id' => '3', 'location' => 'Morogoro Mjini'],
            ['name' => 'Central X Cinema Mwanza', 'region_id' => '4', 'location' => 'Rock City'],
            ['name' => 'Central X Cinema Dodoma', 'region_id' => '5', 'location' => 'Dodoma Mjini'],
            ['name' => 'Central X Cinema Fire', 'region_id' => '2', 'location' => 'Fire'],
            ['name' => 'Central X Cinema Mwenge', 'region_id' => '2', 'location' => 'Mwenge'],
            ['name' => 'Central X Cinema Masaki', 'region_id' => '2', 'location' => 'Masaki'],
        ];

        foreach($theatres as $theatre)
        {
            Theatre::create($theatre);
        }

    }
}
