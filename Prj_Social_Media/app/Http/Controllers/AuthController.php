<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:15',
            'email' => 'required|string|email|max:20|unique:users',
            'password' => 'required|string|max:10',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            return redirect()->route('register')->with('success', 'Đăng ký thành công!');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Đã xảy ra lỗi trong quá trình đăng ký. Vui lòng thử lại.'])->withInput();
        }
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:20',
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
            return redirect()->route('home')->with('success', 'Đăng nhập thành công!');
        }

        return back()->withErrors(['email' => 'Thông tin đăng nhập không hợp lệ.']);
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('register')->with('success', 'Đăng xuất thành công.');
    }
}
