@extends('layout.norm_other_layout')

@section('content')
    <style>
        .d-flex.justify-content-end {
            display: flex;
            justify-content: flex-end;
        }

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
    <script>
        function generateRandomCode(length) {
            const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            let result = '';
            for (let i = 0; i < length; i++) {
                result += characters.charAt(Math.floor(Math.random() * characters.length));
            }
            return result;
        }

        function redirectToHome() {
            window.location.href = "{{ url('/tracking') }}";
        }

        function showSuccessMessage() {
            let randomCode = generateRandomCode(6);
            let message =
                "หมายเลขการจอง :" + randomCode +
                "\nหมายเหตุ : หมายเลขการจองสามารถนำไปตรวจสอบสถานะการจองได้ในเมนูติดตามสถานะการจอง";
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

        function validateForm() {
            var first_name = document.getElementById('f_name').value;
            var last_name = document.getElementById('l_name').value;
            var phone = document.getElementById('phone').value;
            var captcha = grecaptcha.getResponse();
            console.log(first_name, last_name, phone, captcha);
            // Check if any of the required fields are empty
            if (first_name === '' || last_name === '' || phone === '' || captcha === '') {
                Swal.fire({
                    icon: "error",
                    title: "กรุณากรอกข้อมูลให้ครบถ้วน",
                    confirmButtonText: "ยืนยัน"
                });
                return false; // Prevent form submission
            }
            // If all fields are filled, allow form submission
            showSuccessMessage()
            return true;
        }
    </script>
    <div style="width:100vw; height:100%; display:flex; flex-direction:column; justify-content:start; align-items:center;">
        <div
            style="width: 15%;height:13%; border-end-start-radius: 15px;border-end-end-radius: 15px; background-color: #000C6A; display: flex;
        justify-content: center;align-items: center; color:white; font-size:180%; margin-bottom:1%">
            <p class="mt-3">ขั้นตอนที่ 2/2</p>
        </div>
        <p style="font-size:350%; color: #000C6A; ">กรอกรายละเอียดการจอง</p>
        <div class="mt-2 row d-flex align-item-center justify-content-center" style="width:50%; height:50%;">
            <form method="POST" action="{{ route('store_booking') }}">
                @csrf
                <div class="shadow  mt-2"
                    style="background-color: #c7c7c7; border-radius: 18px; font-size: 150%; width:100%; margin-bottom:1%;  padding:5%;">
                    <div class="form-group row mb-3 mt-3">
                        <div class="col-3">
                            <label for="f_name" class="card-text me-2">ชื่อ :</label>
                        </div>
                        <div class="col-9">
                            <input type="text" class="shadow form-control" name="f_name" id="f_name" placeholder="กรอกชื่อจริง"
                                style="width: 100%; border: none; margin-left:auto; font-size: 100%">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-3">
                            <label for="surname" class="card-text me-1">นามสกุล :</label>
                        </div>
                        <div class="col-9">
                            <input type="text" class="shadow form-control" name="l_name" id="l_name" placeholder="กรอกนามสกุล"
                                style="width: 100%; border: none; margin-left:auto; font-size: 100%">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-3">
                            <label for="phone" class="card-text me-2">เบอร์โทรศัพท์ :</label>
                        </div>
                        <div class="col-9">
                            <input type="text" class="shadow form-control" name="phone" id="phone" placeholder="xxx-xxxx-xxx"
                                style="width: 100%; height:130%; border: none; margin-left:auto;">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-5">
                        <div class="g-recaptcha" data-sitekey="6LdCH7MpAAAAACPV2aZa_XrzCqL4a1aB1bDUKzqr"></div>
                    </div>
                </div>
        </div>
        <div class="d-flex justify-content-end " style="width: 87%; height: 7%; margin-top: 7rem">
            <button class="btn btn-secondary me-2" style="width: 20%; font-size:20px;"
                onclick="window.location.href='{{ url('/process_first') }}'">ย้อนกลับ</button>
            <button class="btn btn-primary" style="width: 20%; font-size:20px;" onclick="validateForm()">ยืนยัน</button>
        </div>
        </form>
    </div>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection
