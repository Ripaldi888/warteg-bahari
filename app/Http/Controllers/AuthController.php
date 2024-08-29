<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
       // Menampilkan form login
       public function showLoginForm()
       {
           return view('login');
       }
   
       // Proses login
       public function login(Request $request)
       {
           // Validasi input
           $request->validate([
               'email' => 'required|email',
               'password' => 'required',
           ]);
   
           // Cek kredensial
        //    dd($request);
           $credentials = $request->only('email', 'password');
           if (Auth::attempt($credentials)) {
               // Jika berhasil login
               return redirect()->route('get.index');
           }
   
           // Jika gagal login
           return back()->withErrors([
               'email' => 'Email atau password salah.',
           ]);
       }
   
       // Proses logout
       public function logout(Request $request)
       {
           Auth::logout();
           return redirect('/login');
       }
}
