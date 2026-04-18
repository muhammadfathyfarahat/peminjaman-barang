<h2>Tambah Alat</h2>

<form method="POST" action="/alat">
    @csrf

    <input name="nama" placeholder="Nama"><br>

    <select name="kategori_id">
        @foreach($kategori as $k)
        <option value="{{ $k->id }}">{{ $k->nama }}</option>
        @endforeach
    </select><br>

    <input name="stok" type="number" placeholder="Stok"><br>

    <input name="kondisi" placeholder="Kondisi"><br>

    <button>Simpan</button>
</form>