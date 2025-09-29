<?php

namespace Database\Factories;

use App\Models\JobBoard;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobBoard>
 */
class JobBoardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
    return [
            'title' => fake()->jobTitle,
            'description' => fake()->paragraph,
            'salary' =>fake()->numberBetween(5_000, 15_0000),
            'location' => fake()->city,
            'category' => fake()->randomElement(JobBoard::$category),
            'experience' => fake()->randomElement(JobBoard::$experience)
        ];
    }
}
