<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


// Models
use App\Models\Admin;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('back.auth.login');
    }

    public function loginPost(Request $request)
    {
        if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
            if (Auth::guard('web')->user()->rank == 1) {
                return redirect()->route('admin.dashboard');
            }
        }

        return redirect()->route('admin.login')->withErrors('Email adresi veya şifre hatalı');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
