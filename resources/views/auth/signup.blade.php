<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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
        .left-panel::before {
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

        .left-panel h2 {
            margin: 0 0 10px;
            font-size: 28px;
            position: relative;
            z-index: 2;
        }

        .left-panel p {
            margin: 0 0 20px;
            text-align: center;
            position: relative;
            z-index: 2;
        }

        .left-panel a {
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

        .left-panel a:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .right-panel {
            flex: 1;
            padding: 40px 30px;
        }

        .right-panel h2 {
            text-align: center;
            color: black;
            margin-bottom: 25px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        form input {
            padding: 12px 14px;
            border: 1px solid #ccc;
            border-radius: 8px;
            transition: border-color 0.3s ease;
        }

        form input:focus {
            outline: none;
            border-color: #333;
        }

        form button {
            padding: 12px;
            background: white;
            color: black;
            border: 2px solid black;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        form button:hover {
            background: black;
            color: white;
            transform: translateY(-1px);
        }

        .right-panel p {
            text-align: center;
            margin-top: 15px;
        }

        .right-panel a {
            color: #ff6b6b;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .right-panel a:hover {
            text-decoration: underline;
            color: #ff5252;
        }

        .error {
            color: red;
            text-align: center;
            margin-bottom: 15px;
            padding: 10px;
            background: rgba(255, 0, 0, 0.1);
            border-radius: 5px;
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
            <h2>Welcome Back!</h2>
            <p>To keep connected with us please<br> login with your personal info</p>
            <a href="{{ route('signIn') }}" class="btn-signin">SIGN IN</a>
        </div>
        <div class="right-panel animate-right">
            <h2>Create Account</h2>
            @if ($errors->any())
    <div class="error">
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    </div>
@endif

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <input name="name" type="text" placeholder="Full Name" required>
                <input name="email" type="email" placeholder="Email" required>
                <input name="password" type="password" placeholder="Password" required>
                <input name="password_confirmation" type="password" placeholder="Confirm Password" required>
                <button type="submit">SIGN UP</button>
            </form>


            <p>Already have an account? <a href="{{ route('signIn') }}">Sign In</a></p>

        </div>
    </div>
</body>

</html>