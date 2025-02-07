<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt Lại Mật Khẩu</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,800">
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            align-items: center;
            display: flex;
            justify-content: center;
            flex-direction: column;
            background: linear-gradient(to right, #ff99cc, #ffff99);
            font-family: "Montserrat", sans-serif;
            min-height: 100vh;
            margin: 0;
        }
        .container {
            position: relative;
            width: 400px;
            max-width: 100%;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        h1 {
            margin-bottom: 20px;
        }
        input {
            background: #eee;
            padding: 12px;
            margin: 8px 0;
            width: 100%;
            border-radius: 5px;
            border: none;
            outline: none;
        }
        button {
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            background: #ff4b2b;
            color: white;
            cursor: pointer;
            margin-top: 10px;
        }
        button:hover {
            background: #ff228c;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Đặt Lại Mật Khẩu</h1>

        @if(session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('password.update') }}" method="POST">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Mật khẩu mới" required>
            <input type="password" name="password_confirmation" placeholder="Xác nhận mật khẩu" required>
            <button type="submit">Đặt Lại Mật Khẩu</button>
        </form>
    </div>
</body>

</html>