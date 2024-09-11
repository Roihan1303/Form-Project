<?php

namespace Database\Seeders;

use App\Models\Sekolah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sekolah::create([
            'nama' => 'SD Negeri 01',
            'jenjang_id' => 1,
            'tanggal_berdiri' => '2000-01-01',
            'NSS' => '1234567890',
            'NPSN' => '9876543210',
            'telepon' => '0211234567',
            'alamat' => 'Jl. Sudirman No. 1, Jakarta',
            'nama_yayasan' => 'Yayasan Pendidikan Nasional',
            'sertifikat_BPHNU' => 0,
            'file_BPHNU' => null,
        ]);

        Sekolah::create([
            'nama' => 'SD Negeri 03',
            'jenjang_id' => 1,
            'tanggal_berdiri' => '1999-03-15',
            'NSS' => '1234567892',
            'NPSN' => '9876543212',
            'telepon' => '0214567890',
            'alamat' => 'Jl. Kesehatan No. 3, Jakarta',
            'nama_yayasan' => 'Yayasan Harapan Bangsa',
            'sertifikat_BPHNU' => 0,
            'file_BPHNU' => null,
        ]);

        Sekolah::create([
            'nama' => 'SD Negeri 04',
            'jenjang_id' => 1,
            'tanggal_berdiri' => '2002-04-21',
            'NSS' => '1234567893',
            'NPSN' => '9876543213',
            'telepon' => '0219876543',
            'alamat' => 'Jl. Pendidikan No. 4, Jakarta',
            'nama_yayasan' => 'Yayasan Bina Prestasi',
            'sertifikat_BPHNU' => 0,
            'file_BPHNU' => null,
        ]);

        Sekolah::create([
            'nama' => 'SMP Negeri 02',
            'jenjang_id' => 2,
            'tanggal_berdiri' => '2005-05-05',
            'NSS' => '1234567891',
            'NPSN' => '9876543211',
            'telepon' => '0217654321',
            'alamat' => 'Jl. Thamrin No. 2, Jakarta',
            'nama_yayasan' => 'Yayasan Cerdas Bangsa',
            'sertifikat_BPHNU' => 0,
            'file_BPHNU' => null,
        ]);

        Sekolah::create([
            'nama' => 'SMP Negeri 03',
            'jenjang_id' => 2,
            'tanggal_berdiri' => '2001-06-12',
            'NSS' => '1234567894',
            'NPSN' => '9876543214',
            'telepon' => '0215432109',
            'alamat' => 'Jl. Pemuda No. 5, Jakarta',
            'nama_yayasan' => 'Yayasan Generasi Emas',
            'sertifikat_BPHNU' => 0,
            'file_BPHNU' => null,
        ]);

        Sekolah::create([
            'nama' => 'SMP Negeri 04',
            'jenjang_id' => 2,
            'tanggal_berdiri' => '1998-08-30',
            'NSS' => '1234567895',
            'NPSN' => '9876543215',
            'telepon' => '0216547890',
            'alamat' => 'Jl. Merdeka No. 6, Jakarta',
            'nama_yayasan' => 'Yayasan Bhakti Nusantara',
            'sertifikat_BPHNU' => 0,
            'file_BPHNU' => null,
        ]);

        Sekolah::create([
            'nama' => 'SMA Negeri 01',
            'jenjang_id' => 3,
            'tanggal_berdiri' => '1995-02-17',
            'NSS' => '1234567896',
            'NPSN' => '9876543216',
            'telepon' => '0211234987',
            'alamat' => 'Jl. Patriot No. 7, Jakarta',
            'nama_yayasan' => 'Yayasan Pendidikan Mandiri',
            'sertifikat_BPHNU' => 0,
            'file_BPHNU' => null,
        ]);

        Sekolah::create([
            'nama' => 'SMA Negeri 02',
            'jenjang_id' => 3,
            'tanggal_berdiri' => '1994-12-09',
            'NSS' => '1234567897',
            'NPSN' => '9876543217',
            'telepon' => '0217890123',
            'alamat' => 'Jl. Persatuan No. 8, Jakarta',
            'nama_yayasan' => 'Yayasan Berprestasi',
            'sertifikat_BPHNU' => 0,
            'file_BPHNU' => null,
        ]);

        Sekolah::create([
            'nama' => 'SMK Negeri 01',
            'jenjang_id' => 3,
            'tanggal_berdiri' => '1992-11-20',
            'NSS' => '1234567898',
            'NPSN' => '9876543218',
            'telepon' => '0216789012',
            'alamat' => 'Jl. Teknik No. 9, Jakarta',
            'nama_yayasan' => 'Yayasan Kejuruan Bangsa',
            'sertifikat_BPHNU' => 0,
            'file_BPHNU' => null,
        ]);

        Sekolah::create([
            'nama' => 'SMK Negeri 02',
            'jenjang_id' => 3,
            'tanggal_berdiri' => '1993-09-18',
            'NSS' => '1234567899',
            'NPSN' => '9876543219',
            'telepon' => '0214567891',
            'alamat' => 'Jl. Vokasi No. 10, Jakarta',
            'nama_yayasan' => 'Yayasan Kejuruan Mandiri',
            'sertifikat_BPHNU' => 0,
            'file_BPHNU' => null,
        ]);
    }
}
