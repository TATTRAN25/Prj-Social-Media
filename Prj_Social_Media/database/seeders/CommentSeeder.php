<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    public function run(): void
    {
        Comment::create([
            'user_id' => 1,
            'post_id' => 1,
            'comment' => 'Great post!',
        ]);

        Comment::create([
            'user_id' => 2,
            'post_id' => 1,
            'comment' => 'Thanks for sharing.',
        ]);

        Comment::create([
            'user_id' => 1,
            'post_id' => 2,
            'comment' => 'Nice picture!',
        ]);
    }
}