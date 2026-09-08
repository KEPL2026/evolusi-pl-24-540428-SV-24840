@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <style>
        body { font-family: sans-serif; display: flex; flex-direction:column; justify-content: center; align-items: center; min-height: 100vh; background-color: #fcefee; margin: 0; padding: 20px; }
        .login-box { width: 100%; max-width: 400px; padding: 40px; background: white; border-radius: 12px; box-shadow: 0 5px 25px rgba(0,0,0,0.08); }
        h2 { text-align: center; }
        p { text-align: center; color: #777; margin-bottom: 30px; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; }
        .form-group input { width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box; }
        .btn { width: 100%; padding: 15px; border: none; background-color: #e67c94; color: white; border-radius: 5px; cursor: pointer; font-size: 1rem; }
        .register-link { text-align: center; margin-top: 20px; font-size: 0.9rem; }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Log In</h2>
        <p>Selamat datang kembali! Silakan masuk.</p>

        <form action="{{ url('/login') }}" method="POST">
            @csrf <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit" class="btn">Log In</button>
        </form>

        <p class="register-link">
            Belum punya akun? <a href="#">Buat Akun Baru Disini</a>
        </p>
    </div>
</body>
</html>
@endsection