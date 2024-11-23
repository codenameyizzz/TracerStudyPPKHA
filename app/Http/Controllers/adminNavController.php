<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminNavController extends Controller
{
    public function show()
    {
        return view("admin.layouts.app");
    }
}
