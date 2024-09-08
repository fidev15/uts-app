<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Tampilkan form login
    public function showLoginForm() {
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request) {
        // Validasi input form login
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $credentials = $request->only('email', 'password');

        // Cek kredensial, jika sesuai login, jika gagal kembalikan error
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard')->with('success', 'Login successful');
        }

        // Jika gagal, kembali ke halaman login dengan pesan error
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput(); // Mengembalikan input ke form
    }

    // Tampilkan form registrasi
    public function showRegisterForm() {
        return view('auth.register');
    }

    // Proses registrasi
    public function register(Request $request) {
        // Validasi input form registrasi
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Buat user baru
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirect ke halaman login dengan pesan sukses
        return redirect()->route('login')->with('success', 'Registration successful! Please login.');
    }

    // Logout
    public function logout() {
        Auth::logout();
        return redirect()->route('login')->with('success', 'You have been logged out.');
    }
}
