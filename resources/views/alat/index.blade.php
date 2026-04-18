@extends('layouts.app')

@section('content')

<h2>Data Alat</h2>

<table class="table">
...
</table>

@endsection
<h2>Data Alat</h2>

<a href="/alat/create">+ Tambah</a>

<table border="1">
    <tr>
        <th>Nama</th>
        <th>Kategori</th>
        <th>Stok</th>
        <th>Kondisi</th>
        <th>Aksi</th>
    </tr>

    @foreach($alat as $a)
    <tr>
        <td>{{ $a->nama }}</td>
        <td>{{ $a->kategori->nama ?? '-' }}</td>
        <td>{{ $a->stok }}</td>
        <td>{{ $a->kondisi }}</td>
        <td>
            <a href="/alat/{{ $a->id }}/edit">Edit</a>

            <form action="/alat/{{ $a->id }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Hapus?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>