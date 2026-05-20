<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Pet System</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
<div class="container">
    <h1>Register</h1>

    @if ($errors->any())
        <div class="error-messages">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session('register_error'))
        <p class="error">{{ session('register_error') }}</p>
    @endif

    @if(session('register_success'))
        <p class="success">{{ session('register_success') }}</p>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <label>Full Name:</label>
        <input type="text" name="full_name" required><br>

        <label>Username:</label>
        <input type="text" name="username" required><br>

        <label>Email:</label>
        <input type="email" name="email" required><br>

        <label>Password:</label>
        <input type="password" name="password" required><br>

        
        <input type="submit" class="btn" value="Sign Up">
    </form>

    <div class="links">
        <p>Already have an account? <a href="{{ route('login') }}">Log In</a></p>
    </div>
</div>
</body>
</html>
