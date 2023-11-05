<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pelicula>
 */
class PeliculaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "titulo" => fake()->words(3, true),
            "genero" => fake()->word(),
            "año" => fake()->year(),
            "descripcion" => fake()->paragraph(1),
            "poster" => fake()->url()
        ];
    }
}
