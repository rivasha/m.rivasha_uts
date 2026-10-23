<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GenZCatch+ | Portal Film Lokal</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">

    <!-- Navbar Utama (Hanya Satu) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-black sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-danger fs-3" href="{{ route('movies.index') }}">GenZCatch<span class="text-white">+</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('movies.index') ? 'active fw-bold' : '' }}" href="{{ route('movies.index') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('profile') ? 'active fw-bold' : '' }}" href="{{ route('profile') }}">Profil</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content / Isi Halaman -->
    <main class="py-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-black text-center text-secondary py-3 mt-5">
        <div class="container">
            <small>&copy; {{ date('Y') }} GenZCatch+ Portal Film Lokal. All rights reserved.</small>
        </div>
    </footer>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>