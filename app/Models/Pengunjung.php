<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{
    use HasFactory;

    protected $primaryKey = 'pelanggan_id';
    protected $fillable = [
        'username',
        'password',
        'nama_lengkap',
        'nomor_telepon',
        'role',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];
}
