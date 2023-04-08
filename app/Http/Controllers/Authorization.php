<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authorization extends Controller
{
    public function login_show(){
        return view('login');
    }
    public function register_show(){
        return view('register');
    }
    public function login(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // neu role la admin thi chuyen den trang admin
            if (auth()->user()->role == 'admin') {
                return redirect()->route('users.index');
            }
            // neu role la user thi chuyen den trang user
            if (auth()->user()->role == 'user') {
                return redirect()->route('home');
            }
        }
        return back()->with('error','Tài khoản hoặc mật khẩu không đúng');
    }
    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('login')->with('success','Đăng ký thành công');
    }
}
