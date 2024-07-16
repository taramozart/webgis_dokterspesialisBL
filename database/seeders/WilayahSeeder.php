<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WilayahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_wilayah = [
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Enggal'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Bumi Waras'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Kedamaian'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Kedaton'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Kemiling'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Labuhan Ratu'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Langkapura'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Panjang'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Rajabasa'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Sukabumi'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Sukarame'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Tanjung Senang'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Tanjung Karang Barat'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Tanjung Karang Pusat'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Tanjung Karang Timur'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Teluk Betung Barat'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Teluk Betung Selatan'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Teluk Betung Timur'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Teluk Betung Utara'],
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'keterangan' => 'Way Halim'],
        ];

        DB::table('wilayah')->insert($data_wilayah);
    }
}
