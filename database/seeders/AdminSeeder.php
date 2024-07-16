<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_admin = [
            ['id' => \Ramsey\Uuid\Uuid::uuid4()->toString(), 'role_id' => 1, 'nama' => 'Admin', 'email' => 'admin@gmail.com', 'password' => Hash::make('admin')],
        ];
        
        DB::table('pengguna')->insert($data_admin);
    }
}
