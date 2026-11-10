<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    protected $model = \App\Models\Movie::class;

    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'director' => fake()->name(),
            'genre' => fake()->randomElement(['Action', 'Drama', 'Sci-Fi', 'Horror', 'Comedy', 'Animation']),
            'release_year' => fake()->numberBetween(2000, 2026),
            'rating' => fake()->randomFloat(1, 5.0, 10.0),
        ];
    }
}