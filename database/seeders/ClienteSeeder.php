<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => "Omar Sulca",
            'email' => "omarsulca@outlook.com",
            'password' => Hash::make('12345678'),
        ]);

        /* DB::table('clientes')->insert([
            'nombres' => "Omar",
            'apellidos' => "Sulca",
            'direccion' => "Jr. Dos de Mayo 478 - Huánuco",
        ]); */

        Cliente::factory(50)->create();
    }
}
