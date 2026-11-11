<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <!-- Ubah teks header di bawah ini menjadi Create Movie -->
    <div class="bg-blue-600 py-6 shadow-md mb-6">
        <h1 class="text-center text-white text-4xl font-bold">Create Movie</h1>
    </div>

    <form method="POST" action="{{ route('movie.store') }}">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                value="{{ old('title') }}">
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="director" class="form-label">Director</label>
            <input type="text" class="form-control @error('director') is-invalid @enderror" id="director"
                name="director" value="{{ old('director') }}">
            @error('director')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" class="form-control @error('genre') is-invalid @enderror" id="genre"
                name="genre" value="{{ old('genre') }}">
            @error('genre')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="release_year" class="form-label">Release Year</label>
            <input type="number" class="form-control @error('release_year') is-invalid @enderror" id="release_year"
                name="release_year" value="{{ old('release_year') }}">
            @error('release_year')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="rating" class="form-label">Rating</label>
            <input type="number" step="0.1" class="form-control @error('rating') is-invalid @enderror"
                id="rating" name="rating" value="{{ old('rating') }}">
            @error('rating')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="synopsis" class="form-label">Synopsis</label>
            <textarea class="form-control @error('synopsis') is-invalid @enderror" id="synopsis" name="synopsis" rows="3">{{ old('synopsis') }}</textarea>
            @error('synopsis')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <a class="btn btn-warning" href="{{ route('movie.index') }}" role="button">Back</a>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

</x-app>
