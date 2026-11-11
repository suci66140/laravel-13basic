<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('movies', function (Blueprint $table) {
    $table->id();
    $table->string('title');        // Kolom 1
    $table->string('genre');        // Kolom 2
    $table->integer('release_year');// Kolom 3
    $table->decimal('rating', 3, 1);// Kolom 4
    $table->text('synopsis');       // Kolom 5
    $table->string('director')->nullable(); // Kolom sutradara
    $table->timestamps();
});
    }

    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};