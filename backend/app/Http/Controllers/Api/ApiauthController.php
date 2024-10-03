<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApiauthController extends Controller
{
    public function postRegister(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash mã hóa dữ liệu của pass
        ]);
        $token = $user->createToken('Access Token')->plainTextToken; // tạo ra token
        return response()->json([
            'token' => $token,
            'user' => $user,
            'message' => 'Đăng ký thành công',
        ]);
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'error' => 'sai email hoặc mật khẩu'
            ]);
        }
        $token = $user->createToken('access token')->plainTextToken;
        return response()->json([
            'token' => $token,
            'user' => $user,
            'message' => 'Đăng nhập thành công',
        ]);
    }

    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $param = $request->except('_token', '_method');
        // dd($param);
       $check= $user->update($param);
    if($check){
        return response()->json([
            'message' => 'Cập nhật tài khoản thành công',
            'user' => $user,
        ], 200);  
    }else{
        return response()->json([
            'message' => 'Cập nhật tài khoản không thành công',
            'user' => $user,
        ], 404);  
    } 
    }
}
