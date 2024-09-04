<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function dashboard()
    {
        return view('dashboard');
    }

    public function insertSekolah()
    {
        return view('form.create');
    }

    public function updateSekolah()
    {
        return view('form.update');
    }
}
