<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
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
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    protected $casts = [
        'like_count' => 'integer',
        'comment_count' => 'integer',
    ];
}
