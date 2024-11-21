<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    public function submit(Request $request)
    {
        // Logika penyimpanan data kuisioner
        // Misalnya, simpan ke database atau kirim email

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Kuisioner berhasil dikirim.');
    }
}
