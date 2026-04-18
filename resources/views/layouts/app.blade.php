<!DOCTYPE html>
<html>
<head>
    <title>Peminjaman Alat</title>

    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="{{ asset('node_modules/admin-lte/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <span class="navbar-brand">Peminjaman</span>
    </nav>

    <!-- Sidebar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="#" class="brand-link text-center">APP</a>

        <div class="sidebar">
            <nav>
                <ul class="nav nav-pills nav-sidebar flex-column">

                    <li class="nav-item">
                        <a href="/admin" class="nav-link">Dashboard</a>
                    </li>

                    <li class="nav-item">
                        <a href="/alat" class="nav-link">Alat</a>
                    </li>

                    <li class="nav-item">
                        <a href="/kategori" class="nav-link">Kategori</a>
                    </li>

                    <li class="nav-item">
                        <a href="/peminjaman" class="nav-link">Peminjaman</a>
                    </li>

                    <li class="nav-item">
                        <a href="/approve" class="nav-link">Approve</a>
                    </li>

                    <li class="nav-item">
                        <a href="/laporan" class="nav-link">Laporan PDF</a>
                    </li>

                </ul>
            </nav>
        </div>
    </aside>

    <!-- Content -->
    <div class="content-wrapper p-3">

        {{-- NOTIF --}}
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        @yield('content')

    </div>

</div>

<!-- JS -->
<script src="{{ asset('node_modules/admin-lte/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('node_modules/admin-lte/dist/js/adminlte.min.js') }}"></script>

</body>
</html>