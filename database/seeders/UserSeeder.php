<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@erp.com',
            'password' => bcrypt('12345678'),
            'role' => 'Admin'
        ]);
        $admin->assignRole('Admin');

        $receptionist = User::create([
            'name' => 'Tian',
            'email' => 'recep@erp.com',
            'password' => bcrypt('12345678'),
            'role' => 'Receptionist'
        ]);
        $receptionist->assignRole('Receptionist');

        $user = User::create([
            'name' => 'Zaky',
            'email' => 'user@erp.com',
            'password' => bcrypt('12345678'),
            'role' => 'User'
        ]);
        $user->assignRole('User');
    }
}
