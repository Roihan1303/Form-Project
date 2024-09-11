<?php

namespace App\Http\Controllers;

use App\Models\TahunAjaran;
use Illuminate\Http\Request;

class TahunAjaranController extends Controller
{
    public function insertTahun(Request $request)
    {
        TahunAjaran::create(['tahun' => $request->tahun_ajaran, 'status' => 0]);

        return redirect()->back();
    }

    public function setStatus(TahunAjaran $tahun)
    {
        // dd($tahun->status);
        TahunAjaran::where('id', '!=', $tahun->id)->update(['status' => 0]);

        $tahun->update([
            'status' => 1
        ]);

        return redirect()->back();
    }
}
