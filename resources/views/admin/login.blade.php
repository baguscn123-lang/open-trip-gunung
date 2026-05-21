<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Langit Nusantara</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        body {
            background: #1a1a1a;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .login-box {
            background: #2d2d2d;
            border: 1px solid #333;
            border-radius: 10px;
            padding: 40px;
            width: 100%;
            max-width: 400px;
        }
        .login-box h3 {
            color: #e8604c;
            text-align: center;
            margin-bottom: 5px;
            font-weight: 700;
        }
        .login-box p {
            color: #999;
            text-align: center;
            margin-bottom: 30px;
            font-size: 13px;
        }
        .form-control {
            background: #1a1a1a;
            border: 1px solid #444;
            color: #fff;
        }
        .form-control:focus {
            background: #1a1a1a;
            border-color: #e8604c;
            color: #fff;
            box-shadow: none;
        }
        label { color: #ccc; }
        .btn-login {
            background: #e8604c;
            border-color: #e8604c;
            width: 100%;
            color: #fff;
            padding: 10px;
        }
        .btn-login:hover { background: #d4503c; }
    </style>
</head>
<body>
    <div class="login-box">
        <h3>Langit Nusantara</h3>
        <p>Admin Panel - Masuk untuk melanjutkan</p>

        @if($errors->has('login'))
            <div class="alert alert-danger">{{ $errors->first('login') }}</div>
        @endif

        <form action="{{ route('admin.login.post') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Username</label>
                <input type="text" name="username" class="form-control"
                       value="{{ old('username') }}" placeholder="Masukkan username">
            </div>
            <div class="mb-4">
                <label>Password</label>
                <input type="password" name="password" class="form-control"
                       placeholder="Masukkan password">
            </div>
            <button type="submit" class="btn btn-login">Masuk</button>
        </form>
    </div>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>