<div class="fixed-sidebar p-4">
    <h2 class="h4 fs-2" style="font-family: 'Monsieur La Doulaise';">Social Hay Ho</h2>
    
    @if(Auth::check())
        <div class="user-info d-flex align-items-center mb-4">
            <img src="{{ Auth::user()->avatar ?? asset('images/avatar.png') }}" alt="Avatar" class="rounded-circle me-3" width="60" height="60">
            <div>
                <p class="text-primary mb-0">Xin chào, {{ Auth::user()->name }}!</p>
                <form action="{{ route('logout') }}" method="POST" class="mt-2">
                    @csrf
                    <button type="submit" class="btn btn-outline-primary btn-sm">Đăng xuất</button>
                </form>
            </div>
        </div>
    @else
        <a href="{{ route('login') }}" class="btn btn-outline-primary mb-2">Đăng nhập</a>
        <a href="{{ route('register') }}" class="btn btn-outline-primary">Đăng ký</a>
    @endif

    <ul class="list-unstyled mt-4">
        <li class="mb-3">
            <a href="/" class="text-decoration-none text-dark">
                <i class="fa fa-home me-2"></i> Trang chủ
            </a>
        </li>
        <li class="mb-3">
            <a href="/profile" class="text-decoration-none text-dark">
                <i class="fa fa-search me-2"></i> Tìm kiếm
            </a>
        </li>
        <li class="mb-3">
            <a href="/messages" class="text-decoration-none text-dark">
                <i class="fa fa-compass me-2"></i> Khám phá
            </a>
        </li>
        <li class="mb-3">
            <a href="/reels" class="text-decoration-none text-dark">
                <i class="fa fa-video me-2"></i> Reels
            </a>
        </li>
        <li class="mb-3">
            <a href="/messages" class="text-decoration-none text-dark">
                <i class="fa fa-comment-dots me-2"></i> Tin nhắn
            </a>
        </li>
        <li class="mb-3">
            <a href="/notifications" class="text-decoration-none text-dark">
                <i class="fa fa-bell me-2"></i> Thông báo
            </a>
        </li>
        <li class="mb-3">
            <a href="/create" class="text-decoration-none text-dark">
                <i class="fa fa-plus-square me-2"></i> Tạo
            </a>
        </li>
        <li class="mb-3">
            <a href="/userprofile" class="text-decoration-none text-dark">
                <i class="fa fa-user me-2"></i> Trang cá nhân
            </a>
        </li>
        <li class="mb-3">
            <a href="/more" class="text-decoration-none text-dark">
                <i class="fa fa-ellipsis-h me-2"></i> Xem thêm
            </a>
        </li>
    </ul>
</div>