<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Tangani permintaan masuk.
     */
    public function handle(Request $request, Closure $next)
    {
        // Periksa apakah pengguna sudah terautentikasi
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Periksa apakah pengguna adalah admin
        if (Auth::user()->is_admin) {
            return $next($request);
        }

        // Jika bukan admin, tampilkan error 403
        abort(403, 'Unauthorized action.');
    }
}
