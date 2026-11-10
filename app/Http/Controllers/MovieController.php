<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        return view('movie.index', [
            'title' => 'Data Film',
            'movies' => Movie::all()
        ]);
    }

    public function create()
    {
        return view('movie.create', [
            'title' => 'Tambah Data Film'
        ]);
    }

    // Fungsi store, show, edit, update, delete dapat disesuaikan berikutnya
}