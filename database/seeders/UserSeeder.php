<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'Petugas',
            'email' => 'petugas@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'petugas'
        ]);

        User::create([
            'name' => 'Peminjam',
            'email' => 'user@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'peminjam'
        ]);
    }
}
