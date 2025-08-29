<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserProfile;
use Cloudinary\Cloudinary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class ProfileController extends Controller
{
    protected $cloudinary;

    public function __construct()
    {
        $this->cloudinary = new Cloudinary([
            'cloud' => [
                'name' => env('CLOUD_NAME'),
                'api_key' => env('API_KEY'),
                'api_secret' => env('API_SECRET'),
            ],
        ]);
    }

    // Hiển thị form chỉnh sửa hồ sơ
    public function edit()
    {
        $user = Auth::user();
        $profile = $user->profile;
        return view('client.auth.userprofile', compact('user', 'profile'));
    }

    // Cập nhật hồ sơ người dùng
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:15',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'bio' => 'nullable|string',
            'website' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
        ]);

        try {
            $user = Auth::user();

            if ($user) {
                $user->name = $request->name;

                $profile = $user->profile ?? new UserProfile(['user_id' => $user->id]);

                if ($request->hasFile('avatar')) {
                    $uploadedFileUrl = $this->cloudinary->uploadApi()->upload($request->file('avatar')->getRealPath(), [
                        'folder' => 'avatars'
                    ]);
                    $profile->avatar = $uploadedFileUrl['secure_url'];
                }

                $profile->bio = $request->bio;
                $profile->website = $request->website;
                $profile->location = $request->location;

                $profile->save();
                if ($user instanceof User) {
                    $user->save();
                } else {
                    return redirect()->back()->withErrors(['error' => 'Đối tượng người dùng không hợp lệ.']);
                }
                return redirect()->back()->with('success', 'Hồ sơ đã được cập nhật!');
            }
            return redirect()->back()->withErrors(['error' => 'Người dùng không tồn tại.']);
        } catch (\Exception $e) {
            Log::error('Đã xảy ra lỗi khi cập nhật hồ sơ: ' . $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'Đã xảy ra lỗi trong quá trình cập nhật hồ sơ. Vui lòng thử lại.']);
        }
    }

    public function changePassword(Request $request)
    {
        try {
            $request->validate([
                'current_password' => 'required|string',
                'new_password' => 'required|string|min:1|confirmed',
            ]);

            $user = Auth::user();

            // Kiểm tra xem người dùng có tồn tại không
            if (!$user) {
                return redirect()->back()->withErrors(['error' => 'Bạn cần đăng nhập để thay đổi mật khẩu.']);
            }

            // Kiểm tra mật khẩu hiện tại
            if (!Hash::check($request->current_password, $user->password)) {
                throw ValidationException::withMessages([
                    'current_password' => ['Mật khẩu hiện tại không đúng.'],
                ]);
            }

            // Cập nhật mật khẩu mới
            if ($user instanceof User) {
                $user->password = Hash::make($request->new_password);
                $user->save(); // Gọi save() trên đối tượng người dùng hợp lệ
            } else {
                return redirect()->back()->withErrors(['error' => 'Đối tượng người dùng không hợp lệ.']);
            }

            return redirect()->back()->with('success', 'Mật khẩu đã được cập nhật thành công!');
        } catch (\Exception $e) {
            // Log lỗi và thông báo cho người dùng
            Log::error('Lỗi khi thay đổi mật khẩu: ' . $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'Đã xảy ra lỗi. Vui lòng thử lại sau.']);
        }
    }
}
