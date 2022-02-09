<?php

namespace Database\Seeders;

use App\Models\Hall;
use Illuminate\Database\Seeder;

class HallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $halls = [
            ['name' => 'C.A Hall 1', 'experience' => '2D', 'no_of_seats' => '100', 'theatre_id' => '1'],
            ['name' => 'C.A Hall 2', 'experience' => '3D', 'no_of_seats' => '100', 'theatre_id' => '1'],
            ['name' => 'C.A Hall 3', 'experience' => '3D', 'no_of_seats' => '100', 'theatre_id' => '1'],
            ['name' => 'C.A Hall 4', 'experience' => 'IMAX', 'no_of_seats' => '100', 'theatre_id' => '1'],
            ['name' => 'C.Mo Hall 1', 'experience' => '2D', 'no_of_seats' => '100', 'theatre_id' => '2'],
            ['name' => 'C.Mo Hall 2', 'experience' => '2D', 'no_of_seats' => '100', 'theatre_id' => '2'],
            ['name' => 'C.Mo Hall 3', 'experience' => '3D', 'no_of_seats' => '100', 'theatre_id' => '2'],
            ['name' => 'C.Mo Hall 4', 'experience' => '3D', 'no_of_seats' => '100', 'theatre_id' => '2'],
            ['name' => 'C.Mw Hall 1', 'experience' => '2D', 'no_of_seats' => '100', 'theatre_id' => '3'],
            ['name' => 'C.Mw Hall 2', 'experience' => '2D', 'no_of_seats' => '100', 'theatre_id' => '3'],
            ['name' => 'C.Mw Hall 3', 'experience' => '2D', 'no_of_seats' => '100', 'theatre_id' => '3'],
            ['name' => 'C.Mw Hall 4', 'experience' => '3D', 'no_of_seats' => '100', 'theatre_id' => '3'],
            ['name' => 'C.D Hall 1', 'experience' => '2D', 'no_of_seats' => '100', 'theatre_id' => '4'],
            ['name' => 'C.D Hall 2', 'experience' => '3D', 'no_of_seats' => '100', 'theatre_id' => '4'],
            ['name' => 'C.D Hall 3', 'experience' => 'IMAX', 'no_of_seats' => '100', 'theatre_id' => '4'],
            ['name' => 'C.D Hall 4', 'experience' => '2D', 'no_of_seats' => '100', 'theatre_id' => '4'],
            ['name' => 'C.DF Hall 1', 'experience' => '3D', 'no_of_seats' => '100', 'theatre_id' => '5'],
            ['name' => 'C.DF Hall 2', 'experience' => '2D', 'no_of_seats' => '100', 'theatre_id' => '5'],
            ['name' => 'C.DF Hall 3', 'experience' => 'IMAX', 'no_of_seats' => '100', 'theatre_id' => '5'],
            ['name' => 'C.DF Hall 4', 'experience' => '2D', 'no_of_seats' => '100', 'theatre_id' => '5'],
            ['name' => 'C.DMw Hall 1', 'experience' => '3D', 'no_of_seats' => '100', 'theatre_id' => '6'],
            ['name' => 'C.DMw Hall 2', 'experience' => '2D', 'no_of_seats' => '100', 'theatre_id' => '6'],
            ['name' => 'C.DMw Hall 3', 'experience' => 'IMAX', 'no_of_seats' => '100', 'theatre_id' => '6'],
            ['name' => 'C.DMw Hall 4', 'experience' => '2D', 'no_of_seats' => '100', 'theatre_id' => '6'],
            ['name' => 'C.DMa Hall 1', 'experience' => '3D', 'no_of_seats' => '100', 'theatre_id' => '7'],
            ['name' => 'C.DMa Hall 2', 'experience' => 'IMAX', 'no_of_seats' => '100', 'theatre_id' => '7'],
            ['name' => 'C.DMa Hall 3', 'experience' => '2D', 'no_of_seats' => '100', 'theatre_id' => '7'],
            ['name' => 'C.DMa Hall 4', 'experience' => '2D', 'no_of_seats' => '100', 'theatre_id' => '7'],
        ];

        foreach($halls as $hall) {
            Hall::create($hall);
        }
    }
}
