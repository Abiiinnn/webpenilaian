<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            
            if ($user->role == 'admin') {
                return redirect()->route('admin.index');
            } elseif ($user->role == 'guru') {
                $guru = Guru::find($user->guru_id);
                $kelas = Kelas::where('guru_id', $guru->id)->first();
                
                if ($kelas) {
                    return redirect()->route('guru.kelas.view', ['id' => $kelas->id]); // Sertakan parameter 'id'
                } else {
                    return redirect()->route('layouts'); // Redirect ke halaman default jika guru tidak terkait dengan kelas
                }
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
