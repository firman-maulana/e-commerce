<style>
    * {
        box-sizing: border-box;
    }

    body {
        font-family: 'Segoe UI', sans-serif;
        margin: 0;
        padding: 0;
        background: #f2f2f2;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .container {
        display: flex;
        width: 900px;
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    .left-panel {
        flex: 1;
        padding: 40px 30px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .left-panel h2 {
        text-align: center;
        color: #26a69a;
        margin-bottom: 25px;
    }

    .left-panel form {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .left-panel input {
        padding: 12px 14px;
        border: 1px solid #ccc;
        border-radius: 8px;
    }

    .left-panel button {
        padding: 12px;
        background: white;
        color: black;
        border: 2px solid black;
        border-radius: 8px;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .left-panel button:hover {
        background: black;
        color: white;
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
    }

    .btn-google i {
        margin-right: 8px;
    }

    .left-panel p {
        text-align: center;
        margin-top: 10px;
    }

    .left-panel a {
        color: #26a69a;
        text-decoration: none;
    }

    .left-panel a:hover {
        text-decoration: underline;
    }

    .message {
        text-align: center;
        margin-bottom: 10px;
        font-size: 14px;
    }

    .message.error {
        color: red;
    }

    .message.success {
        color: green;
    }

    .right-panel {
        flex: 1;
        background: linear-gradient(135deg, #26a69a, #26c6da);
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 40px;
        animation: slideIn 0.8s ease-out forwards;
        transform: translateX(-100%);
        opacity: 0;
    }

    .right-panel h2 {
        margin: 0 0 10px;
        font-size: 28px;
    }

    .right-panel p {
        margin: 0;
        text-align: center;
    }

    @keyframes slideIn {
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
</style>

<div class="container">
    <div class="left-panel">
        <h2>Sign In</h2>

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

    <div class="right-panel">
        <h2>Welcome!</h2>
        <p>Don't have an account?<br> Sign up now and join us!</p>
    </div>
</div>
