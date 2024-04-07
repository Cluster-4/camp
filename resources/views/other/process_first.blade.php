@extends('layout.norm_other_layout')
@section('content')
    <script>
        function selectRoom(room) {
            // ลบคลาส active ทั้งหมดจากทุกปุ่ม
            var buttons = document.querySelectorAll('.btn');
            buttons.forEach(button => {
                button.classList.remove('active');
            });

            // เพิ่มคลาส active ให้กับปุ่มที่ถูกคลิก
            event.target.classList.add('active');

            // เปลี่ยนสีของกล่องตามที่ถูกคลิก
            var box = document.querySelector('.box');
            box.style.backgroundColor = room === 'A' ? 'red' : room === 'B' ? 'blue' : 'green';
        }
    </script>

    <body>
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center" style="width: 100%;">
                <div
                    style="width: 15%;height:90%; border-end-start-radius: 15px;border-end-end-radius: 15px; background-color: #000C6A; display: flex;
            justify-content: center; align-items: center; color:white; font-size:250%;">
                    <p class="mt-3">ขั้นตอนที่ 1/3</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" style="width: 100%; height:100%;">
            <div class="col-6 d-flex justify-content-center align-items-center" style="width: 100%; border: 1px solid black;">
                <div class="d-flex justify-content-center mb-3">
                    <img src="https://www.ananda.co.th/blog/thegenc/wp-content/uploads/2023/09/business-meeting-working-room-office-building-FI.jpg"
                        class="room-image" alt="Room Image" width="600" height="300">
                </div>
                <div class="d-flex justify-content-center mx-2">
                    <button class="btn btn-outline-primary mx-1" onclick="selectRoom('A')">ครึ่งห้องส่วน A</button>
                    <button class="btn btn-outline-primary mx-1" onclick="selectRoom('B')">ครึ่งห้องส่วน B</button>
                    <button class="btn btn-outline-primary mx-1" onclick="selectRoom('Full')">เต็มห้อง</button>
                </div>
            </div>
            <div class="col-6 d-flex justify-content-center align-items-center"
                style="width: 100%; border: 1px solid black;">
                <!-- ส่วนของคอลัมน์ที่สอง -->
            </div>
        </div>
    </body>
@endsection
