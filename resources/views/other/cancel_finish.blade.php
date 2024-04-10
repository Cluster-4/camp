@extends('layout.norm_other_layout')
@section('content')

<head>
    <!-- CSS BTN HOVER-->
    <style>
        button:hover {
            background-color: #2838af;
        }

        button {
            width: 30%;
            height: 6vh;
            border-radius: 15px;
            font-size: 20px;
            background-color: #000C6A;
            color: white;
            box-shadow: 0 5px 10px #00000080;
            border: 0;
        }
    </style>
</head>

<body>
    <div style=" display: flex; flex-direction: column; justify-content: center; align-items: center; height:100%;">
        <div class="shadow"
            style="width: 50%; height: 50%; border-radius: 15px; background-color: white; display: flex; justify-content: center; align-items: center; flex-direction: column;">
            <i class="fi fi-sr-check-circle" style="color: green; font-size: 100px;"></i>
            <p style="font-size: 64px; color: #000C6A;"> ยกเลิกการจองเสร็จสิ้น</p>
            <div id="countdown" style="font-size: 24px; margin-top: 20px;"></div>
        </div>
    </div>
    <script>
        var timeLeft = 3; // เวลาที่เหลืออยู่ (วินาที)
        var countdownElement = document.getElementById('countdown'); // อ้างอิงไปยังส่วนของ HTML ที่แสดงเส้นนับถอยหลัง

        // ฟังก์ชันสำหรับนับถอยหลัง
        function countdown() {
            if (timeLeft == 0) {
                window.location.href = '/tracking'; // เมื่อนับถอยหลังเสร็จสิ้นให้เปลี่ยนเส้นทาง URL
            } else {
                countdownElement.innerHTML = 'จะพากลับไปหน้าติดตามสถานะการจองภายใน ' + timeLeft + ' วินาที'; // แสดงข้อความนับถอยหลัง
                timeLeft--; // ลดเวลาลงทีละ 1 วินาที
                setTimeout(countdown, 1000); // เรียกใช้ฟังก์ชันนับถอยหลังใหม่ทุกๆ 1 วินาที
            }
        }
        countdown(); // เริ่มการนับถอยหลังเมื่อหน้าเว็บโหลดเสร็จ

    </script>
</body>
@endsection
