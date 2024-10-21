<?php

namespace App\Http\Controllers\Auth\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserForgotPasswordController extends Controller
{
    // Hiển thị form yêu cầu quên mật khẩu
    public function showLinkRequestForm()
    {
        return view('auth.pages.user.forgot-password');
    }

    // Xử lý yêu cầu quên mật khẩu
    public function sendResetLinkEmail(Request $request)
    {
        // Xác thực email
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Gửi link đặt lại mật khẩu
        $status = Password::sendResetLink(
            $request->only('email')
        );

        // Kiểm tra kết quả và trả về thông báo tương ứng
        if ($status === Password::RESET_LINK_SENT) {
            return back()->with('success', 'Liên kết đặt lại mật khẩu đã được gửi tới email của bạn.');
        } else {
            return back()->withErrors(['email' => 'Không thể gửi liên kết đặt lại mật khẩu. Vui lòng thử lại sau.']);
        }
    }

    // Hiển thị form đặt lại mật khẩu
    public function showResetForm(Request $request, $token = null)
    {
        return view('auth.pages.user.reset-password')->with([
            'token' => $token,
            'email' => $request->email,
        ]);
    }

    // Xử lý đặt lại mật khẩu
    public function resetPassword(Request $request)
    {
        // Xác thực dữ liệu đầu vào
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string|min:8|confirmed',
            'token' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Xử lý đặt lại mật khẩu
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password),
                    'remember_token' => Str::random(60),
                ])->save();
            }
        );

        // Kiểm tra kết quả và trả về thông báo tương ứng
        if ($status === Password::PASSWORD_RESET) {
            return redirect()->route('login')->with('success', 'Mật khẩu của bạn đã được đặt lại thành công.');
        } else {
            return back()->withErrors(['email' => 'Không thể đặt lại mật khẩu. Vui lòng thử lại sau.']);
        }
    }
}

