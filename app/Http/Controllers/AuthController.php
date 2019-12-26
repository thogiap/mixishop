<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function get_register()
    {
        return view('register');
    }

    public function post_register(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        if ($user->save()) {
            return redirect()->route('login');
        } else {
            return 'Đăng ký thất bại !!!';
        }
    }

    public function get_login()
    {
        return view('login');
    }

    public function post_login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect()->route('home');
        } else {
            return 'Đăng nhập không thành công!!!';
        }
    }

    public function home()
    {
        return view('home');
    }

    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
            return redirect()->route('login');
        } else {
            return redirect()->route('login');
        }
    }
}
