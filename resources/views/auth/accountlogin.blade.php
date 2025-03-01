<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to bottom, #3b1980, #f5f0e6);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background: white;
            width: 350px;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: white;
            padding: 10px;
            border-radius: 10px;
            display: inline-block;
            margin-bottom: 15px;
        }
        .input-group {
            margin: 10px 0;
            display: flex;
            align-items: center;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 8px;
        }
        .input-group input {
            border: none;
            outline: none;
            flex: 1;
            padding: 8px;
        }
        .input-group i {
            margin-right: 10px;
            color: gray;
        }
        .remember {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
            margin: 10px 0;
        }
        .login-btn {
            width: 100%;
            background: #3b1980;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .social-login {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 15px;
        }
        .social-login i {
            font-size: 24px;
            cursor: pointer;
            padding: 10px;
            transition: transform 0.2s;
        }
        .social-login i:hover {
            transform: scale(1.1);
        }
        .fa-google, .fa-microsoft, .fa-globe {
            margin: 0;
            padding: 0 5px;
        }
        .fa-google { color: #db4437; }
        .fa-microsoft { color: #0078d4; }
        .fa-globe { color: #e63946; }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="logo">
            <img src="{{ asset('Dashboard_assets/img/link_station.webp') }}" alt="link_station" width="100px">
        </div>
        <h3>Welcome Back</h3>

        <form action="{{ route('auth.accountlogin.store') }}" method="POST">
            @csrf

            <!-- Organization Field -->
            <div class="input-group">
                <i class="fas fa-building"></i>
                <input type="text" name="organization" placeholder="Select organization to log into" required>
            </div>
            @error('organization')
                <span style="color: red; font-size: 12px;">{{ $message }}</span>
            @enderror

            <!-- Email Field -->
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="email" placeholder="Username" required>
            </div>
            @error('email')
                <span style="color: red; font-size: 12px;">{{ $message }}</span>
            @enderror

            <!-- Password Field -->
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            @error('password')
                <span style="color: red; font-size: 12px;">{{ $message }}</span>
            @enderror

            <div class="remember">
                <label><input type="checkbox" name="remember"> Remember me</label>
                <a href="#">Forgot password?</a>
            </div>

            <button type="submit" class="login-btn">LOGIN</button>
        </form>

        <div class="social-login">
            <i class="fab fa-google" title="Login with Google"></i>
            <i class="fab fa-microsoft" title="Login with Microsoft Azure"></i>
            <i class="fas fa-globe" title="The Provider"></i>
        </div>
    </div>
</body>
</html>
