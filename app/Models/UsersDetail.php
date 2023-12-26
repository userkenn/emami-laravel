<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersDetail extends Model
{
    protected $table = 'user_details'; //nama tabel
    protected $fillable = ['user_id','nama_lengkap','nomor_telepon','alamat'];

 
}
