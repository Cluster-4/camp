@extends('layout.norm_other_layout')

@section('content')
    <script>
        function redirectToHome() {
            window.location.href = "{{ url('/tracking') }}";
        }

        function showSuccessMessage() {
            let message =
                "หมายเลขการจอง : xxxxxxxxxxxx\nหมายเหตุ : หมายเลขการจองสามารถนำไปตรวจสอบสถานะการจองได้ในเมนูติดตามสถานะการจอง";
            message = message.replaceAll("\n", "<br>");
            Swal.fire({
                title: "จองเสร็จสิ้น",
                html: message,
                icon: "success",
                showConfirmButton: true,
                confirmButtonText: "ยืนยัน",
                customClass: {
                    popup: 'my-custom-alert-class'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    redirectToHome();
                }
            });
        }
    </script>

    <style>
        .d-flex.justify-content-end {
            display: flex;
            justify-content: flex-end;
        }

        .my-custom-alert-class {
            font-size: 20px;
            width: 50vw;
            /* ปรับขนาดตามที่ต้องการ */
        }
    </style>
    <div style="width:100vw; height:100%; display:flex; flex-direction:column; justify-content:start; align-items:center;">
        <div class=""
            style="width: 15%;height:13%; border-end-start-radius: 15px;border-end-end-radius: 15px; background-color: #000C6A; display: flex;
        justify-content: center; align-items: center; color:white; font-size:180%; margin-bottom:1%">
            <p class="mt-3">ขั้นตอนที่ 3/3</p>
        </div>
        <p style="font-size:350%; color: #000C6A; ">ตรวจสอบรายละเอียด</p>
        <div style="display:flex;">
            <div class="col-md-8">
                <div class="d-flex justify-content-left ">
                    <img src="https://www.ananda.co.th/blog/thegenc/wp-content/uploads/2023/09/business-meeting-working-room-office-building-FI.jpg"
                        class="room-image" alt="Room Image" width="612" height="387" style="border-radius:18px;">
                </div>
            </div>
            <div class="col-md-4">
                <div class="shadow card-body"
                    style=" margin-left: 2rem; width: 140%; height: 40vh;  overflow-y: auto; overflow-x: hidden; background-color: #c7c7c7;border-radius:18px;font-size:20px">
                    <p class="card-title">ชื่อ : </p>
                    <p class="card-text">วันที่ : 27/02/2567</p>
                    <p class="card-text">เวลา : 09:00 - 12:00 น.</p>
                    <p class="card-text">เบอร์โทรศัพท์ : XXX-XXXX-XXX</p>
                    <p class="card-text">ชื่อห้อง : G106</p>
                    <p class="card-text">ขนาด : กลาง</p>
                    <p class="card-text"> ราคาสุทธิ : 225 บาท </p>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end " style="width: 87%; height: 7%; margin-top: 9rem">
            <button class="btn btn-secondary me-2" style="width: 20%; font-size:20px;"
                onclick="window.location.href='{{ url('/process_second') }}'">ย้อนกลับ</button>
            <button class="btn btn-primary" style="width: 20%; font-size:20px;" onclick="showSuccessMessage()">ยืนยัน</button>
        </div>
    </div>
@endsection
