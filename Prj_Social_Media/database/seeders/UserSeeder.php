<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'              => 'Admin User',
            'email'             => 'admin@example.com',
            'email_verified_at' => Carbon::now(),
            'password'          => Hash::make('password'), 
            'is_active'         => true,
            'role'              => 'admin',
            'last_login_at'     => Carbon::now(),
        ]);

        User::create([
            'name'              => 'John Doe',
            'email'             => 'john@example.com',
            'email_verified_at' => Carbon::now(),
            'password'          => Hash::make('password'),
            'is_active'         => true,
            'role'              => 'user',
            'last_login_at'     => Carbon::now(),
        ]);
    }
}
