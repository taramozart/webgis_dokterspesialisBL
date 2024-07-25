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
        Schema::create('pengajuan_dokter', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('pengguna_id')->references('id')->on('pengguna');
            $table->foreignId('jenis_pengajuan_id')->references('id')->on('jenis_pengajuan');
            $table->foreignId('status_pengajuan_id')->references('id')->on('status_pengajuan');
            $table->string('nama')->nullable();
            $table->foreignUuid('bidang_spesialisasi')->nullable();
            $table->string('nomor_kontak')->nullable();
            $table->string('nomor_sip')->nullable();
            $table->string('jadwal')->nullable();
            $table->foreignUuid('kecamatan')->nullable();
            $table->string('alamat')->nullable();
            $table->string('link_map')->nullable();
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan_dokter');

    }
};