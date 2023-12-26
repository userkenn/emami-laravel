<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $primaryKey = 'kode_produk';

    protected $fillable = [
        'kode_produk ', 
        'gambar_produk', 
        'nama_produk', 'harga_produk', 
        'produk_terjual', 
        'deskripsi_produk', 
        'stok_produk', 
        'kategori_produk',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }    

}
