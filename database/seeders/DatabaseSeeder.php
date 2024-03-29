<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesPermissionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(RegionSeeder::class);
        $this->call(GenreSeeder::class);
        $this->call(LanguageSeeder::class);
        $this->call(TheatreSeeder::class);
        $this->call(HallSeeder::class);
    }
}
