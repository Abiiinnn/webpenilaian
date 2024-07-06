<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MataPelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mataPelajaran = [
            ['nama_mata_pelajaran' => 'Matematika', 'kode_mata_pelajaran' => 'MTK'],
            ['nama_mata_pelajaran' => 'Bahasa Indonesia', 'kode_mata_pelajaran' => 'BINDO'],
            ['nama_mata_pelajaran' => 'IPA', 'kode_mata_pelajaran' => 'IPA'],
            ['nama_mata_pelajaran' => 'IPS', 'kode_mata_pelajaran' => 'IPS'],
            ['nama_mata_pelajaran' => 'Pendidikan Agama', 'kode_mata_pelajaran' => 'PA'],
            ['nama_mata_pelajaran' => 'PPKN', 'kode_mata_pelajaran' => 'PPKN'],
            ['nama_mata_pelajaran' => 'Bahasa Inggris', 'kode_mata_pelajaran' => 'BING'],
            ['nama_mata_pelajaran' => 'Seni Budaya dan Keterampilan', 'kode_mata_pelajaran' => 'SBK'],
            ['nama_mata_pelajaran' => 'Pendidikan Jasmani dan Kesehatan', 'kode_mata_pelajaran' => 'PJOK'],
        ];

        DB::table('mata_pelajaran')->insert($mataPelajaran);
    }
}
