<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Lấy danh sách người dùng
        $users = User::all();
        return view('admin.pages.users.index', compact('users'));
    }

    public function edit($id)
    {
        // Hiển thị form chỉnh sửa người dùng
    }

    public function update(Request $request, $id)
    {
        // Xác thực và cập nhật thông tin người dùng
    }

    public function destroy($id)
    {
        // Xóa người dùng
    }
}
