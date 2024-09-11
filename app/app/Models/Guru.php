<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'guru';
    protected $fillable = [
        'profil_sekolah_id',
        'S1',
        'S2',
        'non_gelar',
        'pns',
        'bantu',
        'yayasan',
        'honorer',
    ];

    public function profil_sekolah()
    {
        return $this->belongsTo(ProfilSekolah::class);
    }
}
