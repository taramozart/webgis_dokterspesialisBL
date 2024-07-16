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
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Pengajuan Data Baru'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Pengajuan Perubahan Data'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Pengajuan Penghapusan Lokasi'],
        ];

        DB::table('jenis_pengajuan')->insert($data_jenis_pengajuan);
    }
}
