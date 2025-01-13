<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function viewLogin()
    {
        return view('auth.login');
    }

    public function apiLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $validated = $validator->validated();

        $account = [
            'email' => $validated['email'],
            'password' => $validated['password']
        ];

        if (!Auth::attempt($account)) {
            return redirect()->back()->withErrors(['login' => 'Email atau password salah.'])->withInput();
        }

        $request->session()->regenerate();

        return redirect()->route('view.article')->with('success', 'Login Successfully');
    }

    public function apiLogout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Anda telah berhasil logout.');
    }
}
