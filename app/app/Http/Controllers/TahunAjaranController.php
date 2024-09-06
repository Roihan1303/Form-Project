<?php

namespace App\Http\Controllers;

use App\Models\TahunAjaran;
use Illuminate\Http\Request;

class TahunAjaranController extends Controller
{
    public function insertTahun(Request $request)
    {
        TahunAjaran::create(['tahun' => $request->tahun_ajaran]);

        return redirect()->back();
    }
}
