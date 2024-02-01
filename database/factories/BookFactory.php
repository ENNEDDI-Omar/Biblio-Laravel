<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'couverture' => fake()->image('public/storage/', 400, 300, null, false),
        'titre' => fake()->title(),
        'genre' => fake()->word() ,
        'description' => fake()->paragraph(),
        'date_publication' => fake()->date(),
        'total_copies' => fake()->numberBetween(1, 10),
        'copies_dispo' => fake()->numberBetween(0, 10),
        ];
    }
}
