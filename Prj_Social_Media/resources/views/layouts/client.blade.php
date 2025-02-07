<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
          integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
          <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monsieur+La+Doulaise&display=swap" rel="stylesheet">
    <style>
        
        .fixed-sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 300px;     
            height: 100vh;    
            overflow-y: auto;  
            background: #fff;
            border-right: 1px solid #ddd;
            z-index: 1000;
        }
        .content-area {
            margin-left: 300px; 
        }
       
        .fixed-sidebar-right {
            position: fixed;
            top: 0;
            right: 0;
            width: 300px;
            height: 100vh;
            overflow-y: auto;
            background: #fff;
            border-left: 1px solid #ddd;
            z-index: 1000;
        }
        
        .content-area .with-right {
            margin-right: 300px;
        }
    </style>
</head>
<body class="bg-light">

    @include('client/components.sidebar')

    <div class="p-4 content-area ">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>
