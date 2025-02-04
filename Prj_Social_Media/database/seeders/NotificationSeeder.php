<?php

namespace Database\Seeders;

use App\Models\Notification;
use Illuminate\Database\Seeder;

class NotificationSeeder extends Seeder
{
    public function run(): void
    {
        Notification::create([
            'user_id' => 1,
            'type' => 'friend_request',
            'data' => json_encode(['from_user' => 2]),
            'is_read' => false,
        ]);

        Notification::create([
            'user_id' => 2,
            'type' => 'post_like',
            'data' => json_encode(['post_id' => 1]),
            'is_read' => false,
        ]);
    }
}