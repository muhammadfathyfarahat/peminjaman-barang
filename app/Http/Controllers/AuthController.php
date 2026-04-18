<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $r)
    {
        if (Auth::attempt($r->only('email','password'))) {
            $r->session()->regenerate();

            return match(auth()->user()->role){
                'admin' => redirect('/admin'),
                'petugas' => redirect('/petugas'),
                default => redirect('/peminjam')
            };
        }

        return back()->with('error','Login gagal');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}