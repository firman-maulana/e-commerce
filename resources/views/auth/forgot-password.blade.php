<div class="auth-container">
    <h2>Lupa Password</h2>

    @if($errors->any())
        <div class="error">{{ $errors->first() }}</div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <input type="email" name="email" placeholder="Masukkan email Anda" required>
        <button type="submit">Kirim OTP</button>
    </form>

    <p><a href="{{ route('signIn') }}">Kembali ke Login</a></p>
</div>
