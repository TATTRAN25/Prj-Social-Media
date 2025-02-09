<?php 

namespace App\Http\Controllers\client;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller {
    
    public function index() {
        $user = auth()->user();
        
        if (!$user) {
            // Chuyển hướng về trang đăng nhập
            // return redirect()->route('login')->with('error', 'Vui lòng đăng nhập để xem profile.');
            // gán user mặc định: $user = User::find(1);
            $user = User::find(1);
        }
        
        $posts = $user->posts()->latest()->get();

        return view('client.profile', compact('user', 'posts'));
    }
}