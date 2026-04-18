<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Peminjaman</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-4">

<h3>Aplikasi Peminjaman Alat</h3>
<hr>

{{-- NOTIFIKASI --}}
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

{{-- KONTEN --}}
@yield('content')

</body>
</html>