<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class SuperAdminSeeder extends Seeder
{
    public function run(): void
    {
        $superAdminRole = Role::create(['name' => 'Super-Admin']);
        $adminRole = Role::create(['name' => 'Admin']);
        $userRole = Role::create(['name' => 'User']);

        $superAdmin = User::create([
            'name' => 'Super Admin',
            'email' => 'super@admin.com',
            'password' => bcrypt('password')
        ]);
        $superAdmin->assignRole($superAdminRole);
    }
}