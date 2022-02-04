<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regions = [
            ['name' => 'Arusha'],
            ['name' => 'Dar-es-Salaam'],
            ['name' => 'Morogoro'],
            ['name' => 'Mwanza'],
            ['name' => 'Dodoma']
        ];

        foreach ($regions as $region) {
            Region::create($region);
        }
    }
}
