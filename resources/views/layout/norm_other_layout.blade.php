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
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.2.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <script src="{{ url('dist/js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>ระบบจองห้องประชุมหน่วยงานราชการ</title>
    <style>
        /* CSS เมื่อข้อมูลเกินแกน y */
        @media (min-height: 100%) {
            .overflow-y-auto {
                overflow-y: auto;
            }
        }

        /* CSS เมื่อข้อมูลไม่เกินแกน y */
        @media (max-height: 100%) {
            .overflow-y-auto {
                overflow-y: hidden;
            }
        }
    </style>
</head>

<body style="font-family: Noto Sans Thai, DM Sans;">
    <!-- หัวระบบ -->
    <div class="shadow mt-2 mx-auto"
        style="display: flex; align-items: center; width: 97vw; height: 10vh; border-radius: 15px; background: linear-gradient(#1E1450, #1E3ACC); font-size:40px; color:white;">
        <img src="logo_bmrs.jpg" style="margin-left: 2rem; width:73px; height=65.39px; border-radius: 30%;" />
        <h1 style="margin-left: 1rem;">ระบบจองห้องประชุมหน่วยงานรายการ</h1>
    </div>
    <!-- กรอบใหญ่ -->
    <div class="shadow mx-auto overflow-y-auto mt-3"
        style=" overflow-x: hidden; width: 97vw; height: 85vh; border-radius: 15px; ">
        @yield('content')
    </div>
    </div>
    <script>
        window.onload = function() {
            var contentHeight = document.querySelector('.position-relative').scrollHeight;
            var containerHeight = document.querySelector('.position-relative').clientHeight;

            if (contentHeight > containerHeight) {
                document.querySelector('.position-relative').classList.add('overflow-y-auto');
            }
        };
    </script>
</body>
