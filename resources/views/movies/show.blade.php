@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('movies.index') }}" class="btn btn-outline-secondary mb-4">&larr; Kembali ke Daftar Film</a>

    <div class="card bg-secondary text-white border-0 shadow-lg">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('assets/images/' . $movie->poster) }}" class="img-fluid rounded-start w-100 h-100" style="object-fit: cover;" alt="{{ $movie->title }}">
            </div>
            <div class="col-md-8">
                <div class="card-body p-4">
                    <span class="badge bg-danger mb-2">{{ $movie->genre }}</span>
                    <h2 class="card-title fw-bold display-6">{{ $movie->title }}</h2>
                    <p class="text-light fs-5 mb-3">{{ $movie->release_year }} &bull; {{ $movie->duration }}</p>

                    <div class="mb-3">
                        <strong>Sutradara:</strong>
                        <p class="mb-1">{{ $movie->director }}</p>
                    </div>

                    <div class="mb-3">
                        <strong>Pemeran:</strong>
                        <p class="mb-1">{{ $movie->cast }}</p>
                    </div>
                    <div class="mb-3">
    <strong>Harga Tiket:</strong>
    <h4 class="text-warning fw-bold">Rp {{ number_format($movie->price, 0, ',', '.') }}</h4>
</div>

                    <div class="mb-3">
                        <strong>Sinopsis:</strong>
                        <p class="text-light">{{ $movie->synopsis }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection