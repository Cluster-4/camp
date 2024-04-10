<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ระบบจองห้องประชุมหน่วยงานราชการ</title>
    <link rel="stylesheet" href="{{ url('dist/css/bootstrap.min.css') }}">
    <script src="{{ url('dist/js/bootstrap.min.js') }}"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Noto+Sans+Thai:wght@100..900&display=swap"
        rel="stylesheet">
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.2.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
</head>
<style>
    .nav-link {
        height: 44px;
    }
    .navbar .nav-link.active {
        background-color: #69A5DD;
        color: white;
    }

    .overflow-container {
        overflow-y: auto;
        overflow-x: hidden;
        max-height: 87vh; /* กำหนดความสูงสูงสุดของเนื้อหา */
    }
</style>

<body style="font-family: Noto Sans Thai, DM Sans;">
    <div class="d-flex flex-row">
        {{-- sidebar --}}
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white"
            style="width: 350px; height: 100vh; background-color: #242038;">
            <a href="/"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto mx-auto text-white text-decoration-none">
                <img src="logo_bmrs.jpg" class="img-fluid" alt="" width="73px" height="65.39px"
                    style="border-radius: 15px" />
                <span class="fs-5 lh-sm ms-3">ระบบจองห้องประชุม<br>หน่วยงานราชการ</span>
            </a>
            <hr class="invisible">
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="#" class="d-flex nav-link active align-items-center" aria-current="booking room">
                        <i class="fi fi-sr-meeting-alt me-2" style="font-size: 30px"></i>
                        จองห้องประชุม
                    </a>
                </li>
                <li class="nav-item mt-2">
                    <a href="#" class="d-flex nav-link text-white align-items-center"
                        aria-current="track status">
                        <i class="fi fi-sr-time-past me-2" style="font-size: 30px"></i>
                        ติดตามสถานะการจอง
                    </a>
                </li>
            </ul>
            <hr>
            <div class="d-flex align-items-center justify-content-between">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none"
                    aria-expanded="false">
                    <img
                        src="https://media.discordapp.net/attachments/1209200207963758673/1224255943861080064/a8a6659eb448af110e0eb9cfb83e901d.png?ex=661cd432&is=660a5f32&hm=a4a235e24939438515f682e285e9e1fe9d10fb1ea91b0bf873690fee774c090b&=&format=webp&quality=lossless&width=628&height=585"
                        alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong><u>เจ้าหน้าที่</u></strong>
                </a>
                <a href="{{ url('/') }}" class="nav-link text-white"><i class="fi fi-sr-sign-out-alt"
                        style="font-size: 30"></i></a>
            </div>
        </div>
        <div class="d-flex flex-column mx-auto mt-1">
            {{-- navbar --}}
            <div class="d-flex bg-dark text-white align-items-center p-4 fs-3"
                style="width: 80vw; height: 10%; background-image: linear-gradient(to right ,#1E1450 ,#1E3ACC); border-radius: 18px;">
                <i class="fi fi-sr-meeting-alt me-4" style="font-size: 45px;"></i>
                จองห้องประชุม
            </div>
            <div class="overflow-container">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
