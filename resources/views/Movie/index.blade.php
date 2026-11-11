<x-App>

    <x-slot:title>{{ $title }}</x-slot>

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    
    <a class="btn btn-primary mb-3" href="{{ route('movie.create') }}" role="button">Create Movie</a>

    <table class="table table-bordered border-dark table-hover">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Director</th>
                <th scope="col">Genre</th>
                <th scope="col">Release Year</th>
                <th scope="col">Rating</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($movies as $movie)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->director }}</td>
                    <td>{{ $movie->genre }}</td>
                    <td>{{ $movie->release_year }}</td>
                    <td>{{ $movie->rating }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('movie.edit', $movie) }}" role="button">Edit</a>

                        <form method="POST" action="{{ route('movie.destroy', $movie) }}" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</x-App>