<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
   public function definition(): array
{
    return [
        'title' => fake()->sentence(2),
        'director' => fake()->name(), // <-- Tambahkan baris ini
        'genre' => fake()->randomElement(['Aksi', 'Komedi', 'Drama', 'Horor', 'Fiksi Ilmiah']),
        'release_year' => fake()->numberBetween(2010, 2026),
        'rating' => fake()->randomFloat(1, 5.0, 9.8),
        'synopsis' => 'Sinopsis film ini menceritakan tentang ' . fake()->paragraph(2),
    ];
}
}