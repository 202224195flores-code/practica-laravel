<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'nombre' => 'Administrador',
                'email' => 'admin@odyssey.com',
                'telefono' => '5551234567',
                'password' => Hash::make('password123'),
            ],
            [
                'nombre' => 'Cliente Prueba',
                'email' => 'cliente@odyssey.com',
                'telefono' => '5559876543',
                'password' => Hash::make('password123'),
            ],
        ]);
    }
}