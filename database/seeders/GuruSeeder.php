<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('guru')->insert([
            [
                'nama' => 'Pak Purnama',
                'nip' => '1234567890',
                'kelamin' => 'Laki-laki',
                'alamat' => 'Jl. Merdeka No. 1',
                'tanggal_lahir' => '1980-01-01',
            ],
            [
                'nama' => 'Sabitha Sabrinah',
                'nip' => '0987654321',
                'kelamin' => 'Perempuan',
                'alamat' => 'Jl. Kebangsaan No. 2',
                'tanggal_lahir' => '1985-02-02',
            ],
            [
                'nama' => 'Pak Hari',
                'nip' => '1122334455',
                'kelamin' => 'Laki-laki',
                'alamat' => 'Jl. Pahlawan No. 3',
                'tanggal_lahir' => '1975-03-03',
            ],
            [
                'nama' => 'Bu Elina',
                'nip' => '5566778899',
                'kelamin' => 'Perempuan',
                'alamat' => 'Jl. Proklamasi No. 4',
                'tanggal_lahir' => '1988-04-04',
            ],
            [
                'nama' => 'Pak Elina',
                'nip' => '1234567890',
                'kelamin' => 'Laki-laki',
                'alamat' => 'Alamat Elina',
                'tanggal_lahir' => '1980-01-01',
            ],
            [
                'nama' => 'Pak Mata',
                'nip' => '1234567891',
                'kelamin' => 'Laki-laki',
                'alamat' => 'Alamat Mata',
                'tanggal_lahir' => '1981-02-02',
            ],
            [
                'nama' => 'Bu Bulan',
                'nip' => '1234567892',
                'kelamin' => 'Perempuan',
                'alamat' => 'Alamat Bulan',
                'tanggal_lahir' => '1982-03-03',
            ],
            [
                'nama' => 'Pak Angga',
                'nip' => '1234567893',
                'kelamin' => 'Laki-laki',
                'alamat' => 'Alamat Angga',
                'tanggal_lahir' => '1983-04-04',
            ],
            [
                'nama' => 'Bu Hujan',
                'nip' => '1234567894',
                'kelamin' => 'Perempuan',
                'alamat' => 'Alamat Hujan',
                'tanggal_lahir' => '1984-05-05',
            ],
            [
                'nama' => 'Pak Badai',
                'nip' => '1234567895',
                'kelamin' => 'Laki-laki',
                'alamat' => 'Alamat Badai',
                'tanggal_lahir' => '1985-06-06',
            ],
            [
                'nama' => 'Bu Pelangi',
                'nip' => '1234567896',
                'kelamin' => 'Perempuan',
                'alamat' => 'Alamat Pelangi',
                'tanggal_lahir' => '1986-07-07',
            ],
            [
                'nama' => 'Pak Bintang',
                'nip' => '1234567897',
                'kelamin' => 'Laki-laki',
                'alamat' => 'Alamat Bintang',
                'tanggal_lahir' => '1987-08-08',
            ],
            [
                'nama' => 'Bu Gemilang',
                'nip' => '1234567898',
                'kelamin' => 'Perempuan',
                'alamat' => 'Alamat Gemilang',
                'tanggal_lahir' => '1988-09-09',
            ],
        ]);
    }
}
