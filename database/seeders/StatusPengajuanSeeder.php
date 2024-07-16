<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusPengajuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_status_pengajuan = [
            ['id' => 1, 'keterangan' => 'Sedang Diproses'],
            ['id' => 2, 'keterangan' => 'Ditolak'],
            ['id' => 3, 'keterangan' => 'Diterima'],
        ];

        DB::table('status_pengajuan')->insert($data_status_pengajuan);
    }
}
