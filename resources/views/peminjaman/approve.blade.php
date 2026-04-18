@extends('layouts.app')

@section('content')

<h2>Data Alat</h2>

<table class="table">
...
</table>

@endsection
<h2>Approval Peminjaman</h2>

<table border="1">
<tr>
    <th>User</th>
    <th>Alat</th>
    <th>Status</th>
    <th>Aksi</th>
</tr>

@foreach($data as $d)
<tr>
    <td>{{ $d->user->name }}</td>
    <td>{{ $d->alat->nama }}</td>
    <td>{{ $d->status }}</td>
    <td>
        @if($d->status == 'pending')
        <a href="/approve/{{ $d->id }}">Approve</a>
        @endif
    </td>
</tr>
@endforeach
</table>

