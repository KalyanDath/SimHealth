<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'Super Admin']);

        $adminUser = User::factory()->create([
            'email' => 'superadmin@admin.com',
            'password' => bcrypt('password')
        ]);

        $adminUser->assignRole('Super Admin');
    }
}
