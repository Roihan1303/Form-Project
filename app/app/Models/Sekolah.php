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

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function jenjang()
    {
        return $this->belongsTo(Jenjang::class);
    }

    public function profil_sekolah()
    {
        return $this->hasMany(ProfilSekolah::class);
    }
}
