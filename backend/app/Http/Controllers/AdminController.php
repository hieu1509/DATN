<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class AdminController extends Controller
{
    public function showRegistrationForm()
    {
        return view('admin.auth.register');
    }

    public function register(Request $request)
    {
        // Xác thực dữ liệu nhập vào
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:15|regex:/^[0-9]+$/', // Chỉ cho phép số
        ]);

        // Kiểm tra và trả về thông báo lỗi nếu có
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Tạo người dùng mới
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address ?? '',
            'phone' => $request->phone ?? '', // Đảm bảo trường phone không bị null
            'remember_token' => Str::random(10),
        ]);

        // Đăng nhập sau khi đăng ký thành công
        Auth::login($user);

        // Chuyển hướng người dùng sau khi đăng ký thành công
        return redirect()->route('admins')->with('success', 'Đăng ký thành công!'); 
    }

    public function showLoginForm()
    {
        return view('admin.auth.login'); // Đường dẫn tới view đăng nhập
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
            // Đăng nhập thành công, điều hướng đến trang chủ
            return redirect()->intended('admins'); // Hoặc bất kỳ trang nào bạn muốn
        }

        // Nếu đăng nhập không thành công, trở lại trang đăng nhập với thông báo lỗi
        return back()->withErrors([
            'email' => 'Thông tin đăng nhập không chính xác.',
        ]);
    }


    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('admin.login')->with('success', 'Đăng xuất thành công!'); // Chuyển hướng về trang đăng nhập với thông báo
    }
}
