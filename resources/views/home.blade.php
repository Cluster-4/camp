@extends('layout.norm_other_layout')
@section('content')

    <head>
    <link rel="stylesheet" href="{{url ('dist\css\inner-addon.css')}}">
        <!-- CSS BTN HOVER-->
        <style>
            button:hover {
                background-color: #2838af;
            }

            button {
                width: 30%;
                height: 8vh;
                border-radius: 15px;
                font-size: 20px;
                background-color: #000C6A;
                color: white;
                box-shadow: 0 5px 10px #00000080;
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

            function goRoomGenaratePage() {
                window.location.href = "/filter";
            }
        </script>
    </head>

    <body>
        <!-- เมนู -->
        <div class="shadow row"
            style="width: 60%; height: 10%; border-radius: 15px; background-color: #D9D9D9; display: flex; justify-content: center; align-items: center;">
            <!-- จองห้อง -->
            <div class="col-6" id="booking" style="color:#000C6A; border-right: 1px solid #C2C2C2;"
                onclick="goBookingPage()">
                <div class="row" style="display: flex; justify-content: center;">
                    <div class="col-10"
                        style="padding:2%; border-bottom: 1px solid #000C6A; font-size: 30px; font-weight:600; display: flex; justify-content: center; align-items: center;">
                        จองห้องประชุม
                    </div>
                </div>
            </div>
            <!-- ติดตามสถานะการจอง -->
            <div class="col-6" id="tracking">
                <div class="row" style="display: flex; justify-content: center;">
                    <div class="col-10"
                        style="padding:2%; font-size: 30px; font-weight:600; display: flex; justify-content: center; align-items: center;">
                        <a href="#" class="nav-link" style="color: #5F5F5F" onclick="goTrackingPage()"
                            onmouseover="this.style.color='#000C6A'" onmouseout="this.style.color='#5F5F5F'">
                            ติดตามสถานะการจอง</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- กรอบ input ข้อมูล -->
        <div class="shadow mt-3"
            style="width: 60%; height: 55%; border-radius: 15px; background-color: #D9D9D9;justify-content: center; align-items: center;">
            <form>
                <!-- ชื่อห้อง -->
                <div class="row" style="display: flex; justify-content: center;">
                    <div class="col-10 mt-5 inner-addon right-addon">
                        <i class="fi fi-rr-search me-2" style="color: black; font-size: 30px;"></i>
                        <input type="text" class="form-control"
                            style="height: 8vh; border-radius: 15px; display: flex; justify-content: center; align-items: center; font-size: 30px;"
                            id="name_room" placeholder="ค้นหาห้องประชุม">
                    </div>
                </div>
                <!-- วันที่ใช้ห้อง -->
                <div class="row" style="display: flex; justify-content: center;">
                    <div class="col-5 mt-2 inner-addon right-addon" style="position: relative;">
                        <input required="" type="text" id="date_in" class="form-control"
                            style="height: 8vh; border-radius: 15px; font-size: 30px;" placeholder="วันที่เข้าใช้"
                            onfocus="(this.type='date')" />
                        <span style="position: absolute; top: 1vh; right: 5%; color: red;">*</span>
                    </div>
                    <div class="col-5 mt-2" style="position: relative;">
                        <input required="" type="text" id="date_in" class="form-control"
                            style="height: 8vh; border-radius: 15px; font-size: 30px;" placeholder="วันที่สิ้นสุดการใช้"
                            onfocus="(this.type='date')" />
                        <span style="position: absolute; top: 1vh; right: 5%; color: red;">*</span>
                    </div>
                </div>
                <!-- เวลาที่ใช้ห้อง -->
                <div class="row" style="display: flex; justify-content: center;">
                    <div class="col-5 mt-2" style="position: relative;">
                        <input required="" type="text" id="time_in" class="form-control"
                            style="height: 8vh; border-radius: 15px; font-size: 30px;" placeholder="เวลาเข้าใช้"
                            onfocus="(this.type='time')" />
                        <span style="position: absolute; top: 1vh; right: 5%; color: red;">*</span>
                    </div>
                    <div class="col-5 mt-2" style="position: relative;">
                        <input required="" type="text" id="time_in" class="form-control"
                            style="height: 8vh; border-radius: 15px; font-size: 30px;" placeholder="เวลาที่สิ้นสุดการใช้"
                            onfocus="(this.type='time')" />
                        <span style="position: absolute; top: 1vh; right: 5%; color: red;">*</span>
                    </div>
                </div>
                <!-- ปุ่มค้นหา -->
                <div class="row">
                    <div class="col-12 mt-5" style="display: flex; justify-content: center; align-items: center;">
                        <button type="submit" onclick="goRoomGenaratePage()">
                            ค้นหา
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <!-- หมายเหตุ -->
        <div class="mt-3" style="font-size:20px; display: flex; justify-content: center; align-items: center;">
            <p><span style="color:red;">หมายเหตุ</span> : กรุณากรอกในช่องที่มีเครื่องหมาย
                <span style="color:red;"> *</span> ให้ครบทุกช่อง
            </p>
        </div>
    </body>

    </html>
@endsection
