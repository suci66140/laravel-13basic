<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('movie.index', [
            'title' => 'Movie',
            'movies' => Movie::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movie.create', ['title' => 'Create Movie']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'        => 'required|string|max:255',
            'director'     => 'required|string|max:255',
            'release_year' => 'required|numeric|digits:4',
            'genre'        => 'required|string|max:100',
            'rating'       => 'required|numeric|min:0|max:10',
            'synopsis'     => 'required|string',
        ], [
            'title.required'        => 'Judul film wajib di input',
            'director.required'     => 'Nama sutradara wajib di input',
            'release_year.required' => 'Tahun rilis wajib di input',
            'release_year.numeric'  => 'Tahun rilis wajib berupa angka',
            'release_year.digits'   => 'Tahun rilis wajib 4 digit',
            'genre.required'        => 'Genre film wajib di input',
            'rating.required'       => 'Rating wajib di input',
            'rating.numeric'        => 'Rating wajib berupa angka',
            'synopsis.required'     => 'Sinopsis wajib di input',
        ]);

        Movie::create($validated);
        return to_route('movie.index')->withSuccess('Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        return view('movie.edit', [
            'title' => 'Edit Movie',
            'movie' => $movie,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        $validated = $request->validate([
            'title'        => 'required|string|max:255',
            'director'     => 'required|string|max:255',
            'release_year' => 'required|numeric|digits:4',
            'genre'        => 'required|string|max:100',
            'rating'       => 'required|numeric|min:0|max:10',
            'synopsis'     => 'required|string',
        ], [
            'title.required'        => 'Judul film wajib di input',
            'director.required'     => 'Nama sutradara wajib di input',
            'release_year.required' => 'Tahun rilis wajib di input',
            'release_year.numeric'  => 'Tahun rilis wajib berupa angka',
            'release_year.digits'   => 'Tahun rilis wajib 4 digit',
            'genre.required'        => 'Genre film wajib di input',
            'rating.required'       => 'Rating wajib di input',
            'rating.numeric'        => 'Rating wajib berupa angka',
            'synopsis.required'     => 'Sinopsis wajib di input',
        ]);

        $movie->update($validated);
        return to_route('movie.index')->withSuccess('Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return to_route('movie.index')->withSuccess('Data berhasil dihapus');
    }
}