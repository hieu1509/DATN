<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.pages.admin.register');
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
}
