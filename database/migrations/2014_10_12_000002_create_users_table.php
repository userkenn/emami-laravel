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
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id'); //primary key
            $table->string('username')->unique();
            $table->string('password');
            $table->string('nama_lengkap', 50);
            $table->string('nomor_telepon', 20);
            $table->string('alamat', 100)->nullable();
            $table->enum('role', ['admin','penjual','pengunjung'])->default('pengunjung');
            $table->rememberToken();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
