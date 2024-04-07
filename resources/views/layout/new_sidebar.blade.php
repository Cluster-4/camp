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
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Noto+Sans+Thai:wght@100..900&display=swap"
        rel="stylesheet">
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.2.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel="stylesheet" href="{{ url('dist\css\sidebar_style.css') }}">

</head>

<body style="font-family: Noto Sans Thai, DM Sans;">
    <div class="wrapper">
        <aside id="sidebar" onclick="sidebar_open()" onmouseover="sidebar_open()" onmouseout="sidebar_open()">
            <div class="d-flex">
                {{-- hamburger-bar --}}
                <button class="toggle-btn" type="button" style="background-color: transparent; border: 0px;">
                    <i class="fi fi-sr-menu-burger text-white"></i>
                </button>
                {{-- ชื่่อระบบ โลโก้ระบบ --}}
                <div class="sldebar-logo">
                    <a href="#" class="sidebar-link d-flex flex-row justify-content-center">
                        <img src="logo_bmrs.jpg" class="img-fluid" alt="" width="73px" height="65.39px"
                            style="border-radius: 15px" />
                        <span class="fs-5 lh-sm ms-3">ระบบจองห้องประชุม<br>หน่วยงานราชการ</span>
                    </a>
                </div>
            </div>

            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fi fi-sr-meeting-alt me-2" style="font-size: 30px"></i>
                        <span>จองห้องประชุม</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fi fi-sr-time-past me-2" style="font-size: 30px"></i>
                        <span>ติดตามสถานะการจอง</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer mb-3">
                <hr>
                <div class="d-flex justify-content-around">
                    <div href="#" class="d-flex align-items-center text-white text-decoration-none sidebar-link"
                        aria-expanded="false">
                        <img src="https://media.discordapp.net/attachments/1209200207963758673/1224255943861080064/a8a6659eb448af110e0eb9cfb83e901d.png?ex=661cd432&is=660a5f32&hm=a4a235e24939438515f682e285e9e1fe9d10fb1ea91b0bf873690fee774c090b&=&format=webp&quality=lossless&width=628&height=585"
                            alt="" width="30px" height="30px" class="rounded-circle me-3">
                        <span>เจ้าหน้าที่</span>
                    </div>
                    <a href="#" class="text-white sidebar-link">
                        <i class="fi fi-sr-sign-out-alt"
                            style="font-size: 30"></i>
                    </a>
                </div>
            </div>
        </aside>
        <div class="main p-3 overflow-container">
            {{-- navbar --}}
            <div class="d-flex bg-dark text-white align-items-center p-4 fs-3"
                style="width: 80; height: 10%; background-image: linear-gradient(to right ,#1E1450 ,#1E3ACC); border-radius: 18px;">
                <i class="fi fi-sr-meeting-alt me-4" style="font-size: 45px;"></i>
                จองห้องประชุม
            </div>
            @yield('content')
        </div>
        <script src="{{ url('dist\js\sidebar.js') }}"></script>
        <script src="{{ url('dist\js\bootstrap.bundle.min.js') }}"></script>
    </div>
</body>
