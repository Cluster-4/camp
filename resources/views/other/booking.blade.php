@extends('layout.norm_other_layout')
@section('content')

    <head>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
        <link rel="stylesheet" href="{{ url('dist\css\inner-addon.css') }}">
        <!--JAVA SCRIPT-->
        <script>
            function goRoomGenaratePage() {
                window.location.href = "/booking";
            }

            function goProcessBooking(roomId) {
                window.location.href = "/process_first?room_id=" + roomId;
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
                        "daysOfWeek": [
                            "อา",
                            "จ",
                            "อ",
                            "พ",
                            "พฤ",
                            "ศ",
                            "ส"
                        ],
                        "monthNames": [
                            "มกราคม",
                            "กุมภาพันธ์",
                            "มีนาคม",
                            "เมษายน",
                            "พฤษภาคม",
                            "มิถุนายน",
                            "กรกฎาคม",
                            "สิงหาคม",
                            "กันยายน",
                            "ตุลาคม",
                            "พฤศจิกายน",
                            "ธันวาคม"
                        ],
                        "firstDay": 1,
                    }
                });
            });
        </script>
    </head>

    <body>
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

            <div class="col-5" style="display: flex; justify-content: start;">
                <button type="button" class="btn btn-primary" style="width: 15%;"
                    onclick="window.location.href='{{ url('/booking') }}'">ค้นหา</button>
            </div>

        </div>

        <div class="d-flex justify-content-center" style="width: 100%; height:100%;">
            <div style="margin:1rem 0rem 0rem 9rem;">
                <!-- card content -->
                @foreach ($rooms as $room)
                    <div class="card rounded-4 shadow mt-4"
                        style="width: 18.3rem;float: left; margin:3rem; border-radius:20px;">
                        <div class="card-header" style="border-start-start-radius:20px;border-start-end-radius:20px">
                            {{ $room->rm_name }}
                        </div>
                        @if ($room->rm_pic_path)
                            <img src="{{ asset('storage/room_images/' . $room->rm_pic_path) }}" height="180px">
                        @else
                            <img src="{{ asset('default_room_image.jpg') }}" height="180px">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">รายละเอียด</h5>
                            <p class="card-text">
                                ขนาด : {{ $room->room_size->rm_size_name }}<br>
                                แบ่งครึ่งห้อง : {{ $room->rm_can_half ? 'ได้' : 'ไม่ได้' }}<br>
                                ราคา : {{ $room->rm_price }}<br>
                                สถานะ : {{ $room->rm_status }}<br>
                                ประเภทห้อง : {{ $room->rm_type }}<br>
                                หมายเหตุ : {{ $room->rm_facilities }}
                            </p>
                        </div>
                        <div class="card-footer d-flex justify-content-end"
                            style="border-end-start-radius:20px;border-end-end-radius:20px">
                            <button type="button" class="btn btn-success" style="width: 40%; font-size:20px;"
                                onclick="goProcessBooking({{ $room->rm_id }})">จอง</button>
                        </div>
                    </div>
                @endforeach
                <div style="clear: both;"></div>
            </div>
        </div>
    </body>
@endsection
