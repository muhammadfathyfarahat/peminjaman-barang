<form method="POST" action="/login" style="max-width:400px;margin:auto;padding:20px;border:1px solid #ddd;border-radius:10px;">
    @csrf

    <h2 style="text-align:center;margin-bottom:20px;">Login</h2>

    @if(session('error'))
        <div style="color:red;margin-bottom:10px;">
            {{ session('error') }}
        </div>
    @endif

    <div style="margin-bottom:15px;">
        <label>Email</label><br>
        <input type="email" name="email" value="{{ old('email') }}" required
            style="width:100%;padding:8px;border:1px solid #ccc;border-radius:5px;">
    </div>

    <div style="margin-bottom:15px;">
        <label>Password</label><br>
        <input type="password" name="password" required
            style="width:100%;padding:8px;border:1px solid #ccc;border-radius:5px;">
    </div>

    <button type="submit"
        style="width:100%;padding:10px;background:#4CAF50;color:white;border:none;border-radius:5px;">
        Login
    </button>
</form>