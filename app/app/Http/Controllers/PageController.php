<?php

namespace App\Http\Controllers;

use App\Models\Jenjang;
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

    public function pendaftaranSekolah()
    {
        $jenjang = Jenjang::all();
        return view('form.pendaftaran', compact('jenjang'));
    }

    public function pendataanSekolah()
    {
        $year = TahunAjaran::where('status', 1)->first();
        return view('form.pendataan', compact('year'));
    }

    public function tahunAjaran()
    {
        $data = TahunAjaran::all();
        return view('form.tahunAjaran', compact('data'));
    }
}
