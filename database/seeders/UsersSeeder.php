<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\RoleLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $UserData = [
            [
                'username' => 'admin',
                'password' => Hash::make('123'),
                'nama_lengkap' => 'Mas Admin',
                'nomor_telepon' => '085112345678',
                'alamat' => 'Jl. Cempaka Putih',
                'role' => 'admin'
            ],
            [
                'username' => 'penjual',
                'password' => Hash::make('123'),
                'nama_lengkap' => 'Mas Penjual',
                'nomor_telepon' => '085112345678',
                'alamat' => 'Jl. Cempaka Putih',
                'role' => 'penjual'
            ],
            [
                'username' => 'pengunjung',
                'password' => Hash::make('123'),
                'nama_lengkap' => 'Mas Pengunjung',
                'nomor_telepon' => '085112345678',
                'alamat' => 'Jl. Cempaka Putih',
                'role' => 'pengunjung'
            ],
        ];

        foreach ($UserData as $key => $val) {
            User::create($val);
        }
    }
}
