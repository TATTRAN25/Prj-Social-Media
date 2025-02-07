<?php 

namespace App\Http\Controllers\client;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller {
    
    public function index() {
            // Lấy user hiện tại (nếu chưa đăng nhập, bạn có thể xử lý fallback hoặc chuyển hướng)
        $user = auth()->user();
        
        // Nếu chưa đăng nhập, ví dụ chuyển hướng về trang login hoặc dùng user mẫu (không khuyến khích, chỉ cho ví dụ)
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