<style>
    body {
        font-family: 'Segoe UI', sans-serif;
        background: #f2f2f2;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .auth-container {
        background-color: #fff;
        padding: 40px 30px;
        border-radius: 12px;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
        width: 100%;
        max-width: 400px;
    }

    .auth-container h2 {
        text-align: center;
        margin-bottom: 25px;
        color: #333;
    }

    .auth-container input[type="text"],
    .auth-container input[type="email"],
    .auth-container input[type="password"] {
        width: 100%;
        padding: 12px 14px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 8px;
        transition: border 0.3s;
    }

    .auth-container input:focus {
        border-color: #1e90ff;
        outline: none;
    }

    .auth-container button {
        width: 100%;
        padding: 12px;
        background-color: #1e90ff;
        color: #fff;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s;
    }

    .auth-container button:hover {
        background-color: #0c7ddf;
    }

    .auth-container a {
        color: #1e90ff;
        text-decoration: none;
    }

    .auth-container a:hover {
        text-decoration: underline;
    }

    .auth-container .btn-google {
        background-color: #dd4b39;
        margin-top: 10px;
    }

    .auth-container p {
        text-align: center;
        margin-top: 15px;
    }

    .auth-container .error,
    .auth-container .success {
        text-align: center;
        margin-bottom: 10px;
        font-weight: bold;
    }

    .auth-container .error {
        color: red;
    }

    .auth-container .success {
        color: green;
    }
</style>
<div class="auth-container">
    <h2>Register</h2>

    @if($errors->any())
        <div class="error">{{ $errors->first() }}</div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <input name="name" type="text" placeholder="Nama" required>
        <input name="email" type="email" placeholder="Email" required>
        <input name="password" type="password" placeholder="Password" required>
        <input name="password_confirmation" type="password" placeholder="Konfirmasi Password" required>
        <button type="submit">Sign Up</button>
    </form>

    <p>Sudah punya akun? <a href="{{ route('signIn') }}">Sign In</a></p>
</div>
