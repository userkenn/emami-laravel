<?php

namespace Database\Seeders;

use App\Models\RoleLevel;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $RoleData = [
            [
                'role_id' => '1',
                'nama_role'=> 'admin',
            ],
            [
                'role_id' => '2',
                'nama_role'=> 'penjual',
            ],
            [
                'role_id' => '3',
                'nama_role'=> 'pengunjung',
            ],
        ];

        foreach ($RoleData as $key => $val) {
            RoleLevel::create($val);
        }
    }
}
