<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except(['logout']);
    }

    public function login()
    {
        return view('admin.auth.login');
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
 
        if (auth('admin')->attempt($credentials, true)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }
 
        return back()->withErrors([
            'username' => 'Thông tin đăng nhập không chính xác.',
        ]);
    }

    public function logout(Request $request)
    {
        auth('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('admin');
    }

}
