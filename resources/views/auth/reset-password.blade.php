<div class="auth-container">
    <h2>Reset Password</h2>

    @if($errors->any())
        <div class="error">{{ $errors->first() }}</div>
    @endif

    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="email" value="{{ $email }}">
        <input type="hidden" name="token" value="{{ $token }}">

        <label>Password Baru:</label>
        <input type="password" name="password" required>

        <label>Konfirmasi Password:</label>
        <input type="password" name="password_confirmation" required>

        <button type="submit">Reset Password</button>
    </form>

    <p><a href="{{ route('signIn') }}">Back to Login</a></p>
</div>
