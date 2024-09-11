<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'siswa';
    protected $fillable = [
        'profil_sekolah_id',
        'kelas',
        'laki',
        'perempuan',
        'jumlah',
    ];

    public function profil_sekolah()
    {
        return $this->belongsTo(ProfilSekolah::class);
    }
}
