<?php

namespace Database\Seeders;

use App\Models\Like;
use Illuminate\Database\Seeder;

class LikeSeeder extends Seeder
{
    public function run(): void
    {
        Like::create([
            'user_id' => 1,
            'post_id' => 1,
        ]);

        Like::create([
            'user_id' => 2,
            'post_id' => 1,
        ]);

        Like::create([
            'user_id' => 1,
            'post_id' => 2,
        ]);
    }
}