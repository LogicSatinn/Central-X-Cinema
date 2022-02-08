<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@xyzcinemaz.com'
        ]);

        $admin->assignRole('Super Admin');

        $user = User::factory()->create([
            'name' => 'User',
            'email' => 'user@xyzcinemaz.com'
        ]);

        $user->assignRole('Employee');

        $supervisor = User::factory()->create([
            'name' => 'Manager',
            'email' => 'manager@xyzcinemaz.com'
        ]);

        $supervisor->assignRole('Manager');
    }
}
