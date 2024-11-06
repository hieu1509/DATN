<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{

    // Hiển thị form đăng nhập
    public function showLoginForm()
    {
        return view('auth.pages.login');
    }

    // Xử lý đăng nhập
    public function login(Request $request)
    {
        // Validate dữ liệu đầu vào
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Lấy thông tin đăng nhập
        $credentials = $request->only('email', 'password');

        // Kiểm tra xác thực và phân quyền
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
        
            // Kiểm tra quyền user trước, cho phép cả admin vào giao diện user
            if ($user->role === 'user' || $user->role === 'admin') {
                Session::flash('success', 'Đăng nhập thành công!');
                return redirect()->route('users.index');
            }
        
            // Kiểm tra quyền admin
            if ($user->role === 'admin') {
                Session::flash('success', 'Đăng nhập thành công với quyền admin!');
                return redirect()->intended('admins');
            }
        
            // Đăng xuất và thông báo nếu vai trò không hợp lệ
            Auth::logout();
            return redirect()->route('login')->withErrors(['email' => 'Tài khoản không được phân quyền hợp lệ.']);
        }              

        // Trả về lỗi nếu thông tin đăng nhập không hợp lệ
        return redirect()->back()->withErrors(['email' => 'Thông tin đăng nhập không hợp lệ.']);
    }

    // Xử lý đăng xuất
    public function logout()
    {
        Auth::logout();
        Session::flash('success', 'Bạn đã đăng xuất thành công!');
        return redirect()->route('login'); 
    }
    // Hiển thị form đăng nhập cho admin
    public function showAdminLoginForm()
    {
        return view('auth.pages.admin-login');
    }

    // Hiển thị form đăng nhập cho user
    public function showUserLoginForm()
    {
        return view('auth.pages.user-login');
    }

    // Xử lý đăng nhập cho admin
    public function adminLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials) && Auth::user()->role === 'admin') {
            Session::flash('success', 'Đăng nhập thành công!');
            return redirect()->intended('admins'); // Điều hướng admin về trang quản trị
        }

        return redirect()->back()->withErrors(['email' => 'Thông tin đăng nhập không hợp lệ hoặc bạn không phải admin.']);
    }

    // Xử lý đăng nhập cho user
    public function userLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');


        if (Auth::attempt($credentials) && Auth::user()->role === 'user') {
            Session::flash('success', 'Đăng nhập thành công!');
            return redirect()->intended('home'); // Điều hướng user về trang người dùng
        }
        if (Auth::attempt($credentials)) {
            // Đăng nhập thành công, điều hướng đến trang chủ
            return redirect()->route('users.index'); // Hoặc bất kỳ trang nào bạn muốn

        }

        return redirect()->back()->withErrors(['email' => 'Thông tin đăng nhập không hợp lệ.']);
    }


    // Xử lý đăng xuất cho admin
    public function adminLogout()
    {
        Auth::logout();
        Session::flash('success', 'Admin đã đăng xuất thành công!'); 
        return redirect()->route('login.admin'); 
    }

    // Xử lý đăng xuất cho user
    public function userLogout()
    {
        Auth::logout();
        Session::flash('success', 'Bạn đã đăng xuất thành công!'); 
        return redirect()->route('login.user'); 
    }
}
