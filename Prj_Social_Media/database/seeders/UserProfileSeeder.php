<?php

namespace Database\Seeders;

use App\Models\UserProfile;
use Illuminate\Database\Seeder;

class UserProfileSeeder extends Seeder
{
    public function run(): void
    {
        UserProfile::create([
            'user_id' => 1,
            'avatar' => 'avatar1.png',
            'bio' => 'This is user one bio.',
            'website' => 'https://gayac.com',
            'location' => 'Location One',
        ]);

        UserProfile::create([
            'user_id' => 2,
            'avatar' => 'avatar2.png',
            'bio' => 'This is user two bio.',
            'website' => 'https://gayac.com',
            'location' => 'Location Two',
        ]);
    }
}