@extends()

<!DOCTYPE html>
<html lang="en">

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
    <script src="{{ url('dist/js/bootstrap.min.js') }}"></script>
    <title>ระบบจองห้องประชุมหน่วยงานราชการ</title>

    <!--JAVA SCRIPT-->
    <script>
        function goTrackingPage() {
            window.location.href = "/tracking";
        }

        function goBookingPage() {
            window.location.href = "/home"
        }
    </script>
</head>

<body style="font-family: Noto Sans Thai, DM Sans;">
    <div class="d-flex flex-column" style="width: 100vw; height:100vh;">
        <!-- หัวระบ -->
        <div class="shadow mt-1 mx-auto"
            style="display: flex; align-items: center; width: 95%; height: 10%; border-radius: 15px; background: linear-gradient(#1E1450, #1E3ACC); font-size:40px; color:white;">
            <h1 style="margin-left: 1rem;">ระบบจองห้องประชุมหน่วยงานรายการ</h1>
        </div>
        <!-- กรอบใหญ่ -->
        <div class="shadow mt-3 mx-auto position-relative" style="width: 95%; height: 85%; border-radius: 15px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
            <!-- ลงชื่อเข้าใช้ -->
            <div class="position-absolute top-0 end-0" style="margin-top: 1rem; margin-right: 1rem; font-size:30px;">
                ลงชื่อเข้าใช้
            </div>
            <!-- เมนู -->
            <div class="shadow row" style="width: 60%; height: 10%; border-radius: 15px; background-color: #D9D9D9; display: flex; justify-content: center; align-items: center;">
                <!-- จองห้อง -->
                <div class="col-6" id="booking" style="color:#000C6A; border-right: 1px solid #C2C2C2;" onclick="goBookingPage()">
                    <div class="row" style="display: flex; justify-content: center;">
                        <div class="col-10" style="padding:2%; border-bottom: 1px solid #000C6A; font-size: 30px; font-weight:600; display: flex; justify-content: center; align-items: center;">
                            จองห้องประชุม
                        </div>
                    </div>
                </div>
                <!-- ติดตามสถานะการจอง -->
                <div class="col-6" id="tracking" style="color:#5F5F5F;" onclick="goTrackingPage()" onmouseover="this.style.color='#000C6A'" onmouseout="this.style.color='#5F5F5F'">
                    <div class="row" style="display: flex; justify-content: center;">
                        <div class="col-10" style="padding:2%; font-size: 30px; font-weight:600; display: flex; justify-content: center; align-items: center;">
                            ติดตามสถานะการจอง
                        </div>
                    </div>
                </div>
            </div>
            <!-- กรอบ input ข้อมูล -->
            <div class="shadow mt-3" style="width: 60%; height: 60%; border-radius: 15px; background-color: #D9D9D9; display: flex; justify-content: center; align-items: center;">
                
            </div>
        </div>
    </div>
</body>

</html>
