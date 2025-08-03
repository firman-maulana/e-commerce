<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: #f2f6fc;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .login-container {
        background: white;
        padding: 40px 30px;
        border-radius: 12px;
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 400px;
    }

    .login-container h2 {
        text-align: center;
        margin-bottom: 25px;
        color: #333;
    }

    form input {
        width: 100%;
        padding: 12px 15px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 8px;
        transition: border-color 0.3s;
    }

    form input:focus {
        border-color: #007bff;
        outline: none;
    }

    form button {
        width: 100%;
        padding: 12px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    form button:hover {
        background-color: #0056b3;
    }

    .btn-google {
        display: inline-block;
        width: 100%;
        text-align: center;
        padding: 12px;
        background-color: #db4437;
        color: white;
        border-radius: 8px;
        text-decoration: none;
        font-weight: bold;
        margin-top: 10px;
    }

    .btn-google i {
        margin-right: 8px;
    }

    p {
        text-align: center;
        margin-top: 20px;
    }

    a {
        color: #007bff;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    .message {
        text-align: center;
        margin-bottom: 15px;
        font-size: 14px;
    }

    .message.error {
        color: red;
    }

    .message.success {
        color: green;
    }
</style>

<div class="login-container">
    <h2>Login</h2>

    @if(session('success'))
        <p class="message success">{{ session('success') }}</p>
    @endif

    @if($errors->any())
        <p class="message error">{{ $errors->first() }}</p>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <input name="email" type="email" placeholder="Email" required>
        <input name="password" type="password" placeholder="Password" required>
        <button type="submit">Sign In</button>

        <a href="{{ route('google.login') }}" class="btn-google">
            <i class="fab fa-google"></i> Login with Google
        </a>
    </form>

    <p>Belum punya akun? <a href="{{ route('signUp') }}">Sign Up</a></p>
    <p><a href="{{ route('password.request') }}">Forgot Password?</a></p>

</div>
