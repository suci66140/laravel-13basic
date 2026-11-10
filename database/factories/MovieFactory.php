<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title'        => fake()->sentence(3),
            'director'     => fake()->name(),
            'release_year' => fake()->year(),
            'genre'        => fake()->randomElement(['Action', 'Drama', 'Comedy', 'Sci-Fi', 'Horror', 'Romance']),
            'rating'       => fake()->randomFloat(1, 1, 10),
            'synopsis'     => fake()->paragraph(),
        ];
    }
}