<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 5) as $index) {
            DB::table('produk')->insert([
                'gambar_produk' => $faker->image('public/assets/img/gambar_produk/', 400, 300, null, false),
                'nama_produk' => $faker->word,
                'harga_produk' => $faker->randomNumber(5),
                'produk_terjual' => $faker->randomNumber(3),
                'deskripsi_produk' => $faker->paragraph,
                'stok_produk' => $faker->randomNumber(2),
                'kategori_produk' => $faker->randomElement(['makanan_ringan', 'makanan_berat', 'minuman', 'pakaian_pria', 'pakaian_wanita', 'aksesoris_pria', 'aksesoris_wanita', 'lainnya']),
                'user_id' => $faker->numberBetween(1,3),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
