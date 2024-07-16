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
        Schema::create('pengajuan_dokter_sebelumnya', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama');
            $table->foreignUuid('bidang_spesialisasi')->references('id')->on('spesialisasi');
            $table->string('nomor_kontak')->nullable();
            $table->string('nomor_sip');
            $table->string('jadwal');
            $table->foreignUuid('kecamatan')->references('id')->on('wilayah');
            $table->string('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan_dokter_sebelumnya');

    }
};