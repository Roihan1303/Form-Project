<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\ProfilSekolah;
use App\Models\Sekolah;
use App\Models\Siswa;
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
            'sekolah_id' => $sekolah->id
        ]);

        return redirect()->back()->with('success', 'Update Berhasil!');
    }

    public function pendataanSekolah(Request $request)
    {
        $sekolahId = auth()->user()->sekolah->id;

        $profilSekolah = ProfilSekolah::create([
            'sekolah_id' => $sekolahId,
            'tahun_ajaran_id' => $request->tahun_ajaran,
            'status_akreditasi' => $request->akreditasi,
            'waktu_belajar' => $request->waktu_belajar,
            'nama_kepala_sekolah' => $request->kepala_sekolah,
            'nama_ketua_yayasan' => $request->ketua_yayasan,
            'kurikulum' => $request->kurikulum,
        ]);

        Guru::create([
            'profil_sekolah_id' => $profilSekolah->id,
            'S1' => $request->guru_s1,
            'S2' => $request->guru_s2,
            'non_gelar' => $request->guru_nonGelar,
            'pns' => $request->guru_pns,
            'bantu' => $request->guru_bantu,
            'yayasan' => $request->guru_yys,
            'honorer' => $request->guru_hon,
        ]);

        $jenjangId = auth()->user()->sekolah->jenjang_id;

        if ($jenjangId == 1) {
            $kelas = ['I', 'II', 'III', 'IV', 'V', 'VI'];
        } elseif ($jenjangId == 2) {
            $kelas = ['VII', 'VIII', 'IX'];
        } else {
            $kelas = ['X', 'XI', 'XII'];
        }

        foreach ($kelas as $key => $value) {
            $siswaLaki = $request->laki[$key];
            $siswaPerempuan = $request->perempuan[$key];
            $jumlahSiswa = $siswaLaki + $siswaPerempuan;

            Siswa::create([
                'profil_sekolah_id' => $profilSekolah->id,
                'kelas' => 'Kelas ' . $value,
                'laki' => $siswaLaki,
                'perempuan' => $siswaPerempuan,
                'jumlah' => $jumlahSiswa,
            ]);
        }

        return redirect()->back()->with('success', 'Update Berhasil!');
    }
}
