<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use \Illuminate\Support\Str;

class PostController extends Controller
{
    public function index() {
        return view('client.post');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'content' => 'required|string|max:2200',
            'location' => 'nullable|string|max:255',
            'media'   => 'nullable|image|max:2048', 
        ]);
    
        $post = new Post();
        $post->user_id = auth()->id() ?? 1;  
        $post->content = $validatedData['content'];
        $post->location = $validatedData['location'] ?? null;
        $post->status = 'published';
        $post->slug = Str::slug(Str::limit($validatedData['content'], 50)) . '-' . time();
    
        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $path = $file->store('posts', 'public');
            $post->media = $path;
            $post->media_type = $file->getClientMimeType();
        }
    
        $post->save();
    
        return redirect()->route('posts.index')->with('success', 'Bài viết đã được tạo thành công!');
    }
    
}
