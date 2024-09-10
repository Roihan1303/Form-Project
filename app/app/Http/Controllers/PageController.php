<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //


    public function dashboard()
    {
        $sekolah = Sekolah::all();

        return view('dashboard', compact('sekolah'));
    }

    public function byJenjang()
    {
        return view('byJenjang');
    }

    public function bySekolah()
    {
        return view('bySekolah');
    }

    public function pendaftaranSekolah()
    {
        return view('form.pendaftaran');
    }

    public function updateSekolah()
    {
        $sekolah = Sekolah::all();
        $year = TahunAjaran::orderBy('id', 'desc')->get();
        return view('form.update', compact('sekolah', 'year'));
    }

    public function tahunAjaran()
    {
        $data = TahunAjaran::all();
        return view('form.tahunAjaran', compact('data'));
    }
}
