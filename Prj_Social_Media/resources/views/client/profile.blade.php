@extends('layouts.client')

@section('title', 'Profile')

@section('content')
    <div class="container">
        <div class="profile">
            <div class="row py-4 d-flex align-items-center">
                <div class="col-lg-4 col-md-5 col-sm-12 text-center">
                    <div class="position-relative">
                        <img 
                            src="http://res.cloudinary.com/du6fyhjnk/image/upload/v1733243488/ecommerce/products/thumbnails/nachroyv9hf1fyocblwt.webp" 
                            alt="user avatar"
                            class="rounded-circle border shadow-sm"
                            style="width: 150px; height: 150px; object-fit: cover;">
                    </div>
                </div>

                <div class="col-lg-8 col-md-7 col-sm-12">
                    <div class="d-flex flex-column align-items-start gap-2">
                        <div class="d-flex align-items-center gap-3">
                            <h3 class="fs-4 fw-bold mb-0">User Name</h3>
                            <a class="btn btn-outline-primary btn-sm">Chỉnh sửa trang cá nhân</a>
                            <a class="btn btn-outline-secondary btn-sm">Xem kho lưu trữ</a>
                        </div>

                        <div class="d-flex align-items-center gap-3 mt-2">
                            <span class="fw-semibold">0 bài viết</span>
                            <button class="btn btn-light btn-sm">4 người theo dõi</button>
                            <button class="btn btn-light btn-sm">Đang theo dõi 111 người</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="info-post mt-4">
            <div class="d-flex justify-content-center border-bottom pb-2">
                <ul class="nav nav-tabs gap-4">
                    <li class="nav-item">
                        <a class="nav-link active d-flex align-items-center gap-2" aria-current="page">
                            <i class="fa-solid fa-border-all text-dark"></i>
                            <span class="text-dark">Bài viết</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2">
                            <i class="fa-regular fa-bookmark text-dark"></i>
                            <span class="text-dark">Đã lưu</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="container mt-3">
                <div class="row g-2">
                    @for ($i = 0; $i < 6; $i++)
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="position-relative overflow-hidden rounded shadow-sm">
                                <img 
                                    src="http://res.cloudinary.com/du6fyhjnk/image/upload/v1733243488/ecommerce/products/thumbnails/nachroyv9hf1fyocblwt.webp" 
                                    alt="post-img"
                                    class="w-100 rounded"
                                    style="aspect-ratio: 1/1; object-fit: cover;">
                                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center bg-dark bg-opacity-25 opacity-0 hover-opacity">
                                    <div>
                                        <i class="fa-solid fa-heart text-white me-3"></i>
                                        <span>29</span>
                                    </div>
                                   
                                    <div>
                                        <i class="fa-solid fa-comment text-white"></i>
                                        <span>2</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>

    <style>
        .hover-opacity {
            transition: opacity 0.3s ease-in-out;
        }
        .hover-opacity:hover {
            opacity: 1 !important;
        }
    </style>
@endsection
