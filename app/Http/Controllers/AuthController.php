<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // 1. Validate dữ liệu
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // 2. Kiểm tra thông tin & "Remember me"
        // Nếu input checkbox 'remember' có gửi lên thì là true, ngược lại false
        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            // 3. Đăng nhập thành công -> Tạo lại session ID (bảo mật)
            $request->session()->regenerate();

            // 4. Chuyển hướng về trang chủ (hoặc trang trước đó)
            return redirect()->intended('/')->with('success', 'Đăng nhập thành công!');
        }

        // 5. Đăng nhập thất bại -> Quay lại form với lỗi
        return back()->withErrors([
            'email' => 'Thông tin đăng nhập không chính xác.',
        ])->onlyInput('email');
    }

    public function showRegister()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email', 
            'password' => 'required|min:6|confirmed', 
            'terms' => 'accepted', 
        ], [
            'email.unique' => 'Email này đã được đăng ký.',
            'password.confirmed' => 'Mật khẩu nhập lại không khớp.',
            'terms.accepted' => 'Bạn phải đồng ý với điều khoản.',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Mã hóa password
        ]);

        Auth::login($user);

        return redirect('/')->with('success', 'Đăng ký tài khoản thành công!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}