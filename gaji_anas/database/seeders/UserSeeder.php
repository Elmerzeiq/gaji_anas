<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin user
        User::create([
            'name' => 'Admin',
            'email' => 'admin@domain.com',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);

        // Contoh pegawai user
        User::create([
            'name' => 'Pegawai Satu',
            'email' => 'pegawai1@domain.com',
            'password' => Hash::make('password123'),
            'role' => 'pegawai',
        ]);

        // Tambah user pegawai lainnya jika perlu
        User::factory(3)->create([
            'role' => 'pegawai',
        ]);
    }
}
