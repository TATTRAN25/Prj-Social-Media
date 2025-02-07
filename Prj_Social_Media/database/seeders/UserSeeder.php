<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'User One',
            'email' => 'userone@example.com',
            'password' => Hash::make('password123'),
            'is_active' => true,
            'two_factor_secret' => null,
            'role' => 'user',
            'last_login_at' => now(),
        ]);

        User::create([
            'name' => 'User Two',
            'email' => 'usertwo@example.com',
            'password' => Hash::make('password123'),
            'is_active' => true,
            'two_factor_secret' => null,
            'role' => 'user',
            'last_login_at' => now(),
        ]);

        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123'),
            'is_active' => true,
            'two_factor_secret' => null,
            'role' => 'admin',
            'last_login_at' => now(),
        ]);
    }
}
