<h2>Edit Alat</h2>

<form method="POST" action="/alat/{{ $alat->id }}">
    @csrf
    @method('PUT')

    <input name="nama" value="{{ $alat->nama }}"><br>

    <select name="kategori_id">
        @foreach($kategori as $k)
        <option value="{{ $k->id }}" 
            {{ $alat->kategori_id == $k->id ? 'selected' : '' }}>
            {{ $k->nama }}
        </option>
        @endforeach
    </select><br>

    <input name="stok" value="{{ $alat->stok }}"><br>

    <input name="kondisi" value="{{ $alat->kondisi }}"><br>

    <button>Update</button>
</form>