<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {

        return view('layout.page.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
            return redirect()->intended('/dashboard')->with('success', 'Login berhasil');
        }

        return back()->withErrors(['email' => 'Login gagal']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    // public function showRegisterForm()
    // {
    //     return view('auth.register');
    // }

    // public function register(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email|unique:users',
    //         'password' => 'required|confirmed|min:6',
    //     ]);

    //     $user = User::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password), // Ensure password is hashed
    //     ]);

    //     Auth::login($user);

    //     return redirect('/dashboard');
    // }
}

