@extends('layouts.app')

@section('content')

<h2>Data Alat</h2>

<table class="table">
...
</table>

@endsection
<h2>Edit Kategori</h2>

<form method="POST" action="/kategori/{{ $kategori->id }}">
    @csrf
    @method('PUT')

    <input name="nama" value="{{ $kategori->nama }}"><br>

    <button>Update</button>
</form>