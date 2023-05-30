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
        foreach (range(1, 99) as $number) {
            Mahasiswa::create([
                'npm' => '21252500' . $number,
                'nama' => fake()->name(),
                'tanggal' => fake()->date($format = 'Y-m-d', $max = 'now'),
                'kota_lahir' => fake()->state(),
                'foto' => '1312332.jpg',
                'prodi_id' => '9949fae8-d1bf-4465-bf2a-131d757735ff'
            ]);
        }

        $this->call([
            FakultasSeeder::class
        ]);
    }
}
