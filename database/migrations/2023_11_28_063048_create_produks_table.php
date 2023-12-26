<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id('kode_produk');
            $table->binary('gambar_produk');
            $table->string('nama_produk', 30);
            $table->integer('harga_produk');
            $table->integer('produk_terjual');
            $table->text('deskripsi_produk')->nullable();
            $table->integer('stok_produk');
            $table->enum('kategori_produk', ['makanan_ringan','makanan_berat','minuman','pakaian_pria','pakaian_wanita','aksesoris_pria','aksesoris_wanita','lainnya']);
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
