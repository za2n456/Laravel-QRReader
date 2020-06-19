<?php

use Illuminate\Database\Seeder;
use jeremykenedy\LaravelRoles\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /*
         * Add Permissions
         *
         */
        if (Permission::where('name', '=', 'Can View Users')->first() === null) {
            Permission::create([
                'name'        => 'Can View Users',
                'slug'        => 'view.users',
                'description' => 'Can view users',
                'model'       => 'Permission',
            ]);
        }

        if (Permission::where('name', '=', 'Can Create Users')->first() === null) {
            Permission::create([
                'name'        => 'Can Create Users',
                'slug'        => 'create.users',
                'description' => 'Can create new users',
                'model'       => 'Permission',
            ]);
        }

        if (Permission::where('name', '=', 'Can Edit Users')->first() === null) {
            Permission::create([
                'name'        => 'Can Edit Users',
                'slug'        => 'edit.users',
                'description' => 'Can edit users',
                'model'       => 'Permission',
            ]);
        }

        if (Permission::where('name', '=', 'Can Delete Users')->first() === null) {
            Permission::create([
                'name'        => 'Can Delete Users',
                'slug'        => 'delete.users',
                'description' => 'Can delete users',
                'model'       => 'Permission',
            ]);
        }


        /*
         * Add Permissions
         *
         */
        if (Permission::where('name', '=', 'Can View Pasien')->first() === null) {
            Permission::create([
                'name'        => 'Can View Pasien',
                'slug'        => 'view.pasien',
                'description' => 'Can view pasien',
                'model'       => 'Permission',
            ]);
        }

        if (Permission::where('name', '=', 'Can Create Pasien')->first() === null) {
            Permission::create([
                'name'        => 'Can Create Pasien',
                'slug'        => 'create.pasien',
                'description' => 'Can create new pasien',
                'model'       => 'Permission',
            ]);
        }

        if (Permission::where('name', '=', 'Can Edit Pasien')->first() === null) {
            Permission::create([
                'name'        => 'Can Edit Pasien',
                'slug'        => 'edit.pasien',
                'description' => 'Can edit pasien',
                'model'       => 'Permission',
            ]);
        }

        if (Permission::where('name', '=', 'Can Delete Pasien')->first() === null) {
            Permission::create([
                'name'        => 'Can Delete Pasien',
                'slug'        => 'delete.pasien',
                'description' => 'Can delete pasien',
                'model'       => 'Permission',
            ]);
        }
    }
}
