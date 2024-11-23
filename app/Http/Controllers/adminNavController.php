<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminNavController extends Controller
{
    /**
     * Konstruktor untuk melakukan pemeriksaan autentikasi dan otorisasi.
     */
    public function __construct()
    {
        // Periksa apakah pengguna sudah terautentikasi
        if (!Auth::check()) {
            // Jika belum, arahkan ke halaman login
            return redirect()->route('login')->send();
        }

        // Periksa apakah pengguna adalah admin
        if (!Auth::user()->is_admin) {
            // Jika bukan admin, tampilkan error 403
            abort(403, 'Unauthorized action.');
        }
    }

    public function showDashboard()
    {
        return view("admin.app.dashboard");
    }

    public function showRespondens()
    {
        return view("admin.app.responden");
    }

    public function showStatistik()
    {
        return view("admin.app.statistik");
    }

    public function showUnggah()
    {
        return view("admin.app.unggah_data");
    }

    public function showUnduh()
    {
        return view("admin.app.unduh_data");
    }

    public function showPanduan()
    {
        return view("admin.app.panduan_form");
    }

    public function showFAQ()
    {
        return view("admin.app.faq");
    }

    public function showContact()
    {
        return view("admin.app.contact");
    }
}
