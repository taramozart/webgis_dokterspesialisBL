<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisPengajuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_jenis_pengajuan = [
            ['id' => 1, 'keterangan' => 'Pengajuan Data Baru'],
            ['id' => 2, 'keterangan' => 'Pengajuan Perubahan Data'],
            ['id' => 3, 'keterangan' => 'Pengajuan Penghapusan Lokasi'],
        ];

        DB::table('jenis_pengajuan')->insert($data_jenis_pengajuan);
    }
}
