<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        foreach(range(1,99) as $number) {
            Mahasiswa::create ([
                'npm' => '21252500'.$number,
                'nama' => fake()->name(),
                'tanggal' => fake()->date($format = 'Y-m-d', $max = 'now'),
                'kota_lahir' => fake()->state(),
                'foto' => 'FH_Knight_Centurion_2021.webp',
                'prodi_id' => '993ff205-65cc-410f-80d5-b390f473bbc4',
            ]);
        }

        $this->call([
           FakultasSeeder::class 
        ]);
    }
}
