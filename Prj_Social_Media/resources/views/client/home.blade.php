@extends('layouts.client')

@section('title', 'Home')

@section('content')
    <div class="with-right">
        <div class="container">
            <div class="d-flex flex-column gap-4">
                <div class="post-item">
                    <div class="bg-white p-3 shadow-sm border">
                        <img src="http://res.cloudinary.com/du6fyhjnk/image/upload/v1733243488/ecommerce/products/thumbnails/nachroyv9hf1fyocblwt.webp" alt="Post Image" class="img-fluid h-32">
                        <p class="mt-2">Post 1</p>
                    </div>
                </div>
    
                <div class="post-item">
                    <div class="bg-white p-3 shadow-sm border">
                        <img src="http://res.cloudinary.com/du6fyhjnk/image/upload/v1733243866/ecommerce/products/thumbnails/sq69ufctolif54q6hole.webp" alt="Post Image" class="img-fluid h-32">
                        <p class="mt-2">Post 2</p>
                    </div>
                </div>
    
                <div class="post-item">
                    <div class="bg-white p-3 shadow-sm border">
                        <img src="http://res.cloudinary.com/du6fyhjnk/image/upload/v1733244164/ecommerce/products/thumbnails/z2o2lgkvdvjvc4kncrul.webp" alt="Post Image" class="img-fluid h-32">
                        <p class="mt-2">Post 3</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<div class="p-4">
    @include('client/components.right-sidebar')
</div>
