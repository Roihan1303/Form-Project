<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public function pendaftaranSekolah(Request $request)
    {
        $sekolah = new Sekolah();
        $sekolah->nama = $request->nama_sekolah;
        $sekolah->jenjang = $request->jenjang;
        $sekolah->tanggal_berdiri = $request->tanggal_berdiri;
        $sekolah->NSS = $request->nss;
        $sekolah->NPSN = $request->npsn;
        $sekolah->telepon = $request->telepon;
        $sekolah->alamat = $request->alamat;
        $sekolah->nama_yayasan = $request->yayasan;
        $sekolah->sertifikat_BPHNU = $request->sertifikat_bphnu;
        $sekolah->save();

        if ($request->sertifikat_bphnu == 1) {
            $sertifikatFile = $request->file('file_bphnu');
            $sertifikatName = $sekolah->id . '-' . $sertifikatFile->getClientOriginalName();
            $sertifikatFile->storeAs('public/sertifikat', $sertifikatName);
            $sekolah->file_BPHNU = $sertifikatName;
            $sekolah->save();
        } else {
            $sekolah->file_BPHNU = null;
            $sekolah->save();
        }

        return redirect()->back();
    }
}
