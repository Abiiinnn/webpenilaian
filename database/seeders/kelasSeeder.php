<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class kelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kelas')->insert([
            [
                'nama_kelas' => 'Purnama',
                'wali_kelas' => 'Pak Purnama',
                'jumlah_siswa' => 20,
                'tingkat_kelas' => '1 - A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kelas' => 'Sabit',
                'wali_kelas' => 'Sabitha Sabrinah',
                'jumlah_siswa' => 20,
                'tingkat_kelas' => '1 - B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kelas' => 'Harimau',
                'wali_kelas' => 'Pak Hari',
                'jumlah_siswa' => 21,
                'tingkat_kelas' => '2 - A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
    }

