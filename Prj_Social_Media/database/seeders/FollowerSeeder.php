<?php

namespace Database\Seeders;

use App\Models\Follower;
use Illuminate\Database\Seeder;

class FollowerSeeder extends Seeder
{
    public function run(): void
    {
        Follower::create([
            'follower_id' => 1,
            'following_id' => 2,
        ]);

        Follower::create([
            'follower_id' => 2,
            'following_id' => 1,
        ]);
    }
}