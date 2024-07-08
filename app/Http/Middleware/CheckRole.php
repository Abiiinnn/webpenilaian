<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            // Jika pengguna tidak login, arahkan ke halaman login
            return redirect('/')->withErrors('Anda harus login untuk mengakses halaman ini.');
        }

        // Ambil role pengguna yang sedang login
        $userRole = Auth::user()->role;

        // Periksa apakah role pengguna ada di dalam daftar roles yang diizinkan
        if (!in_array($userRole, $roles)) {
            // Jika tidak diizinkan, kembalikan respons forbidden
            return abort(403, 'Akses tidak diizinkan.');
        }

        // Jika lolos verifikasi, lanjutkan permintaan
        return $next($request);
    }

   
}
