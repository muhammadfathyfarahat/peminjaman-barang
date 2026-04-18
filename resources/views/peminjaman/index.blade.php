<h2>Peminjaman Saya</h2>

<table border="1">
<tr>
    <th>Alat</th>
    <th>Status</th>
    <th>Aksi</th>
</tr>

@foreach($data as $d)
<tr>
    <td>{{ $d->alat->nama }}</td>
    <td>{{ $d->status }}</td>
    <td>
        @if($d->status == 'disetujui')
        <a href="/kembali/{{ $d->id }}">Kembalikan</a>
        @endif
    </td>
</tr>
@endforeach
</table>