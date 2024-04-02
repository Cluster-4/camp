<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{ url('dist/css/bootstrap.min.css') }}">
        <script src="{{ url('dist/js/bootstrap.min.js') }}"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.2.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    </head>
    <body style="font-family: Noto Sans Thai, DM Sans;">

        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 350px; height: 100vh" >
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto mx-auto text-white text-decoration-none">
                <img
                    src="logo_bmrs.jpg"
                    class="img-fluid rounded"
                    alt=""
                    width="73px"
                    height="65.39px"
                />
                <span class="fs-5 lh-sm ms-3">ระบบจองห้องประชุม<br>หน่วยงานราชการ</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="#" class="d-flex nav-link active align-items-center" aria-current="booking room" >
                        <i class="fi fi-sr-meeting-alt me-2" style="font-size: 30px"></i>
                        จองห้องประชุม
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="d-flex nav-link text-white align-items-center" aria-current="track status">
                        <i class="fi fi-sr-time-past me-2" style="font-size: 30px"></i>
                        ติดตามสถานะการจอง
                    </a>
                </li>
            </ul>
            <hr>
            <div class="d-flex align-items-center justify-content-between ">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none" aria-expanded="false">
                    <img src="https://media.discordapp.net/attachments/1209200207963758673/1224255943861080064/a8a6659eb448af110e0eb9cfb83e901d.png?ex=661cd432&is=660a5f32&hm=a4a235e24939438515f682e285e9e1fe9d10fb1ea91b0bf873690fee774c090b&=&format=webp&quality=lossless&width=628&height=585" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong><u>เจ้าหน้าที่</u></strong>
                </a>
                <i class="fi fi-sr-sign-out-alt" style="font-size: 30px"></i>
            </div>
        </div>
    </body>
</html>
