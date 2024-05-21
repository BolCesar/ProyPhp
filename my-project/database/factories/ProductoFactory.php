<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [


                'nombre' => fake()->word()  ,
                'descripcion' =>fake()-> paragraph(),
                'precio' => fake()->numberBetween(1, 99),
                'moneda' => fake()->randomElement(['euro', 'dolar']),
                'disponible' => fake()->boolean(),
                'categoria_id' =>  fake()->numberBetween(1, 3),


        ];
    }
}
