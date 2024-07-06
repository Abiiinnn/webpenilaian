<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MuridSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('murid')->insert([
            // Students for class 1 - A
            [
                'nama' => 'Ali Purnama',
                'alamat' => 'Jalan Merdeka 1',
                'nama_orang_tua' => 'Pak Ali',
                'kota_lahir' => 'Bandung',
                'tanggal_lahir' => '2012-01-15',
                'kelas_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Budi Purnama',
                'alamat' => 'Jalan Merdeka 2',
                'nama_orang_tua' => 'Bu Budi',
                'kota_lahir' => 'Bandung',
                'tanggal_lahir' => '2012-02-10',
                'kelas_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Students for class 1 - B
            [
                'nama' => 'Citra Sabit',
                'alamat' => 'Jalan Damai 1',
                'nama_orang_tua' => 'Pak Citra',
                'kota_lahir' => 'Jakarta',
                'tanggal_lahir' => '2012-03-20',
                'kelas_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Dewi Sabit',
                'alamat' => 'Jalan Damai 2',
                'nama_orang_tua' => 'Bu Dewi',
                'kota_lahir' => 'Jakarta',
                'tanggal_lahir' => '2012-04-25',
                'kelas_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Students for class 2 - A
            [
                'nama' => 'Eka Harimau',
                'alamat' => 'Jalan Melati 1',
                'nama_orang_tua' => 'Pak Eka',
                'kota_lahir' => 'Surabaya',
                'tanggal_lahir' => '2011-05-30',
                'kelas_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Fajar Harimau',
                'alamat' => 'Jalan Melati 2',
                'nama_orang_tua' => 'Bu Fajar',
                'kota_lahir' => 'Surabaya',
                'tanggal_lahir' => '2011-06-15',
                'kelas_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Students for class 2 - B
            [
                'nama' => 'Gita Elang',
                'alamat' => 'Jalan Kenanga 1',
                'nama_orang_tua' => 'Pak Gita',
                'kota_lahir' => 'Medan',
                'tanggal_lahir' => '2011-07-10',
                'kelas_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Hana Elang',
                'alamat' => 'Jalan Kenanga 2',
                'nama_orang_tua' => 'Bu Hana',
                'kota_lahir' => 'Medan',
                'tanggal_lahir' => '2011-08-20',
                'kelas_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Students for class 3 - A
            [
                'nama' => 'Iwan Matahari',
                'alamat' => 'Jalan Sakura 1',
                'nama_orang_tua' => 'Pak Iwan',
                'kota_lahir' => 'Yogyakarta',
                'tanggal_lahir' => '2010-09-25',
                'kelas_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Jaka Matahari',
                'alamat' => 'Jalan Sakura 2',
                'nama_orang_tua' => 'Bu Jaka',
                'kota_lahir' => 'Yogyakarta',
                'tanggal_lahir' => '2010-10-30',
                'kelas_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Students for class 3 - B
            [
                'nama' => 'Kiki Bulan',
                'alamat' => 'Jalan Teratai 1',
                'nama_orang_tua' => 'Pak Kiki',
                'kota_lahir' => 'Semarang',
                'tanggal_lahir' => '2010-11-05',
                'kelas_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Lina Bulan',
                'alamat' => 'Jalan Teratai 2',
                'nama_orang_tua' => 'Bu Lina',
                'kota_lahir' => 'Semarang',
                'tanggal_lahir' => '2010-12-15',
                'kelas_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Students for class 4 - A
            [
                'nama' => 'Mira Angin',
                'alamat' => 'Jalan Mawar 1',
                'nama_orang_tua' => 'Pak Mira',
                'kota_lahir' => 'Palembang',
                'tanggal_lahir' => '2009-01-20',
                'kelas_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Nina Angin',
                'alamat' => 'Jalan Mawar 2',
                'nama_orang_tua' => 'Bu Nina',
                'kota_lahir' => 'Palembang',
                'tanggal_lahir' => '2009-02-25',
                'kelas_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Students for class 4 - B
            [
                'nama' => 'Oka Hujan',
                'alamat' => 'Jalan Flamboyan 1',
                'nama_orang_tua' => 'Pak Oka',
                'kota_lahir' => 'Denpasar',
                'tanggal_lahir' => '2009-03-30',
                'kelas_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Putu Hujan',
                'alamat' => 'Jalan Flamboyan 2',
                'nama_orang_tua' => 'Bu Putu',
                'kota_lahir' => 'Denpasar',
                'tanggal_lahir' => '2009-04-15',
                'kelas_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Students for class 5 - A
            [
                'nama' => 'Qori Badai',
                'alamat' => 'Jalan Kemuning 1',
                'nama_orang_tua' => 'Pak Qori',
                'kota_lahir' => 'Makassar',
                'tanggal_lahir' => '2008-05-20',
                'kelas_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Rani Badai',
                'alamat' => 'Jalan Kemuning 2',
                'nama_orang_tua' => 'Bu Rani',
                'kota_lahir' => 'Makassar',
                'tanggal_lahir' => '2008-06-15',
                'kelas_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Students for class 5 - B
            [
                'nama' => 'Siti Pelangi',
                'alamat' => 'Jalan Dahlia 1',
                'nama_orang_tua' => 'Pak Siti',
                'kota_lahir' => 'Malang',
                'tanggal_lahir' => '2008-07-10',
                'kelas_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Tina Pelangi',
                'alamat' => 'Jalan Dahlia 2',
                'nama_orang_tua' => 'Bu Tina',
                'kota_lahir' => 'Malang',
                'tanggal_lahir' => '2008-08-05',
                'kelas_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Students for class 6 - A
            [
                'nama' => 'Udin Bintang',
                'alamat' => 'Jalan Bougenville 1',
                'nama_orang_tua' => 'Pak Udin',
                'kota_lahir' => 'Padang',
                'tanggal_lahir' => '2007-09-20',
                'kelas_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Vina Bintang',
                'alamat' => 'Jalan Bougenville 2',
                'nama_orang_tua' => 'Bu Vina',
                'kota_lahir' => 'Padang',
                'tanggal_lahir' => '2007-10-25',
                'kelas_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Students for class 6 - B
            [
                'nama' => 'Wawan Gemilang',
                'alamat' => 'Jalan Seruni 1',
                'nama_orang_tua' => 'Pak Wawan',
                'kota_lahir' => 'Bandar Lampung',
                'tanggal_lahir' => '2007-11-15',
                'kelas_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Xena Gemilang',
                'alamat' => 'Jalan Seruni 2',
                'nama_orang_tua' => 'Bu Xena',
                'kota_lahir' => 'Bandar Lampung',
                'tanggal_lahir' => '2007-12-20',
                'kelas_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
