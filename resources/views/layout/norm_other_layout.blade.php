<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Noto+Sans+Thai:wght@100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ url('dist/css/bootstrap.min.css') }}">
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.2.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.2.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.2.0/uicons-bold-straight/css/uicons-bold-straight.css'>
    <script src="{{ url('dist/js/bootstrap.min.js') }}"></script>
    <title>ระบบจองห้องประชุมหน่วยงานราชการ</title>
</head>
<style>
    .content-wrapper {
        overflow: hidden;
    }

    .no-scrollbar {
        overflow-y: hidden;
    }
</style>
<script>
    window.onload = function() {
        var contentWrapper = document.querySelector('.content-wrapper');
        var noScrollbar = document.querySelector('.no-scrollbar');
        if (contentWrapper.clientHeight >= contentWrapper.scrollHeight) {
            noScrollbar.style.overflowY = 'hidden';
        } else {
            noScrollbar.style.overflowY = 'scroll';
        }
    }
</script>

<body style="font-family: Noto Sans Thai, DM Sans;">
    <div class="d-flex flex-column" style="width: 100vw; height:100vh;">
        <!-- หัวระบบ -->
        <div class="shadow mt-2 mx-auto"
            style="display: flex; align-items: center; width: 95%; height: 10%; border-radius: 15px; background: linear-gradient(#1E1450, #1E3ACC); font-size:40px; color:white;">
            <img src="logo_bmrs.jpg" style="margin-left: 2rem; width:73px; height=65.39px; border-radius: 30%;" />
            <h1 style="margin-left: 1rem;">ระบบจองห้องประชุมหน่วยงานรายการ</h1>
        </div>
        <!-- กรอบใหญ่ -->
        <div class="shadow mt-3 mx-auto position-relative "
            style=" overflow-y: scroll; overflow-x: hidden; width: 95%; height: 85%; border-radius: 15px; ">
            <!-- ลงชื่อเข้าใช้ -->
            <div class="position-absolute top-0 end-0" style="margin-top: 1rem; margin-right: 1rem; font-size:25px;">
                <p><a class="link-opacity-100" href="login">ลงชื่อเข้าใช้</a></p>
            </div>
            <div class="no-scrollbar">
                @yield('content')
            </div>
        </div>
    </div>
</body>
