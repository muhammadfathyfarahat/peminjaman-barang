@extends('layouts.app')

@section('content')

<h2>Data Alat</h2>

<table class="table">
...
</table>

@endsection
<h2>Tambah Kategori</h2>

<form method="POST" action="/kategori">
    @csrf

    <input name="nama" placeholder="Nama kategori"><br>

    <button>Simpan</button>
</form>