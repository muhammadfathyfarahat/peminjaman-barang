@extends('layouts.app')

@section('content')

<h2>Data Alat</h2>

<a href="/alat/create" class="btn btn-primary mb-2">Tambah</a>

<table class="table table-bordered">
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
        <td>{{ $a->kategori->nama }}</td>
        <td>{{ $a->stok }}</td>
        <td>{{ $a->kondisi }}</td>
        <td>
            <a href="/alat/{{ $a->id }}/edit" class="btn btn-warning btn-sm">Edit</a>

            <form action="/alat/{{ $a->id }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>

@endsection