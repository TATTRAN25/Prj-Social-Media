<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        Post::create([
            'user_id' => 1,
            'content' => 'This is the first post.',
            'media' => null,
        ]);

        Post::create([
            'user_id' => 2,
            'content' => 'This is the second post.',
            'media' => 'image1.jpg',
        ]);

        Post::create([
            'user_id' => 1,
            'content' => 'This is another post.',
            'media' => null,
        ]);
    }
}