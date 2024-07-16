<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpesialisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_spesialisasi = [
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Kedokteran Jiwa'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Saraf/Neurologi'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Konservasi Gigi'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Anak'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Mata'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Kulit dan Kelamin'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Radiologi Kedokteran Gigi'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Patologi Anatomi'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Penyakit Dalam'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Dermatologi dan Venereologi'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Bedah Mulut dan Maksilofasial'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Kandungan dan Ginekologi'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Jantung dan Pembuluh Darah'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Bedah Mulut'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Orthopedi'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Radiologi'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Orthodontist'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Prostodonsia'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Kedokteran Keluarga Layanan Primer'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'THT-Kepala Leher'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Kedokteran Gigi Anak'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Patologi Klinik'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Bedah'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Mikrobiologi Klinik'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Patologi Anatomi'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Paru'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Anestesi'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Andrologi'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Forensik'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Onkologi Radiasi'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Farmakologi Klinik'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Bedah Toraks Kardiovaskular'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Kedokteran Olahraga'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Kedokteran Okupasi'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Periodonsia'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Penyakit Mulut'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Rehabilitasi Medik'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Urologi'],

        ];

        DB::table('spesialisasi')->insert($data_spesialisasi);
    }
}
