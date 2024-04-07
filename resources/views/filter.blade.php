@extends('layout.norm_other_layout')
@section('content')

    <head>
        <link rel="stylesheet" href="{{ url('dist\css\inner-addon.css') }}">
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
        <div class="row">
            <div class="col-2 inner-addon left-addon mt-3 ms-3">
                <i class="fi fi-rr-search" style="color: black; font-size: 150%; margin-left:5%;"></i>
                <input type="text" class="form-control"
                    style="height: 5vh; border-radius: 10px; display: flex; justify-content: center; align-items: center; font-size: 150%; padding-left:15%;"
                    id="name_room" placeholder="ค้นหาห้องประชุม">
            </div>
            <div class="col-2 inner-addon left-addon mt-3">
                <i class="fi fi-rr-calendar" style="color: black; font-size: 150%; margin-right:5%; padding-left:10%;"></i>
                <input required="" type="text" id="date_in" class="form-control input-date"
                    style="height: 5vh; border-radius: 10px; font-size: 150%; padding-left:20%;" placeholder="วันที่เข้าใช้"
                    onfocus="(this.type='date')" />
            </div>
            <div class="col-2 inner-addon left-addon mt-3">
                <i class="fi fi-rr-calendar" style="color: black; font-size: 150%; margin-right:5%; padding-left:10%;"></i>
                <input required="" type="text" id="date_in" class="form-control input-date"
                    style="height: 5vh; border-radius: 10px; font-size: 150%; padding-left:20%;" placeholder="วันที่สิ้นสุดการใช้"
                    onfocus="(this.type='date')" />
            </div>
            <div class="col-2 inner-addon left-addon mt-3">
                <i class="fi fi-rr-clock-three" style="color: black; font-size: 150%; margin-right:5%; padding-left:10%;"></i>
                <input required="" type="text" id="time_in" class="form-control"
                    style="height: 5vh; border-radius: 10px; font-size: 150%; padding-left:20%;" placeholder="เวลาเข้าใช้"
                    onfocus="(this.type='time')" />
            </div>
            <div class="col-2 inner-addon left-addon mt-3">
                <i class="fi fi-rr-clock-three" style="color: black; font-size: 150%; margin-right:5%; padding-left:10%;"></i>
                <input required="" type="text" id="time_in" class="form-control"
                    style="height: 5vh; border-radius: 10px; font-size: 150%; padding-left:20%;"
                    placeholder="เวลาที่สิ้นสุดการใช้" onfocus="(this.type='time')" />
            </div>
        </div>
    </body>
@endsection
