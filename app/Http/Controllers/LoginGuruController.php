<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginGuruController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login-guru');
    }

    public function login(Request $request)
    {
        // Tambahkan logika autentikasi guru di sini
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }
}
