<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarLomba extends Model
{
    use HasFactory;
    protected $table = 'daftar_lomba';
    protected $fillable = [
        'nama_lomba',
        'sampul_lomba',
        'deskripsi_lomba',
        'biaya_pendaftaran',
        'batas_pendaftaran',
    ];

    protected $dates = [
        'batas_pendaftaran',
        'created_at',
        'updated_at',
    ];
}
