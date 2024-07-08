<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Jurusan;
use App\Models\Murid;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
       
        
        
       
       
       $this->call([
        GuruSeeder::class,
        kelasSeeder::class,
        MuridSeeder::class,
        MataPelajaranSeeder::class,
        NilaiSeeder::class,
        UserSeeder::class,
       ]);

        


    }
}
