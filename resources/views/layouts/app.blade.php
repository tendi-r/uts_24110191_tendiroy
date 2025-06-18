<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Produk Alfamart - UTS_24110191_TendiRoy</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
     body {
        background-color: #1e1e2f;
        color: #f0f0f0;
        font-family: 'Segoe UI', sans-serif;
    }

    .navbar {
        background-color: #111827;
        border-bottom: 2px solid #4e8cff;
    }

    .navbar-brand {
        color: #4e8cff;
        font-weight: bold;
    }

    .navbar-nav .nav-link {
        color: #f0f0f0;
    }

    .navbar-nav .nav-link:hover,
    .navbar-nav .nav-link.active {
        color: #4e8cff;
    }

    /* ✅ TABEL */
    .table {
        background-color: #d0e7ff; /* biru muda */
    }

    .table th {
        background-color: #b8dbff; /* lebih gelap sedikit dari biru muda */
        color: #cc0000; /* merah */
    }

    .table td {
        background-color: #d0e7ff; /* biru muda */
        color: #cc0000; /* merah */
    }

    .btn-primary {
        background-color: #4e8cff;
        border: none;
    }

    .btn-primary:hover {
        background-color: #3a6fd9;
    }

    .footer {
        background-color: #111827;
        padding: 20px 0;
        margin-top: 40px;
        text-align: center;
        color: #aaaaaa;
        border-top: 1px solid #4e8cff;
    }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">AlfamartCRUD - UTS_24110191_TendiRoy</a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('products') ? 'active' : '' }}" href="{{ route('products.index') }}">Daftar Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('products/create') ? 'active' : '' }}" href="{{ route('products.create') }}">Tambah Produk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer class="footer">
        <div class="container">
            <p class="mb-0">Sistem Manajemen Produk Alfamart - UTS Pemrograman Web Lanjut - 24110191_TendiRoy</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>
