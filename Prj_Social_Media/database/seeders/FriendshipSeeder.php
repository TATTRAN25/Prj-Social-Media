<?php

namespace Database\Seeders;

use App\Models\Friendship;
use Illuminate\Database\Seeder;

class FriendshipSeeder extends Seeder
{
    public function run(): void
    {
        Friendship::create([
            'sender_id' => 1,
            'receiver_id' => 2,
            'status' => 'accepted',
        ]);

        Friendship::create([
            'sender_id' => 2,
            'receiver_id' => 1,
            'status' => 'pending',
        ]);
    }
}