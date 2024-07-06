<?php

namespace Database\Seeders;


use App\Models\Murid;
use App\Models\Nilai;
use App\Models\Mata_Pelajaran;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $murid = Murid::all();
        $mataPelajaran = Mata_Pelajaran::all();

        foreach ($murid as $murids) {
            foreach ($mataPelajaran as $mataPelajarans) {
                Nilai::create([
                    'murid_id' => $murids->id,
                    'mata_pelajaran_id' => $mataPelajarans->id,
                    'kelas_id' => $murids->kelas_id,
                    'nilai' => 0,
                ]);
            }
        }
    }
}
