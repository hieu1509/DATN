<?php

namespace App\Http\Controllers\view;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UseradminController extends Controller
{
    public function update(Request $request)
    {
        // Kiểm tra dữ liệu yêu cầu
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'role' => 'required|in:admin,employee,user',
            'status' => 'required|in:0,1',
        ]);
    
        // Lấy thông tin người dùng cần cập nhật
        $user = User::findOrFail($request->input('user_id'));
        $user->role = $request->input('role');
        $user->status = $request->input('status');
        $user->save(); // Lưu thay đổi
    
        // Quay lại trang danh sách người dùng với thông báo thành công kèm tên người dùng
        return redirect()->route('admin.users')->with('success', 'Cập nhật tài khoản thành công tài khoản: ' . $user->name);
    }

    public function index()
    {
        // Lấy danh sách người dùng
        $users = User::all();
        return view('admin.pages.users.index', compact('users'));
    }
}


