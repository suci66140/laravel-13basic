<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    public function run(): void
    {
        Movie::create([
            'title'        => 'Inception',
            'director'     => 'Christopher Nolan',
            'release_year' => 2010,
            'genre'        => 'Sci-Fi',
            'rating'       => 8.8,
            'synopsis'     => 'Seorang pencuri yang mencuri rahasia korporat melalui penggunaan teknologi berbagi mimpi.',
        ]);

        Movie::create([
            'title'        => 'Interstellar',
            'director'     => 'Christopher Nolan',
            'release_year' => 2014,
            'genre'        => 'Sci-Fi',
            'rating'       => 8.7,
            'synopsis'     => 'Tim penjelajah menjelajahi lubang cacing di luar angkasa untuk memastikan kelangsungan hidup manusia.',
        ]);

        Movie::create([
            'title'        => 'The Dark Knight',
            'director'     => 'Christopher Nolan',
            'release_year' => 2008,
            'genre'        => 'Action',
            'rating'       => 9.0,
            'synopsis'     => 'Batman bertarung melawan ancaman Joker yang membuat kota Gotham dalam kekacauan.',
        ]);
    }
}