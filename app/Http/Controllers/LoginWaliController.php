<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginWaliController extends Controller
{
        public function showLoginForm()
    {
        return view('auth.login-wali');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }
}
