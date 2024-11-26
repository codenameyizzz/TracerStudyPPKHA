<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminNavController extends Controller
{
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

    public function showSurvey()
    {
        return view("admin.app.user_survey");
    }
}
