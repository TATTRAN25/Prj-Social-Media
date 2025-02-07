@extends('layouts.client')

@section('title', 'Tạo bài viết mới')

@section('content')
<div class="container mt-5">
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul class="mb-0">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card create-post-container mx-auto">
      <div class="card-header create-post-header">
        Tạo bài viết mới
      </div>
      <div class="card-body create-post-body">
        <div class="row">
          <div class="col-md-6 border-end">
            <div class="mb-3">
              <label for="inputImage" class="form-label">Chọn hình ảnh</label>
              <input type="file" id="inputImage" name="media" accept="image/*" class="form-control">
            </div>
            <div class="text-center preview-image">
              <img id="imagePreview" src="{{ old('media') }}" alt="Image preview" class="img-fluid rounded" style="display: none;">
            </div>
          </div>

          <div class="col-md-6">
            <div class="mb-3">
              <label for="content" class="form-label">Nội dung</label>
              <textarea class="form-control" id="content" name="content" rows="6" maxlength="2200" placeholder="Nhập nội dung bài viết...">{{ old('content') }}</textarea>
              <div class="form-text text-end">
                <span id="charCount">0</span>/2200
              </div>
            </div>
            <div class="mb-3">
              <label for="location" class="form-label">Vị trí</label>
              <input type="text" class="form-control" id="location" name="location" placeholder="Chọn vị trí" value="{{ old('location') }}">
            </div>
            <button type="submit" class="btn btn-primary btn-lg w-100">Đăng</button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
@endsection

@section('styles')
<style>
  .create-post-container {
    border: none;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    overflow: hidden;
  }
  .create-post-header {
    background: linear-gradient(135deg, #4e73df, #1cc88a);
    color: #fff;
    font-size: 1.5rem;
    text-align: center;
    padding: 1rem;
  }
  .create-post-body {
    padding: 2rem;
  }
  .preview-image {
    border: 2px dashed #ced4da;
    padding: 1rem;
    border-radius: 5px;
    background-color: #f8f9fc;
  }
  @media (max-width: 767.98px) {
    .border-end {
      border-right: none !important;
      border-bottom: 1px solid #e9ecef;
      margin-bottom: 1rem;
    }
  }
</style>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
  const inputImage = document.getElementById('inputImage');
  const imagePreview = document.getElementById('imagePreview');

  inputImage.addEventListener('change', function(e) {
    const files = e.target.files;
    if (files && files.length > 0) {
      const file = files[0];
      const previewUrl = URL.createObjectURL(file);
      imagePreview.src = previewUrl;
      imagePreview.style.display = 'block';
    }
  });

  const contentTextArea = document.getElementById('content');
  const charCount = document.getElementById('charCount');
  contentTextArea.addEventListener('input', function() {
    charCount.textContent = contentTextArea.value.length;
  });
});
</script>
@endsection
