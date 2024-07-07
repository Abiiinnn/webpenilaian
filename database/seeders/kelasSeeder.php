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
                'guru_id' => 1, // Pak Purnama
                'jumlah_siswa' => 20,
                'tingkat_kelas' => '1 - A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kelas' => 'Sabit',
                'guru_id' => 2, // Sabitha Sabrinah
                'jumlah_siswa' => 20,
                'tingkat_kelas' => '1 - B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kelas' => 'Harimau',
                'guru_id' => 3, // Pak Hari
                'jumlah_siswa' => 21,
                'tingkat_kelas' => '2 - A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kelas' => 'Elang',
                'guru_id' => 4, // Bu Elina
                'jumlah_siswa' => 18,
                'tingkat_kelas' => '2 - B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kelas' => 'Matahari',
                'guru_id' => 5, // Pak Mata
                'jumlah_siswa' => 22,
                'tingkat_kelas' => '3 - A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kelas' => 'Bulan',
                'guru_id' => 6, // Bu Bulan
                'jumlah_siswa' => 19,
                'tingkat_kelas' => '3 - B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kelas' => 'Angin',
                'guru_id' => 7, // Pak Angga
                'jumlah_siswa' => 23,
                'tingkat_kelas' => '4 - A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kelas' => 'Hujan',
                'guru_id' => 8, // Bu Hujan
                'jumlah_siswa' => 21,
                'tingkat_kelas' => '4 - B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kelas' => 'Badai',
                'guru_id' => 9, // Pak Badai
                'jumlah_siswa' => 20,
                'tingkat_kelas' => '5 - A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kelas' => 'Pelangi',
                'guru_id' => 10, // Bu Pelangi
                'jumlah_siswa' => 18,
                'tingkat_kelas' => '5 - B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kelas' => 'Bintang',
                'guru_id' => 11, // Pak Bintang
                'jumlah_siswa' => 22,
                'tingkat_kelas' => '6 - A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kelas' => 'Gemilang',
                'guru_id' => 12, // Bu Gemilang
                'jumlah_siswa' => 21,
                'tingkat_kelas' => '6 - B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
    }

