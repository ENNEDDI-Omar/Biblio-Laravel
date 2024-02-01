<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'description' => fake()->paragraph(),
        'date_reservation' => fake()->dateTimeBetween('now', '2024-02-05'),
        'date_retour' => fake()->dateTimeBetween('now', '2024-02-25'),
        'user_id'=>function(){
            return \app\Models\User::factory()->create()->id;
        },
        'book_id' =>function(){
            return \app\Models\Book::factory()->create()->id;
        },
        ];
    }
}
