<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftarModel extends Model
{
    use HasFactory;

    protected $table = 'pendaftar';
    protected $fillable = [
        'nama_pendaftar',
        'jenis_kelamin',
        'instansi',
        'bukti_pembayaran',
        'status_pendaftar',
        'id_user'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}



