<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [
        'name' => fake()->words(3, true),
        'platform' => fake()->randomElement(['Steam', 'PlayStation', 'Xbox', 'Nintendo Switch']),
        'active_players' => fake()->numberBetween(1000, 2000000),
        'weekly_points' => fake()->numberBetween(10, 1000),
        'monthly_points' => fake()->numberBetween(100, 10000),
        'yearly_points' => fake()->numberBetween(1000, 100000),
    ];
}
}
