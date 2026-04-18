<h2>Edit Kategori</h2>

<form method="POST" action="/kategori/{{ $kategori->id }}">
    @csrf
    @method('PUT')

    <input name="nama" value="{{ $kategori->nama }}"><br>

    <button>Update</button>
</form>