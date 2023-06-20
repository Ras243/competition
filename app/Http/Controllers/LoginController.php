<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    // public function validasi(Request $request)
    // {
    //     // valisai inputan
    //     $request->validate([
    //         'email' => ['required'],
    //         'password' => ['required', 'min:8']
    //     ]);  
    //     // ambil request email dan password dan tampung kedalam variable credentials
    //     $credentials = $request->only('email', 'password');
    //     // cocokkan datanya menggunakan Auth::attempt
    //     if (Auth::attempt($credentials)) { 
    //         return redirect()->intended('home');
    //     } else { 
    //         return back()->withErrors([
    //         'email' => 'Email invalid'
    //         ]);
    //     }
    // }


  public function validasi(Request $request)
    {
        // Validasi inputan
        $request->validate([
            'email' => ['required'],
            'password' => ['required', 'min:8']
        ]);  

        // Ambil request email dan password dan tampung kedalam variable credentials
        $credentials = $request->only('email', 'password');

        // Cocokkan datanya menggunakan Auth::attempt
        if (Auth::attempt($credentials)) {
            // Ambil role dari user yang sedang login
            $role = auth()->user()->role;

            // Redirect ke halaman sesuai dengan role
            if ($role === 'admin') {
                return redirect()->intended('login-admin');
            } elseif ($role === 'user') {
                return redirect()->intended('login-user');
            } else {
                // Jika role tidak dikenali, redirect ke halaman home
                return redirect()->intended('welcome_arsha');
            }
        } else { 
            return back()->withErrors([
                'email' => 'Email invalid'
            ]);
        }
    }


    // function LogOut
    public function logout(Request $request)
    {
        // memanggil fungsi logout dari class Auth
        Auth::logout();
        // method ini juga akan memanggil 2 fungsi dibawah
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        // dan mengembalikan kehalaman login
        return redirect('masuk');
    }

    public function showProfile()
    {
        // Mengambil objek pengguna yang sedang login
        $user = Auth::user();

        // Menampilkan data 'name' pada profil
        return view('login-user', compact('user'));
    }


}
