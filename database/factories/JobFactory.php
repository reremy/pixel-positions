<?php

namespace Database\Factories;

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle(),
            'salary' => fake()->randomElement(['RM2500', 'RM3000', 'RM3500', 'RM4000', 'RM4500', 'RM5000']),
            'location' => fake()->randomElement(['Remote', 'Hybrid', 'Onsite']),
            'schedule' => fake()->randomElement(['Full Time', 'Part Time', 'Shift']),
            'url' => fake()->url,
            'featured' => false,

        ];
    }
}
