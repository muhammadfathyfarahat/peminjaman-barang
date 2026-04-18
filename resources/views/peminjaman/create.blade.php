<h2>Pinjam Alat</h2>

@if(session('error')) <p>{{ session('error') }}</p> @endif
@if(session('success')) <p>{{ session('success') }}</p> @endif

<form method="POST" action="/pinjam">
    @csrf

    <select name="alat_id">
        @foreach($alat as $a)
        <option value="{{ $a->id }}">
            {{ $a->nama }} (stok: {{ $a->stok }})
        </option>
        @endforeach
    </select>

    <button>Pinjam</button>
</form>