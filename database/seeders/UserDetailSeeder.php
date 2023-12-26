<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 5) as $index) {
            DB::table('users_detail')->insert([
                'user_id' => $index,
                'nama_lengkap' => $faker->name,
                'nomor_telepon' => $faker->phoneNumber,
                'alamat' => $faker->address,
            ]);
        }
    }
}
