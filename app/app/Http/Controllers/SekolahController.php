<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SekolahController extends Controller
{
    public function pendaftaranSekolah(Request $request)
    {
        $sekolah = new Sekolah();
        $sekolah->nama = $request->nama_sekolah;
        $sekolah->jenjang_id = $request->jenjang;
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

        User::create([
            'name' => $request->nama_sekolah,
            'email' => $request->username,
            'password' => Hash::make($request->password),
            'jenjang_id' => $request->jenjang
        ]);

        return redirect()->back();
    }
}
