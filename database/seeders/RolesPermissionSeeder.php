<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artisan::call('cache:clear');
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $permissions = [
            'create_movie',
            'view_all_movies',
            'view_movie',
            'edit_movie',
            'update_movie',
            'delete_movie',
            'add_picture',
            'add_genre',
            'add_language',
            'create_schedule',
            'view_all_schedules',
            'view_schedule',
            'edit_schedule',
            'update_schedule',
            'delete_schedule',
            'create_theatre',
            'view_all_theatres',
            'view_theatre',
            'edit_theatre',
            'update_theatre',
            'delete_theatre',
            'create_hall',
            'view_all_halls',
            'view_hall',
            'edit_hall',
            'update_hall',
            'delete_hall',
            'create_user',
            'view_user',
            'view_all_users',
            'edit_user',
            'update_user',
            'delete_user'
        ];

        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission
            ]);
        }

        $employee = Role::create(['name' => 'Employee']);

        $manager = Role::create(['name' => 'Manager']);

        Role::create(['name' => 'Super Admin']);

        $employeePermissions = [
            'create_movie',
            'view_all_movies',
            'view_movie',
            'edit_movie',
            'update_movie',
            'delete_movie',
            'add_picture',
            'add_genre',
            'create_schedule',
            'view_all_schedules',
            'view_schedule',
        ];

        foreach ($employeePermissions as $permission) {
            $employee->givePermissionTo($permission);
        }

        $managerPermissions = [
            'create_movie',
            'view_all_movies',
            'view_movie',
            'edit_movie',
            'update_movie',
            'delete_movie',
            'add_picture',
            'add_genre',
            'add_language',
            'create_schedule',
            'view_all_schedules',
            'view_schedule',
            'edit_schedule',
            'update_schedule',
            'delete_schedule',
            'create_theatre',
            'view_all_theatres',
            'view_theatre',
            'edit_theatre',
            'update_theatre',
            'delete_theatre',
            'create_hall',
            'view_all_halls',
            'view_hall',
            'edit_hall',
            'update_hall',
            'delete_hall',
            'create_user',
            'view_user',
            'edit_user',
        ];

        foreach ($managerPermissions as $permission) {
            $manager->givePermissionTo($permission);
        }


    }
}
