<h2>Register</h2>

@if($errors->any())
    <p style="color: red">{{ $errors->first() }}</p>
@endif

<form method="POST" action="{{ route('register') }}">
    @csrf
    <input name="name" type="text" placeholder="Nama" required><br>
    <input name="email" type="email" placeholder="Email" required><br>
    <input name="password" type="password" placeholder="Password" required><br>
    <input name="password_confirmation" type="password" placeholder="Konfirmasi Password" required><br>
    <button type="submit">Sign Up</button>
</form>

<p>Sudah punya akun? <a href="{{ route('signIn') }}">Sign In</a></p>
