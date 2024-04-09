@extends('layout.norm_other_layout')
@section('content')

    <head>
        <!-- CSS BTN HOVER-->
        <style>
            .form-control {
                border-radius: 0;
            }

            button:hover {
                background-color: #3267d1;
            }

            button {
                width: 100%;
                height: 13vh;
                border-start-end-radius: 15px;
                border-end-end-radius: 15px;
                font-size: 30px;
                background-color: #3E7FFD;
                color: white;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 0;
                border: 0;
            }
        </style>
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

    <body>
        <div class="row d-flex justify-content-end align-items-end mt-4" style="margin-right: 1rem;">
            <div class="col-10"></div>
            <button type="button" class="btn btn-primary"
                style="width:10%; height:20%; display: flex; justify-content: center; align-items: center; background-color: #0420B6; "
                onclick="window.location.href='{{ url('/login') }}'">ลงชื่อเข้าใช้</button>
        </div>
        <div style=" display: flex; flex-direction: column; justify-content: center; align-items: center; height:78vh;">
            <!-- เมนู -->
            <div class="shadow row"
                style="width: 58vw; height: 11vh; border-radius: 15px; background-color: #D9D9D9; display: flex; justify-content: center; align-items: center;">
                <!-- จองห้อง -->
                <div class="col-6" id="booking" style="color:#000C6A; border-right: 1px solid #C2C2C2;"
                    onclick="goBookingPage()">
                    <div class="row" style="display: flex; justify-content: center;">
                        <div class="col-10"
                        style="padding:2%; font-size: 30px; font-weight:600; display: flex; justify-content: center; align-items: center;">
                        <a href="#" class="nav-link" style="color: #5F5F5F" onclick="goBoookingPage()"
                            onmouseover="this.style.color='#000C6A'" onmouseout="this.style.color='#5F5F5F'">
                            จองห้องประชุม</a>
                    </div>
                    </div>
                </div>
                <!-- ติดตามสถานะการจอง -->
                <div class="col-6" id="tracking">
                    <div class="row" style="display: flex; justify-content: center;">
                        <div class="col-10"
                            style="color:#000C6A; padding:2%; border-bottom: 1px solid #000C6A; font-size: 30px; font-weight:600; display: flex; justify-content: center; align-items: center;">
                            ติดตามสถานะการจอง
                        </div>
                    </div>
                </div>
            </div>
            <!-- กรอบ input ข้อมูล -->
            <div class="shadow mt-3"
                style="width: 58vw; height: 20vh; border-radius: 15px; background-color: #D9D9D9; display: flex; justify-content: center; align-items: center;">
                <!-- กรอกรหัสการจอง -->
                <div style="width:45vw;">
                    <input type="text" class="form-control"
                        style="height: 13vh; border-start-start-radius: 15px; border-end-start-radius: 15px; font-size: 30px;"
                        id="name_room" placeholder="กรอกรหัสการจอง">
                </div>
                <!-- ปุ่มค้นหา -->
                <div style="width:10vw;">
                    <button type="button" onclick="window.location.href='{{ url('/process_tracking') }}'">
                        ค้นหา
                    </button>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
