@extends('layout.norm_officer_sidebar')
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
        <div style=" display: flex; flex-direction: column; justify-content: center; align-items: center; height:78vh;">

            <div
                style="font-size:70px; font-weight:800; color : #000C6A ; display: flex ; justify-content : start; align-item: start; ">
                ติดตามสถานะการจอง
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
