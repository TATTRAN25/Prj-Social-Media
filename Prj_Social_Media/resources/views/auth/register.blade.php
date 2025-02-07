<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register and Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/register.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>

<body>
    <div class="notification">
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
    <div class="container" id="main">
        <div class="sign-up">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <h1>Tạo Tài Khoản</h1>
                <p>hoặc sử dụng email của bạn để đăng ký</p>
                <input type="text" name="name" placeholder="Tên" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Mật khẩu" required>
                <input type="password" name="password_confirmation" placeholder="Xác nhận mật khẩu" required>
                <button type="submit">Đăng Ký</button>
            </form>
        </div>
        <div class="sign-in">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <h1>Đăng Nhập</h1>
                <p>hoặc sử dụng tài khoản của bạn</p>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Mật khẩu" required>
                <a href="{{ route('password.request') }}">Quên mật khẩu?</a>
                <button type="submit">Đăng Nhập</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-left">
                    <h1>Chào Mừng Trở Lại!</h1>
                    <p>Để giữ liên lạc với chúng tôi, vui lòng đăng nhập bằng thông tin cá nhân của bạn</p>
                    <button id="signIn">Đăng Nhập</button>
                </div>
                <div class="overlay-right">
                    <h1>Xin Chào, Người Dùng</h1>
                    <p>Nhập thông tin cá nhân của bạn và bắt đầu hành trình với chúng tôi</p>
                    <button id="signUp">Đăng Ký</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const main = document.getElementById('main');

        signUpButton.addEventListener('click', () => {
            main.classList.add("right-panel-active");
        });
        signInButton.addEventListener('click', () => {
            main.classList.remove("right-panel-active");
        });

        // Hiển thị thông báo nếu có
        if (document.querySelector('.notification .alert')) {
            document.querySelector('.notification').style.display = 'block';
        }
    </script>
</body>

</html>