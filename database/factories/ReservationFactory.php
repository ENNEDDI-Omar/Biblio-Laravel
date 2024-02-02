<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;


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
            return User::factory()->create()->id;
        },
        'book_id' =>function(){
            return Book::factory()->create()->id;
        },
        ];
    }
}
