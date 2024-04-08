@extends('layout.norm_other_layout')
@section('content')

    <head>
        <link rel="stylesheet" href="{{ url('dist\css\inner-addon.css') }}">
        <!-- CSS BTN HOVER-->
        <style>
            .booking:hover{
                background-color: #11ad40;
            }
            .booking{
                background-color:green;
                border-radius: 20px;
            }

            button:hover {
                background-color: #2838af;
            }

            button {
                width: 6vw;
                height: 5vh;
                border-radius: 10px;
                font-size: 20px;
                background-color: #3D7EFC;
                color: white;
                box-shadow: 0 5px 10px #00000080;
                border: 0;
            }
        </style>
        <!--JAVA SCRIPT-->
        <script>
            function goRoomGenaratePage() {
                window.location.href = "/booking";
            }

            function goProcessBooking() {
                window.location.href = "/process_first";
            }
        </script>
    </head>

    <body>
        <div class="row mt-4">
            <div class="col-2 inner-addon left-addon ms-3">
                <i class="fi fi-rr-search" style="color: black; font-size: 120%; margin-left:5%;"></i>
                <input type="text" class="form-control shadow"
                    style="height: 5vh; border-radius: 10px; display: flex; justify-content: center; align-items: center; font-size: 120%; padding-left:15%;"
                    id="name_room" placeholder="ค้นหาห้องประชุม">
            </div>
            <div class="col-2 inner-addon left-addon" style="width: 12vw;">
                <i class="fi fi-rr-calendar " style="color: black; font-size: 120%; margin-right:5%; padding-left:10%;"></i>
                <input required="" type="text" id="date_in" class="form-control input-date shadow"
                    style="height: 5vh; border-radius: 10px; font-size: 120%; padding-left:20%;" placeholder="วันที่เข้าใช้"
                    onfocus="(this.type='date')" />
            </div>
            <div class="col-2 inner-addon left-addon" style="width: 12vw;">
                <i class="fi fi-rr-calendar" style="color: black; font-size: 120%; margin-right:5%; padding-left:10%;"></i>
                <input required="" type="text" id="date_in" class="form-control input-date shadow"
                    style="height: 5vh; border-radius: 10px; font-size: 120%; padding-left:20%;"
                    placeholder="วันที่สิ้นสุดการใช้" onfocus="(this.type='date')" />
            </div>
            <div class="col-2 inner-addon left-addon " style="width: 12vw;">
                <i class="fi fi-rr-clock-three"
                    style="color: black; font-size: 120%; margin-right:5%; padding-left:10%;"></i>
                <input required="" type="text" id="time_in" class="form-control shadow"
                    style="height: 5vh; border-radius: 10px; font-size: 120%; padding-left:20%;" placeholder="เวลาเข้าใช้"
                    onfocus="(this.type='time')" />
            </div>
            <div class="col-2 inner-addon left-addon" style="width: 12vw;">
                <i class="fi fi-rr-clock-three"
                    style="color: black; font-size: 120%; margin-right:5%; padding-left:10%;"></i>
                <input required="" type="text" id="time_in" class="form-control shadow"
                    style="height: 5vh; border-radius: 10px; font-size: 120%; padding-left:20%;"
                    placeholder="เวลาที่สิ้นสุดการใช้" onfocus="(this.type='time')" />
            </div>
            <div class="col-1">
                <button type="submit" onclick="goRoomGenaratePage()">
                    ค้นหา
                </button>
            </div>
        </div>
        <div style="margin-left:4rem; margin-top:1rem;">
             <!-- card content -->
            <?php
            for ($i=0; $i < 9; $i++){
                ?>
                <div class="card shadow mt-4" style="width: 18.3rem; border: 20px; border-radius: 20px; float: left; margin: 4rem;">
                <img src="https://i.pinimg.com/236x/5a/1b/12/5a1b126a63df80e79d63ab5554276b98.jpg" width="293px"
                    height="182px" alt="..." style="border-radius: 20px 20px 0px 0px;">
                <div class="card-body" style="border: 20px;">
                    <p class="card-text">
                        ชื่อห้อง : A<br>
                        ขนาด : A <br>
                        แบ่งครึ่งห้อง : A <br>
                        ราคา : A <br>
                        สถานะ : A <br>
                        ประเภทห้อง : A <br>
                        หมายเหตุ : เหนื่อยมากกก
                    </p>
                    <div style="display: flex; justify-content: center;">
                        <button type="submit" class="booking" onclick="goProcessBooking()">
                            จอง
                        </button>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
            <div style="clear: both;"></div>
        </div>
    </body>
@endsection
