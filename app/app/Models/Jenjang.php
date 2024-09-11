<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenjang extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'jenjang';
    protected $fillable = [
        'jenjang'
    ];

    public function sekolah()
    {
        return $this->hasMany(Sekolah::class);
    }
}
