<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Inaklug</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="{{ asset('images/inaklug.png') }}" alt="Inaklug Logo" class="logo me-2">
            <span class="brand-text">Inaklug</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav mx-3 mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('tentangkami') ? 'active' : '' }}" href="/tentangkami">Tentang Kami</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('layanankami') ? 'active' : '' }}" href="/layanankami">Layanan Kami</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('artikel') ? 'active' : '' }}" href="/artikel">Artikel</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('hubungi') ? 'active' : '' }}" href="/hubungi">Hubungi Kami</a></li>
            </ul>

            <div class="right-side d-flex align-items-center">
                <form class="search-form d-flex align-items-center" role="search">
                    <i class="bi bi-search search-icon"></i>
                    <input class="form-control" type="search" placeholder="Ketik pencarian" aria-label="Search">
                </form>
                <button class="btn-daftar">DAFTAR ONLINE</button>
            </div>
        </div>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
