<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.pages.login'); 
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string|min:8',
        ], [
            'email.required' => 'Email là bắt buộc.',
            'email.email' => 'Email không đúng định dạng.',
            'email.exists' => 'Email không tồn tại trong hệ thống.',
            'password.required' => 'Mật khẩu là bắt buộc.',
            'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            Session::flash('success', 'Đăng nhập thành công!');

            // Điều hướng đến trang dựa trên vai trò người dùng
            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect()->intended('admins'); // Điều hướng cho admin
            }

            return redirect()->intended('home'); // Điều hướng cho người dùng bình thường
        }

        // Nếu đăng nhập không thành công, trở lại trang đăng nhập với thông báo lỗi
        return back()->withErrors([
            'email' => 'Thông tin đăng nhập không chính xác.',
        ])->withInput($request->only('email')); 
    }

    public function logout()
    {
        Auth::logout();
        Session::flash('success', 'Bạn đã đăng xuất thành công!'); 
        return redirect()->route('login'); 
    }
}

