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
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.2.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel="stylesheet" href="{{ url('dist\css\sidebar_style.css') }}">

</head>

<body style="font-family: Noto Sans Thai, DM Sans;">
    <div class="wrapper">
        <aside id="sidebar" onclick="sidebar_open()" onmouseover="sidebar_open()" onmouseout="sidebar_close()">
            <div class="d-flex">
                {{-- hamburger-bar --}}
                <button class="toggle-btn" type="button" style="background-color: transparent; border: 0px;">
                    <i class="fi fi-sr-menu-burger text-white" style="font-size: 30px;"></i>
                </button>
                {{-- ชื่่อระบบ โลโก้ระบบ --}}
                <div class="sidebar-logo d-flex flex-row justify-content-center">
                    <img src="logo_bmrs.jpg" class="img-fluid" alt="" width="73px" height="65.39px"
                        style="border-radius: 15px" />
                    <span class="fs-5 lh-sm ms-3 mt-3">ระบบจองห้องประชุม<br>หน่วยงานราชการ</span>
                </div>
            </div>

            <ul class="sidebar-nav">
                <li class="sidebar-item" onclick="toggleActive(event)">
                    <a href="/manage_room" class="sidebar-link">
                        <i class="fi fi-rr-pencil" style="font-size: 30px; display: flex;"></i>
                        <span class="pl-3">จัดการห้องประชุม</span>
                    </a>
                </li>
                <li class="sidebar-item" onclick="toggleActive(event)">
                    <a href="/manage_account" class="sidebar-link">
                        <i class="fi fi-sr-users" style="font-size: 30px; display: flex;"></i>
                        <span class="pl-3">จัดการบัญชีผู้ใช้งาน</span>
                    </a>
                </li>
                <li class="sidebar-item" onclick="toggleActive(event)">
                    <a href="#" class="sidebar-link">
                        <i class="fi fi-sr-meeting-alt" style="font-size: 30px; display: flex;"></i>
                        <span class="pl-3">จองห้องประชุม</span>
                    </a>
                </li>
                <li class="sidebar-item" onclick="toggleActive(event)">
                    <a href="#" class="sidebar-link">
                        <i class="fi fi-sr-time-past" style="font-size: 30px; display: flex;"></i>
                        <span class="">ติดตามสถานะการจอง</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer my-3 d-flex">
                <div href="#" class="d-flex align-items-center text-white text-decoration-none sidebar-link"
                    aria-expanded="false">
                    <img src="https://media.discordapp.net/attachments/1209200207963758673/1224255943861080064/a8a6659eb448af110e0eb9cfb83e901d.png?ex=661cd432&is=660a5f32&hm=a4a235e24939438515f682e285e9e1fe9d10fb1ea91b0bf873690fee774c090b&=&format=webp&quality=lossless&width=628&height=585"
                        alt="" width="50px" height="50px" class="rounded-circle me-3">
                    <span>ผู้ดูแลระบบ</span>
                </div>
                <a href="#" class="text-white sidebar-link d-flex justify-content-end">
                    <i class="fi fi-sr-sign-out-alt" style="font-size: 30"></i>
                </a>
            </div>
        </aside>
        <div class="main p-3 overflow-container">
            @yield('content')
        </div>
        <script src="{{ url('dist\js\sidebar.js') }}"></script>
        <script src="{{ url('dist\js\bootstrap.bundle.min.js') }}"></script>
    </div>
</body>
