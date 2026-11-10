<x-App>
    <x-slot:title>{{ $title }}</x-slot>

    <a class="btn-solid theme-primary" href="{{ route('movie.create') }}" role="button">Tambah Film</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul Film</th>
                <th scope="col">Sutradara</th>
                <th scope="col">Genre</th>
                <th scope="col">Tahun Rilis</th>
                <th scope="col">Rating</th>
                <th scope="col">Aksi</th>
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
                        <!-- Tombol aksi Edit / Delete -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-App>
