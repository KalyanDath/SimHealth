<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'manage roles',
            'manage permissions',
            'manage hospital',
            'manage doctors',
            'patient view',
            'patient edit',
            'patient delete',
            'appointment view',
            'appointment create',
            'appointment info',
            'appointment delete',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
