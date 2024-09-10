<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'sekolah';
    protected $fillable = [
        'nama',
        'jenjang_id',
        'tanggal_berdiri',
        'NSS',
        'NPSN',
        'telepon',
        'alamat',
        'nama_yayasan',
        'sertifikat_BPHNU',
        'file_BPHNU',
    ];
}
