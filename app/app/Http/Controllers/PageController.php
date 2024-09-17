<?php

namespace App\Http\Controllers;

use App\Models\Jenjang;
use App\Models\ProfilSekolah;
use App\Models\Sekolah;
use App\Models\TahunAjaran;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PageController extends Controller
{
    public function dashboard()
    {
        $sekolah = Sekolah::all();

        $year = TahunAjaran::orderBy('id', 'desc')->get();
        $current_year = TahunAjaran::where('status', 1)->first();

        $sd = Sekolah::where('jenjang_id', 1)->get();
        $smp = Sekolah::where('jenjang_id', 2)->get();
        $sma = Sekolah::where('jenjang_id', 3)->get();

        if (auth()->user()->sekolah_id != null) {
            $sekolah = Sekolah::findOrFail(auth()->user()->sekolah_id);
            $detail = ProfilSekolah::where('sekolah_id', $sekolah->id)
                ->whereHas('tahun_ajaran', function ($query) {
                    $query->where('status', 1);
                })
                ->first();
            return view('dashboard', compact('sekolah', 'detail', 'year', 'current_year'));
        }

        return view('dashboard', compact('sekolah', 'year', 'current_year', 'sd', 'smp', 'sma'));
    }

    public function dashboardPilihTahun(Request $request)
    {
        $year = TahunAjaran::orderBy('id', 'desc')->get();
        $current_year = TahunAjaran::where('status', 1)->first();

        $sekolah = Sekolah::findOrFail(auth()->user()->sekolah_id);
        $detail = ProfilSekolah::where('sekolah_id', $sekolah->id)->where('tahun_ajaran_id', $request->tahun_ajaran)->first();
        if ($detail == null) {
            return redirect()->route('dashboard')->with('error', 'Data Pada Tahun Ajaran Belum Diinputkan');
        }
        return view('dashboard', compact('sekolah', 'year', 'current_year', 'detail'));
    }

    public function profile()
    {
        return view('profile');
    }

    public function updateProfile(Request $request, User $user)
    {
        $user->update([
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('profile')->with('success', 'Akun Berhasil Diubah');
    }

    public function sekolah(Request $request)
    {
        $jenjang = $request->route()->getName();

        $sekolahList = [];

        if ($jenjang == 'sd') {
            $sekolahList = Sekolah::where('jenjang_id', 1)->get(); // SD
        } elseif ($jenjang == 'smp') {
            $sekolahList = Sekolah::where('jenjang_id', 2)->get(); // SMP
        } elseif ($jenjang == 'sma') {
            $sekolahList = Sekolah::where('jenjang_id', 3)->get(); // SMA
        }

        return view('listSekolah', compact('sekolahList', 'jenjang'));
    }

    public function detailSekolah($jenjang, $namaSekolah)
    {
        $sekolah = Sekolah::where('nama', $namaSekolah)->first();
        $detail = ProfilSekolah::where('sekolah_id', $sekolah->id)
            ->whereHas('tahun_ajaran', function ($query) {
                $query->where('status', 1);
            })
            ->first();
        return view('detailSekolah', compact('sekolah', 'detail', 'jenjang'));
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
