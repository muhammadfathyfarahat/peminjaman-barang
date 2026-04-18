<form action="/approve/{{ $d->id }}" method="POST">
    @csrf
    <button type="submit">Approve</button>
</form>