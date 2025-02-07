<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
<<<<<<< HEAD
        'user_id', 'content', 'media'
=======
        'user_id',
        'title',
        'content',
        'media',
        'media_type',
        'location',
        'status',
        'slug',
        'like_count',
        'comment_count',
>>>>>>> Thuan/2-Posts
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
<<<<<<< HEAD

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
=======
    
    protected $casts = [
        'like_count' => 'integer',
        'comment_count' => 'integer',
    ];
}
>>>>>>> Thuan/2-Posts
