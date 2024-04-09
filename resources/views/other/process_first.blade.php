@extends('layout.norm_other_layout')

@section('content')
    <style>
        .d-flex.justify-content-end {
            display: flex;
            justify-content: flex-end;
        }
    </style>

    <div style="width:100vw; height:100%; display:flex; flex-direction:column; justify-content:start; align-items:center;">
        <div style="width: 15%;height:13%; border-end-start-radius: 15px;border-end-end-radius: 15px; background-color: #000C6A; display: flex;
        justify-content: center; align-items: center; color:white; font-size:180%; margin-bottom:6%">
            <p class="mt-3">ขั้นตอนที่ 1/2</p>
        </div>
        <div style="display:flex;">
            <div class="col-md-8">
                <div class="d-flex justify-content-left mb-3">
                    <img id="room-image"
                        src="https://www.ananda.co.th/blog/thegenc/wp-content/uploads/2023/09/business-meeting-working-room-office-building-FI.jpg"
                        class="room-image" alt="Room Image" width="600" height="300" style="border-radius:18px;">
                </div>
                <div class="d-flex justify-content-left " style="margin-left:15%;">
                    <button id="btn-half-a" class="btn btn-primary" onclick="changeRoomImage('half_a')">ครึ่งห้องส่วน
                        A</button>
                    <button id="btn-half-b" class="btn btn-outline-primary"
                        onclick="changeRoomImage('half_b')">ครึ่งห้องส่วน B</button>
                    <button id="btn-full" class="btn btn-outline-primary"
                        onclick="changeRoomImage('full')">เต็มห้อง</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="shadow card-body "
                    style="overflow-y: auto; overflow-x: hidden; width: 140%; height: 40vh; background-color: #c7c7c7;border-radius:18px;font-size:20px">
                    <div class="d-flex justify-content-left ">
                        <p class="card-title">ชื่อห้อง : </p>
                        <p class="card-title">G106</p>
                    </div>
                    <div class="d-flex justify-content-left">
                        <p class="card-text">ขนาด : </p>
                        <p class="card-text">กลาง (53 คน)</p>
                    </div>
                    <div class="d-flex justify-content-left">
                        <p class="card-text">แบ่งครึ่งห้อง : </p>
                        <p class="card-text">ได้</p>
                    </div>
                    <div class="d-flex justify-content-left">
                        <p class="card-text">ราคา : </p>
                        <p class="card-text">75 บาท/ชม.</p>
                    </div>
                    <div class="d-flex justify-content-left">
                        <p class="card-text">ประเภทของห้อง : </p>
                        <p class="card-text">ทั่วไป</p>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p class="card-text">หมายเหตุ : </p>
                        </div>
                        <div class="col-6">
                            <p class="card-text">1.โปรเจคเตอร์ <br>
                                2.แอร์ <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end" style="width: 87%; height: 7%; margin-top: 9.3rem;">
            <button class="btn btn-secondary me-2" style="width: 20%; font-size:20px;"
                onclick="window.location.href='{{ url('/booking') }}'">ย้อนกลับ</button>
            <button class="btn btn-primary" style="width: 20%; font-size:20px;"
                onclick="window.location.href='{{ url('/process_second') }}'">ถัดไป</button>
        </div>
    </div>

    <script>
        var currentButton = 'btn-half-a'; // ตั้งค่าปุ่มที่ถูกเลือกตอนเริ่มต้น

        function changeRoomImage(option) {
            var roomImage = document.getElementById('room-image');
            switch (option) {
                case 'half_a':
                    roomImage.src =
                        'https://spaces.imgix.net/mediaFiles/ZS82LzUvZS9lNjVlZjNlMTBiYWFkNGRmMTE2ZjAwNjk1ODYxZDk1OTgwOWFmNTY5X1NwYWNlc19DaGFtY2h1cmlfU3F1YXJlX0Jhbmdrb2tfNDgxN19tZWV0aW5nX3Jvb20uanBnL2Rvd25sb2Fk?auto=compress,format&q=30';
                    toggleButtonClass('btn-half-a');
                    break;
                case 'half_b':
                    roomImage.src =
                        'https://cms-media.fda.moph.go.th/438710641696579584/2023/11/9wORcDAgeNJTsW4KvWyPVRgt.png';
                    toggleButtonClass('btn-half-b');
                    break;
                case 'full':
                    roomImage.src =
                        'https://www.ananda.co.th/blog/thegenc/wp-content/uploads/2023/09/business-meeting-working-room-office-building-FI.jpg';
                    toggleButtonClass('btn-full');
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
    </script>
@endsection
