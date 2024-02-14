<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $roles = ['Admin', 'Director', 'Users'];

        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }

        $directors = [1, 60, 59, 31, 61, 12, 81, 638, 797];
        foreach ($directors as $director) {
            User::find($director)->assignRole('Director');
        }

        $admins = [59, 55, 58, 57, 54, 77, 186, 1];
        foreach ($admins as $admin) {
            User::find($admin)->assignRole('Admin');
        }
    }
}
