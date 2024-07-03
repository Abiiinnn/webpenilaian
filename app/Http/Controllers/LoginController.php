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

    function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email', 
            'password' => 'required'
        ],[
            'email.required' => 'username wajib isi',
            'password.required' => 'wajib isi',
        ]);
        
        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        

        if (Auth::attempt($infologin)) {
            if(Auth::user()->role == 'admin'){
                return redirect()->route('layouts');
            }else{
                return redirect('admin/siswa');
            }

        } else {
            return redirect()->back()->withErrors('Username atau password salah')->withInput();
        }
       
        
    }

    function logout()
        {
            Auth::logout();
            return redirect('');
        }

}

