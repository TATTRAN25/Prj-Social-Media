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
                <li class="nav-item"><a href="#contact-tab" class="nav-link" data-toggle="pill">Contact us</a></li>
                <li class="nav-item"><a href="#help-tab" class="nav-link" data-toggle="pill">Help</a></li>
            </ul>
            <!-- All Tabs Main div -->
            <div class="tab-content">
                <!-- Profile tab start -->
                <div class="tab-pane show fade active justify-content-center px-5" id="profile-tab">
                    <img src="https://cdn-icons-png.flaticon.com/512/0/93.png" width="150px" height="150px" class="rounded-circle border border-primary mx-auto d-flex my-2">
                    <h2 class="text-center my-3">The Providers</h2>
                    <div class="mx-auto my-3 d-flex justify-content-center">
                        <button class="btn btn-success btn-sm">View Profile <i class="fas fa-user"></i></button>
                        <button class="btn btn-info mx-3 btn-sm">Edit Profile <i class="fas fa-user-edit"></i></button>
                        <button class="btn btn-primary btn-sm">Message <i class="fas fa-facebook-messenger"></i></button>
                    </div>
                    <hr>
                    <h4>Information</h4>
                    <div class="form-group">
                        <h6><i class="fas fa-briefcase"></i> Work Place</h6>
                        <p>Google at California</p>
                    </div>
                    <div class="form-group">
                        <h6><i class="fas fa-university"></i>Education</h6>
                        <p>Bachelor from Oxford , England</p>
                    </div>
                    <div class="form-group">
                        <h6><i class="fas fa-hospital-alt"></i> Birth Place</h6>
                        <p>Washington , USA</p>
                    </div>
                </div>
                <!-- Setting tab start -->
                <div class="tab-pane fade p-5" id="setting-tab">
                    <h4 class="text-center">Account Setting</h4>
                    <h6>Name: </h6>
                    <p>The Providers <a href="#" class="float-right">Edit/Change</a></p>
                    <h6>Email: </h6>
                    <p>theproviders98@gmail.com<a href="#" class="float-right">Edit/Change</a></p>
                    <h6>Password: </h6>
                    <p>**********<a href="#" class="float-right">Edit/Change</a></p>
                    <h6>Phone: </h6>
                    <p>785454093 <a href="#" class="float-right">Edit/Change</a></p>
                    <h6>Gender: </h6>
                    <p>Male <a href="#" class="float-right">Edit/Change</a></p>
                </div>
                <!-- Contact us tab start -->
                <div class="tab-pane fade px-5 my-4" id="contact-tab">
                    <h3 class="text-center">Sign up</h3>
                    <form class="w-75 mx-auto">
                        <div class="col-md-12 my-4">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" required="">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Password</label>
                            <input type="Password" class="form-control" required="">
                        </div>
                        <div class="col-md-12">
                            <a href="#" class="float-right mb-3">Forget Password</a>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-sm form-control my-3">Sign in</button>
                        </div>
                    </form>
                </div>
                <!-- Help tab start -->
                <div class="tab-pane" id="help-tab">
                    <h5 class="text-justify p-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</h5>
                </div>
            </div>
        </div>
    </div>
</body>
</html>