<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Panggil semua seeder utama di sini
        $this->call([
            UserSeeder::class,
            // Tambahkan seeder lain di bawah ini sesuai kebutuhan
            // KaryawanSeeder::class,
            // AbsensiSeeder::class,
            // GajiSeeder::class,
        ]);
    }
}
