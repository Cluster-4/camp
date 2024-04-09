@extends('layout.norm_officer_sidebar')
@section('content')

    <head>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
        <link rel="stylesheet" href="{{ url('dist\css\inner-addon.css') }}">
        <!--JAVA SCRIPT-->

        <script>
            var currentButton = 'btn-room'; // ตั้งค่าปุ่มที่ถูกเลือกตอนเริ่มต้น
            function changeRoomImage(option) {
                var roomImage = document.getElementById('room-image');
                switch (option) {
                    case 'room-public':
                        roomImage.src =
                            'https://spaces.imgix.net/mediaFiles/ZS82LzUvZS9lNjVlZjNlMTBiYWFkNGRmMTE2ZjAwNjk1ODYxZDk1OTgwOWFmNTY5X1NwYWNlc19DaGFtY2h1cmlfU3F1YXJlX0Jhbmdrb2tfNDgxN19tZWV0aW5nX3Jvb20uanBnL2Rvd25sb2Fk?auto=compress,format&q=30';
                        toggleButtonClass('btn-half-a');
                        break;
                    case 'room-private':
                        roomImage.src =
                            'https://cms-media.fda.moph.go.th/438710641696579584/2023/11/9wORcDAgeNJTsW4KvWyPVRgt.png';
                        toggleButtonClass('btn-half-b');
                        break;
                }
            }

            function toggleButtonClass(buttonId) {
                // เปลี่ยนคลาสของปุ่มที่ถูกเลือกใหม่เป็น btn-primary
                document.getElementById(buttonId).classList.add('btn-primary');
                document.getElementById(buttonId).classList.remove('btn-outline-primary');

                // เปลี่ยนคลาสของปุ่มที่ไม่ถูกเลือกเป็น btn-outline-primary
                if (buttonId !== currentButton) {
                    document.getElementById(currentButton).classList.add('btn-outline-primary');
                    document.getElementById(currentButton).classList.remove('btn-primary');
                }

                currentButton = buttonId; // อัปเดตปุ่มที่ถูกเลือกในปัจจุบัน
            }

            function goRoomGenaratePage() {
                window.location.href = "/booking";
            }

            function goProcessBooking() {
                window.location.href = "/process_first";
            }
            $(function() {
                $('input[name="datetimes"]').daterangepicker({
                    singleDatePicker: false, // กำหนดให้เลือกวันได้ 2 วัน
                    timePicker: true,
                    timePicker24Hour: true, // ตั้งค่าให้แสดงเวลาในรูปแบบ 24 ชั่วโมง
                    timePickerIncrement: 60, // กำหนดระยะห่างของนาทีที่เลือกได้เป็น 15 นาที
                    startDate: moment().startOf('hour').add(543, 'years'), // เพิ่ม 543 ปี
                    endDate: moment().startOf('hour').add(543, 'years'), // เพิ่ม 543 ปี
                    locale: {
                        format: 'M/DD/YYYY HH:mm',
                        "separator": " - ",
                        "applyLabel": "ยืนยัน",
                        "cancelLabel": "ยกเลิก",
                        "fromLabel": "จาก",
                        "toLabel": "ถึง",
                        "customRangeLabel": "กำหนดเอง",
                        "daysOfWeek": ["อา", "จ", "อ", "พ", "พฤ", "ศ", "ส"],
                        "monthNames": ["มกราคม", "กุมภาพันธ์", "มีนาคม",
                            "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม",
                            "พฤศจิกายน", "ธันวาคม"
                        ],
                        "firstDay": 1,
                    }
                });
            });
        </script>
    </head>

    <body>
        <div class="shadow mt-3 mx-auto position-relative overflow-y-auto"
            style=" overflow-x: hidden; width: 100%; height: 88%; border-radius: 15px; ">
            <div class="row" style="margin-top: 1rem;">
                <div class="col-2 inner-addon left-addon ms-3">
                    <i class="fi fi-rr-search" style="color: black; font-size: 120%; margin-left:5%;"></i>
                    <input type="text" class="form-control shadow"
                        style="height: 5vh; border-radius: 10px; display: flex; justify-content: center; align-items: center; font-size: 120%; padding-left:15%;"
                        id="name_room" placeholder="ค้นหาห้องประชุม">
                </div>
                <div class="col-3 inner-addon left-addon">
                    <i class="fi fi-br-calendar-clock" style="color: black; font-size: 120%; margin-left:5%;"></i>
                    <input class="form-control shadow"
                        style="width: 21vw; height: 5vh; border-radius: 10px; display: flex; justify-content: center; align-items: center; font-size: 120%; padding-left:13%;"
                        type="text" name="datetimes" />
                </div>
                <div class="col-1">
                    <div class="row">
                        <button id="btn-public" class="btn btn-primary"
                            onclick="changeRoomImage('half_a')">ห้องทั่วไป</button>
                        <button id="btn-private" class="btn btn-outline-primary"
                            onclick="changeRoomImage('half_b')">ห้องภายใน</button>
                    </div>
                </div>
                <div class="col-3" style="display: flex; justify-content: start;">
                    <button type="button" class="btn btn-primary" style="width: 15%;"
                        onclick="window.location.href='{{ url('/booking') }}'">ค้นหา</button>
                </div>

            </div>

            <div class="d-flex justify-content-center" style="width: 100%; height:100%;">
                <div style="margin:1rem 0rem 0rem 9rem;">
                    <!-- card content -->
                    <?php
            for ($i=0; $i < 9; $i++){
                ?>

                    <div class="card rounded-4 shadow mt-4"
                        style="width: 18.3rem;float: left; margin:3rem; border-radius:20px;">
                        <div class="card-header" style="border-start-start-radius:20px;border-start-end-radius:20px">
                            ชื่อห้อง
                        </div>
                        <img src="https://i.pinimg.com/236x/5a/1b/12/5a1b126a63df80e79d63ab5554276b98.jpg" height="180px"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">รายละเอียด</h5>
                            <p class="card-text">
                                ขนาด : A <br>
                                แบ่งครึ่งห้อง : A <br>
                                ราคา : A <br>
                                สถานะ : A <br>
                                ประเภทห้อง : A <br>
                                หมายเหตุ : เหนื่อยมากกก
                            </p>
                        </div>
                        <div class="card-footer d-flex justify-content-end"
                            style="border-end-start-radius:20px;border-end-end-radius:20px">
                            <button type="button" class="btn btn-success" style="width: 40%; font-size:20px;"
                                onclick="goProcessBooking()">จอง</button>
                        </div>
                    </div>

                    <?php
            }
            ?>
                    <div style="clear: both;"></div>
                </div>
            </div>
        </div>
    </body>
@endsection
