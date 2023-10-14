<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'team_home_id' => $this->faker->numberBetween(1, 10),
            'team_guest_id' => $this->faker->numberBetween(11, 20),
            'score_home' => $this->faker->numberBetween(0, 5),
            'score_guest' => $this->faker->numberBetween(0, 5),
            'location' => $this->faker->city,
            'start' => $this->faker->dateTimeBetween('now', '+1 years'),
            'group' => $this->faker->randomElement(['A', 'B', 'C', 'D']),
        ];
    }
}
