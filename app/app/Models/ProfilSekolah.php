<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilSekolah extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'profil_sekolah';
    protected $fillable = [
        'sekolah_id',
        'tahun_ajaran_id',
        'status_akreditasi',
        'waktu_belajar',
        'nama_kepala_sekolah',
        'nama_ketua_yayasan',
        'kurikulum',
    ];

    public function sekolah()
    {
        return $this->belongsTo(Sekolah::class);
    }

    public function tahun_ajaran()
    {
        return $this->belongsTo(TahunAjaran::class);
    }

    public function guru()
    {
        return $this->hasMany(Guru::class);
    }

    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }
}
