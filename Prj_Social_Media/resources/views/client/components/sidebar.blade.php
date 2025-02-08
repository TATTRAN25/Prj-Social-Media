<div class="fixed-sidebar p-4">
    <h2 class="h4 fs-2" style="font-family: Monsieur La Doulaise;">Social J</h2>
    @if(Auth::check())
    <div class="user-info d-flex align-items-center mb-4">
        <img src="{{ Auth::user()->avatar ?? 'https://res.cloudinary.com/ds9ej9vkv/image/upload/v1738989898/avatar_bmei26.png' }}" alt="Avatar" class="rounded-circle me-3" width="60" height="60">
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
            <a href="/" class="text-decoration-none text-dark d-flex align-items-center gap-2">
                <i class="fa fa-home me-2"></i>
                <span>Trang chủ</span>
            </a>
        </li>
        <li class="mb-3">
            <a href="/profile" class="text-decoration-none text-dark d-flex align-items-center gap-2">
                <i class="fa fa-search me-2"></i>
                <span>Tìm kiếm</span>
            </a>
        </li>
        <li class="mb-3">
            <a href="/messages" class="text-decoration-none text-dark d-flex align-items-center gap-2">
                <i class="fa fa-compass me-2"></i>
                <span>Khám phá</span>
            </a>
        </li>
        <li class="mb-3">
            <a href="/explore" class="text-decoration-none text-dark d-flex align-items-center gap-2">
                <i class="fa fa-video me-2"></i>
                <span>Reels</span>
            </a>
        </li>
        <li class="mb-3">
            <a href="/explore" class="text-decoration-none text-dark d-flex align-items-center gap-2">
                <i class="fa fa-comment-dots me-2"></i>
                <span>Tin nhắn</span>
            </a>
        </li>
        <li class="mb-3">
            <a href="/explore" class="text-decoration-none text-dark d-flex align-items-center gap-2">
                <i class="fa fa-bell me-2"></i>
                <span>Thông báo</span>
            </a>
        </li>
        <li class="mb-3">
            <a href="#" class="text-decoration-none text-dark d-flex align-items-center gap-2">
                <i class="fa fa-plus-square me-2"></i>
                <span>Tạo</span>
            </a>
        </li>
        <li class="mb-3">
            <a href="#" class="text-decoration-none text-dark d-flex align-items-center gap-2">
                <i class="fa fa-user me-2"></i>
                <span>Trang cá nhân</span>
            </a>
        </li>
        <li class="mb-3">
            <a href="/explore" class="text-decoration-none text-dark d-flex align-items-center gap-2">
                <i class="fa fa-ellipsis-h me-2"></i>
                <span>Xem thêm</span>
            </a>
        </li>
    </ul>
</div>