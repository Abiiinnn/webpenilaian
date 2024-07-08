<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email', 
            'password' => 'required'
        ], [
            'email.required' => 'Username wajib diisi.',
            'password.required' => 'Password wajib diisi.',
        ]);
        
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == 'admin') {
                return redirect()->route('layouts');
            } else {
                return redirect()->route('guru.kelas.view');
            }
        } else {
            return redirect()->back()->withErrors('Username atau password salah.')->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}

