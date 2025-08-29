<!DOCTYPE html>
<html>

<head>
    <title>Tài khoản người dùng</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <div class="container d-flex justify-content-center mt-5">
        <div class="col-md-6 border shadow">
            <ul class="nav nav-pills nav-justified">
                <li class="nav-item"><a href="#profile-tab" class="nav-link active" data-toggle="pill">Profile</a></li>
                <li class="nav-item"><a href="#setting-tab" class="nav-link" data-toggle="pill">Setting</a></li>
                <li class="nav-item"><a href="#contact-tab" class="nav-link" data-toggle="pill">Change Password</a></li>
                <li class="nav-item"><a href="#help-tab" class="nav-link" data-toggle="pill">Help</a></li>
            </ul>
            <!-- All Tabs Main div -->
            <div class="tab-content">
                <!-- Profile tab start -->
                <div class="tab-pane show fade active justify-content-center px-5" id="profile-tab">
                    <img src="https://cdn-icons-png.flaticon.com/512/0/93.png" width="150px" height="150px" class="rounded-circle border border-primary mx-auto d-flex my-2">
                    <h2 class="text-center my-3">The Providers</h2>
                    <hr>
                    <h4>Thông tin cá nhân</h4>
                    <div class="form-group">
                        <h6><i class="fas fa-briefcase"></i> Nơi làm việc</h6>
                        <p>Google tại California</p>
                    </div>
                    <div class="form-group">
                        <h6><i class="fas fa-university"></i> Học vấn</h6>
                        <p>Bằng cử nhân từ Oxford, Anh</p>
                    </div>
                    <div class="form-group">
                        <h6><i class="fas fa-hospital-alt"></i> Nơi sinh</h6>
                        <p>Washington, USA</p>
                    </div>
                </div>
                <!-- Setting tab start -->
                <div class="tab-pane fade p-5" id="setting-tab">
                    <h4 class="text-center">Cài đặt tài khoản</h4>
                    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Tên:</label>
                            <input type="text" name="name" class="form-control" value="The Providers" required maxlength="15">
                        </div>
                        <div class="form-group">
                            <label for="avatar">Avatar:</label>
                            <input type="file" name="avatar" class="form-control" accept="image/jpeg,image/png,image/jpg">
                        </div>
                        <div class="form-group">
                            <label for="bio">Giới thiệu:</label>
                            <textarea name="bio" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="website">Website:</label>
                            <input type="text" name="website" class="form-control" maxlength="255">
                        </div>
                        <div class="form-group">
                            <label for="location">Địa điểm:</label>
                            <input type="text" name="location" class="form-control" maxlength="255">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                        </div>
                    </form>
                </div>
                <!-- Change Password tab start -->
                <div class="tab-pane fade px-5 my-4" id="contact-tab">
                    <h3 class="text-center">Đổi mật khẩu</h3>
                    <form action="{{ route('profile.change-password') }}" method="POST" class="w-75 mx-auto">
                        @csrf
                        <div class="col-md-12 my-4">
                            <label class="form-label">Mật khẩu hiện tại</label>
                            <input type="password" name="current_password" class="form-control" required>
                            @error('current_password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-12 my-4">
                            <label class="form-label">Mật khẩu mới</label>
                            <input type="password" name="new_password" class="form-control" required>
                        </div>
                        <div class="col-md-12 my-4">
                            <label class="form-label">Xác nhận mật khẩu mới</label>
                            <input type="password" name="new_password_confirmation" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-sm form-control my-3">Đổi mật khẩu</button>
                        </div>
                    </form>
                </div>
                <!-- Help tab start -->
                <div class="tab-pane" id="help-tab">
                    <h5 class="text-justify p-4">Skip đi bạn ơi.</h5>
                </div>
            </div>
        </div>
    </div>
</body>

</html>