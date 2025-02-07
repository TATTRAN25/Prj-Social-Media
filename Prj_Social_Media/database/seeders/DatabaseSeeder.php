<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            PostSeeder::class,
            CommentSeeder::class,
            LikeSeeder::class,
            FriendshipSeeder::class,
            NotificationSeeder::class,
            UserProfileSeeder::class,
            FollowerSeeder::class,
        ]);
    }
}

