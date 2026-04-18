<form method="POST" action="/login">
    @csrf
    <h2>Login</h2>

    <input name="email" placeholder="Email"><br>
    <input name="password" type="password" placeholder="Password"><br>

    <button>Login</button>
</form>