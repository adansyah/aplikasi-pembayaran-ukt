<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'nim' => '23110065',
            'name' => 'Syahdan Mutahariq',
            'email' => 'adansyah225@gmail.com',
            'password' => Hash::make('12345678'),
            'prodi' => 'Teknik Informatika',
            'fakultas' => 'S1'
        ], [
            'nim' => '23110065',
            'name' => 'Syahdan Mutahariq',
            'email' => 'adanbtbm@gmail.com',
            'password' => Hash::make('12345678'),
            'prodi' => 'Teknik Informatika',
            'fakultas' => 'S1'
        ]);
    }
}
