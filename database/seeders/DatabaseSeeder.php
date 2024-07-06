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
       
        
        $userData = [
            [
                'email' => 'Admin@gmail.com',
                'name'=>'admin',
                'role' => 'admin',
                'password' => bcrypt('admin'),
            ],  

            [
                'email' => 'siswa1@gmail.com',
                'name'=>'budi',
                'role' => 'siswa',
                'password' => bcrypt('1'),
            ]
        ];
        
       
        foreach($userData as $key => $val){
            User::create($val);
        }
       
       
       $this->call([
        kelasSeeder::class,
        MataPelajaranSeeder::class,
        MuridSeeder::class,
        NilaiSeeder::class,
       ]);

        


    }
}
