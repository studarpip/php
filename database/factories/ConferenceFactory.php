<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
class ConferenceFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake(),
            'description' => fake(),
            'conference_date' => now(),
            'address' => fake()->address()
        ];
    }
}
