@extends('layouts.app')

@section('content')

<h2>Data Alat</h2>

<table class="table">
...
</table>

@endsection
<h2>Data Kategori</h2>

<a href="/kategori/create">+ Tambah</a>

<table border="1">
    <tr>
        <th>Nama</th>
        <th>Aksi</th>
    </tr>

    @foreach($kategori as $k)
    <tr>
        <td>{{ $k->nama }}</td>
        <td>
            <a href="/kategori/{{ $k->id }}/edit">Edit</a>

            <form action="/kategori/{{ $k->id }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Hapus?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>