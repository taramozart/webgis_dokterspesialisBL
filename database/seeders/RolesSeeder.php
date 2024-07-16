<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_roles = [
            ['id' => 1, 'keterangan' => 'Admin'],
            ['id' => 2, 'keterangan' => 'Dokter'],
            ['id' => 3, 'keterangan' => 'Pengguna'],
        ];

        DB::table('roles')->insert($data_roles);
    }
}
