<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleLevel extends Model
{
    use HasFactory;
    
    protected $table = 'role_level';
    protected $primaryKey = 'role_id';

    protected $fillable = [
        'role_id', 'nama_role'
    ];

}
