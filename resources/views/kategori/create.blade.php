<h2>Tambah Kategori</h2>

<form method="POST" action="/kategori">
    @csrf

    <input name="nama" placeholder="Nama kategori"><br>

    <button>Simpan</button>
</form>