<h2>Login</h2>

@if(session('success'))
    <p style="color: green">{{ session('success') }}</p>
@endif

@if($errors->any())
    <p style="color: red">{{ $errors->first() }}</p>
@endif

<form method="POST" action="{{ route('login') }}">
    @csrf
    <input name="email" type="email" placeholder="Email" required><br>
    <input name="password" type="password" placeholder="Password" required><br>
    <button type="submit">Sign In</button>

    <a href="{{ route('google.login') }}" class="btn btn-danger">
    <i class="fab fa-google"></i> Login with Google
</a>

</form>

<p>Belum punya akun? <a href="{{ route('signUp') }}">Sign Up</a></p>
