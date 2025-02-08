<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{
    // Hiển thị form đăng ký
    public function showRegistrationForm()
    {
        return view('client.auth.register');
    }

    // Xử lý đăng ký
    public function register(Request $request)
    {
        // Xác thực dữ liệu đầu vào
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:15',
            'email' => 'required|string|email|max:30|unique:users',
            'password' => 'required|string|min:1|max:10|confirmed',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        try {
            // Tạo người dùng mới
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            // Gửi email chúc mừng
            Mail::raw("Chúc mừng {$user->name}! Bạn đã đăng ký tài khoản thành công trên Social Web.", function ($message) use ($user) {
                $message->to($user->email); // Gửi đến địa chỉ email của người dùng
                $message->subject('Chúc mừng bạn đã đăng ký thành công!');
            });

            // Chuyển hướng đến trang đăng nhập với thông báo thành công
            return redirect()->route('client.login')->with('success', 'Đăng ký thành công! Vui lòng kiểm tra email của bạn.');
        } catch (\Exception $e) {
            // Ghi log lỗi nếu có
            Log::error('Đã xảy ra lỗi trong quá trình đăng ký: ' . $e->getMessage());
            return back()->withErrors(['error' => 'Đã xảy ra lỗi trong quá trình đăng ký. Vui lòng thử lại.'])->withInput();
        }
    }

    // Xử lý đăng nhập
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:30',
            'password' => 'required|string|max:10',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            // Kiểm tra kiểu dữ liệu của $user
            if ($user instanceof User) {
                $user->last_login_at = now();
                $user->save();
            } else {
                Log::error('Đối tượng không phải là User', ['user' => $user]);
            }
            return redirect()->route('client.home')->with('success', 'Đăng nhập thành công!');
        }

        Log::warning('Thông tin đăng nhập không hợp lệ cho email: ' . $request->email);
        return back()->withErrors(['email' => 'Thông tin đăng nhập không hợp lệ.']);
    }

    // Đăng xuất
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Đăng xuất thành công.');
    }
    // Hiển thị form quên mật khẩu
    public function showForgotPasswordForm()
    {
        return view('client.auth.forgot_password');
    }
    // Hiển thị form reset mật khẩu
    public function showResetPasswordForm($token)
    {
        return view('client.auth.reset_password', ['token' => $token]);
    }
    // Gửi liên kết reset mật khẩu
    public function sendResetLink(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        // Gửi liên kết reset mật khẩu
        $response = Password::sendResetLink($request->only('email'));

        return $response == Password::RESET_LINK_SENT
            ? back()->with('status', 'Đã gửi liên kết reset mật khẩu đến email của bạn.')
            : back()->withErrors(['email' => 'Email không tồn tại.']);
    }
    // Reset mật khẩu
    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:1|max:10|confirmed',
            'token' => 'required',
        ]);

        // Reset mật khẩu
        $response = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->password = Hash::make($password);
                $user->save();
            }
        );

        return $response == Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', 'Mật khẩu đã được reset thành công.')
            : back()->withErrors(['email' => 'Email không tồn tại.']);
    }
}
