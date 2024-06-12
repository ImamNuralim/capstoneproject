<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ], [
            'username.required' => '*Username wajib diisi',
            'password.required' => '*Password wajib diisi',
        ]);

        $username = $request->username;
        $password = $request->password;

        // Cek otentikasi untuk setiap jenis pengguna
        $user = Auth::attempt(['username' => $username, 'password' => $password]);

        // Cek hasil otentikasi
        if ($user) {
            if (Auth::user()->role == 'admin') {
                return redirect()->route('home.dashboard');
            } elseif (Auth::user()->role == 'ustaz') {
                return redirect()->route('home');
            } elseif (Auth::user()->role == 'murid') {
                return redirect()->route('home');
            }
        } else {
            return redirect('/login')->withErrors(['login' => '*Username dan password yang dimasukkan tidak sesuai'])->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('');
    }
}
