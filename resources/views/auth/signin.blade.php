<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
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
            color: black;
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
            transition: border-color 0.3s ease;
        }

        .left-panel input:focus {
            outline: none;
            border-color: #26a69a;
        }

        .left-panel button {
            padding: 12px;
            background: white;
            color: black;
            border: 2px solid black;
            border-radius: 8px;
            font-weight: bold;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .left-panel button:hover {
            background: black;
            color: white;
            transform: translateY(-1px);
        }

        .btn-google {
            display: inline-block;
            width: 100%;
            text-align: center;
            padding: 12px;
            background-color: black;
            color: white;
            border: 2px solid black;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        /* Perbaikan styling untuk teks dan icon Google */
        .btn-google .google-text {
            color: white; /* Putih saat background hitam */
            transition: color 0.3s ease;
        }

        .btn-google i {
            color: white; /* Icon putih saat background hitam */
            margin-right: 8px;
            transition: color 0.3s ease;
        }

        .btn-google:hover {
            background: white;
            color: black;
            transform: translateY(-1px);
        }

        .btn-google:hover .google-text {
            color: black; /* Hitam saat background putih */
        }

        .btn-google:hover i {
            color: black; /* Icon hitam saat background putih */
        }

        .left-panel p {
            text-align: center;
            margin-top: 10px;
        }

        .left-panel a {
            color: #ff6b6b;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .message {
            text-align: center;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .message.error {
            color: red;
            padding: 10px;
            background: rgba(255, 0, 0, 0.1);
            border-radius: 5px;
        }

        .message.success {
            color: green;
            padding: 10px;
            background: rgba(0, 255, 0, 0.1);
            border-radius: 5px;
        }

        .right-panel {
            flex: 1;
            background: linear-gradient(45deg, #000, #333, #666, #333, #000);
            background-size: 400% 400%;
            animation: gradientShift 8s ease infinite;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px;
            position: relative;
            overflow: hidden;
        }

        /* Animasi gradient background */
        @keyframes gradientShift {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        /* Tambahan efek floating particles */
        .right-panel::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 20% 80%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255, 255, 255, 0.08) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(255, 255, 255, 0.05) 0%, transparent 50%);
            animation: floating 12s ease-in-out infinite;
        }

        @keyframes floating {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            33% {
                transform: translateY(-10px) rotate(1deg);
            }

            66% {
                transform: translateY(5px) rotate(-1deg);
            }
        }

        .right-panel h2 {
            margin: 0 0 10px;
            font-size: 28px;
            position: relative;
            z-index: 2;
        }

        .right-panel p {
            margin: 0 0 20px;
            text-align: center;
            position: relative;
            z-index: 2;
        }

        .right-panel a {
            display: inline-block;
            text-align: center;
            text-decoration: none;
            background: transparent;
            border: 2px solid white;
            padding: 10px 25px;
            border-radius: 30px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 20px;
            position: relative;
            z-index: 2;
        }

        .right-panel a:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        /* Tambahan animasi slide */
@keyframes slideInLeft {
    0% {
        opacity: 0;
        transform: translateX(100%);
    }
    100% {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes slideInRight {
    0% {
        opacity: 0;
        transform: translateX(-100%);
    }
    100% {
        opacity: 1;
        transform: translateX(0);
    }
}

.animate-left {
    animation: slideInLeft 1s ease forwards;
    animation-delay: 0.2s;
}

.animate-right {
    animation: slideInRight 1s ease forwards;
}

    </style>
</head>

<body>
    <div class="container">
<div class="left-panel animate-left">
    <h2>Sign In to MANEVIZ</h2>

    @if (session('success'))
        <div class="message success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="message error">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <input name="email" type="email" placeholder="Email" value="{{ old('email') }}" required>
        <input name="password" type="password" placeholder="Password" required>
        <button type="submit">Sign In</button>

        <a href="{{ route('google.login') }}" class="btn-google">
            <i class="fab fa-google"></i>
            <span class="google-text">Login with Google</span>
        </a>
    </form>

    <p>Don't have an account yet? <a href="{{ route('signUp') }}">Sign Up</a></p>
    <p><a href="{{ route('password.request') }}">Forgot Password?</a></p>
</div>


        <div class="right-panel animate-right">
            <h2>Hello, Friend!</h2>
            <p>Enter your personal details <br>and start shopping at our store</p>
            <a href="{{ route('signUp') }}">SIGN UP</a>
        </div>
    </div>

    <!-- Font Awesome for Google icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</body>

</html>