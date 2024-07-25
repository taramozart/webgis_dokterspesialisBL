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
            $table->foreignUuid('kecamatan')->references('id')->on('wilayah');
            $table->string('alamat');
            $table->timestamps();
        });

        Schema::create('pengajuan_dokter', function (Blueprint $table) {
            $table->foreignUuid('pengajuan_dokter_sebelumnya_id')->nullable()->constrained('pengajuan_dokter_sebelumnya');
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