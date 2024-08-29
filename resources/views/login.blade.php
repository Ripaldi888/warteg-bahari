<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
</head>
<body>
    <div class="wrapper">
        <form action="{{route('login')}}" method="post">
            @csrf
            <div class="login_box">
                <div class="login-header">
                    <span>Login</span>
                </div>
                <div class="input_box">
                    <input type="text" id="user" class="input-field" name="email" required>
                    <label for="user" class="label">Username</label>
                    <i class="fa-regular fa-user"></i>
                </div>
                <div class="input_box">
                    <input type="password" id="pass" class="input-field" name="password" required>
                    <label for="pass" class="label">Password</label>
                    <i class="fa-solid fa-lock"></i>
                </div>
                <div class="remember-forgot">
                    <div class="remember-me">
                        <input type="checkbox" id="remember">
                        <label for="remember">Remember me</label>
                    </div>
                    <div class="forgot">
                        <a href="#">Forgot password?</a>
                    </div>
                </div>
                <div class="input_box">
                    <input type="submit" name="submit" class="input-submit" value="Login">
                </div>
                <div class="register">
                    <span>Don't have an account? <a href="#">Register</a></span>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
