@extends('layouts.app')

@section('content')
<div class="container">
    <div class="my-4 text-center">
        <h1 class="fw-bold">Nonton Film Lokal Terbaru</h1>
        <p class="text-secondary">Dukungan penuh untuk karya sinematik anak bangsa di GenZCatch+</p>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($movies as $movie)
            <div class="col">
                <div class="card h-100 bg-secondary text-white border-0 shadow">
                    <!-- Gambar Poster -->
                    <img src="{{ asset('assets/images/' . $movie->poster) }}" class="card-img-top" alt="{{ $movie->title }}" style="height: 380px; object-fit: cover;">
                    
                    <div class="card-body d-flex flex-column">
                        <!-- Badge Genre & Harga Tiket -->
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge bg-danger">{{ $movie->genre }}</span>
                            <span class="fw-bold text-warning">Rp {{ number_format($movie->price, 0, ',', '.') }}</span>
                        </div>
                        
                        <!-- Judul Film -->
                        <h5 class="card-title fw-bold">{{ $movie->title }}</h5>
                        
                        <!-- Ringkasan Sinopsis -->
                        <p class="card-text text-light small mb-3">
                            {{ Str::limit($movie->synopsis, 100) }}
                        </p>
                        
                        <!-- Tombol Detail -->
                        <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-outline-light mt-auto">Detail Film</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection