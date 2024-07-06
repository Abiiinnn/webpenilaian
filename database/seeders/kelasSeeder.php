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
            [
                'nama_kelas' => 'Elang',
                'wali_kelas' => 'Bu Elina',
                'jumlah_siswa' => 18,
                'tingkat_kelas' => '2 - B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kelas' => 'Matahari',
                'wali_kelas' => 'Pak Mata',
                'jumlah_siswa' => 22,
                'tingkat_kelas' => '3 - A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kelas' => 'Bulan',
                'wali_kelas' => 'Bu Bulan',
                'jumlah_siswa' => 19,
                'tingkat_kelas' => '3 - B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kelas' => 'Angin',
                'wali_kelas' => 'Pak Angga',
                'jumlah_siswa' => 23,
                'tingkat_kelas' => '4 - A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kelas' => 'Hujan',
                'wali_kelas' => 'Bu Hujan',
                'jumlah_siswa' => 21,
                'tingkat_kelas' => '4 - B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kelas' => 'Badai',
                'wali_kelas' => 'Pak Badai',
                'jumlah_siswa' => 20,
                'tingkat_kelas' => '5 - A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kelas' => 'Pelangi',
                'wali_kelas' => 'Bu Pelangi',
                'jumlah_siswa' => 18,
                'tingkat_kelas' => '5 - B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kelas' => 'Bintang',
                'wali_kelas' => 'Pak Bintang',
                'jumlah_siswa' => 22,
                'tingkat_kelas' => '6 - A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kelas' => 'Gemilang',
                'wali_kelas' => 'Bu Gemilang',
                'jumlah_siswa' => 21,
                'tingkat_kelas' => '6 - B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
    }

