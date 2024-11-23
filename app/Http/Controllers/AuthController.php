<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Tampilkan form login.
     */
    public function getLogin(Request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->is_admin) {
                return redirect()->route('dashboard');
            }
            return redirect()->route('index');
        }
        return view('auth.login');
    }

    /**
     * Tangani permintaan login.
     */
    public function postLogin(Request $request)
    {
        // Validasi data form login
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255|exists:users,email',
            'password' => 'required|string|min:6',
        ]);

        // Validasi custom untuk password
        $validator->after(function ($validator) use ($request) {
            $user = User::where('email', $request->email)->first();
            if (!$user || !Hash::check($request->password, $user->password)) {
                $validator->errors()->add('password', 'Password is incorrect.');
            }
        });

        // Jika validasi gagal
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Coba login pengguna
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ], $request->has('remember'))) {
            // Autentikasi berhasil
            $user = Auth::user();
            if ($user->is_admin) {
                // Arahkan ke halaman admin
                return redirect()->route('dashboard');
            }

            // Jika bukan admin, arahkan ke halaman index
            return redirect()->route('index');
        }

        // Jika autentikasi gagal
        return redirect()
            ->back()
            ->withErrors(['email' => 'These credentials do not match our records.'])
            ->withInput();
    }

    /**
     * Tangani permintaan logout.
     */
    public function getLogout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
