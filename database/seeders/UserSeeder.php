<?php

namespace Database\Seeders;

use App\Models\Guru;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gurus = Guru::all();
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('admin'),
                'role' => 'admin',
                'guru_id' => null,
            ],
        ]);

        foreach ($gurus as $guru) {
            DB::table('users')->insert([
                'name' => $guru->nama,
                'email' => strtolower(str_replace(' ', '', $guru->nama)) . '@example.com',
                'password' => Hash::make('guru123'),
                'role' => 'guru',
                'guru_id' => $guru->id,
            ]);
    }
}
}   