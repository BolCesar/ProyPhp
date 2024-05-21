<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::create([
            'nombre'=> 'Limpieza',
            'posicion' => 0
        ]);

        Categoria::create([
            'nombre'=> 'Comida',
            'posicion' => 1
        ]);

        Categoria::create([
            'nombre'=> 'Bebida',
            'posicion' => 2
        ]);
    }
}