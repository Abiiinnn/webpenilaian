<?php

namespace Database\Seeders;


use App\Models\Jurusan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $jurusan = DB::table('jurusan')->where('nama_jurusan','kodejurusan')->first->id;
        DB::table('jurusan')->insert([
            ['kodejurusan' => 'TS', 'namajurusan' => 'Teknik Sipil'],
            ['kodejurusan' => 'TM', 'namajurusan' => 'Teknik Mesin'],
            ['kodejurusan' => 'TE', 'namajurusan' => 'Teknik Elektro'],
            ['kodejurusan' => 'TK', 'namajurusan' => 'Teknik Kimia'],
            ['kodejurusan' => 'TI', 'namajurusan' => 'Teknik Industri'],
            ['kodejurusan' => 'TIK', 'namajurusan' => 'Teknik Infotmatika']
        ]);

      
        
    }
}
