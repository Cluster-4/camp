@extends('layout.norm_other_layout')

@section('content')
    <style>
        .d-flex.justify-content-end {
            display: flex;
            justify-content: flex-end;
        }
    </style>
    <div style="width:100vw; height:100%; display:flex; flex-direction:column; justify-content:start; align-items:center;">
        <div
            style="width: 15%;height:13%; border-end-start-radius: 15px;border-end-end-radius: 15px; background-color: #000C6A; display: flex;
        justify-content: center;align-items: center; color:white; font-size:180%; margin-bottom:1%">
            <p class="mt-3">ขั้นตอนที่ 2/3</p>
        </div>
        <p style="font-size:350%; color: #000C6A; ">กรอกรายละเอียดการจอง</p>
            <div class="mt-2 row d-flex align-item-center justify-content-center" style="width:50%; height:50%;">
                <div class="shadow  mt-2" style="background-color: #c7c7c7; border-radius: 18px; font-size: 150%; width:100%; margin-bottom:1%;  padding:5%;">
                    <div class="form-group row mb-3 mt-3">
                        <div class="col-3">
                            <label for="name" class="card-text me-2">ชื่อ :</label>
                        </div>
                        <div class="col-9">
                            <input type="text" class="shadow form-control" id="name" placeholder="กรอกชื่อจริง"
                                style="width: 100%; border: none; margin-left:auto; font-size: 100%">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-3">
                            <label for="surname" class="card-text me-1">นามสกุล :</label>
                        </div>
                        <div class="col-9">
                            <input type="text" class="shadow form-control" id="surname" placeholder="กรอกนามสกุล"
                                style="width: 100%; border: none; margin-left:auto; font-size: 100%">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-3">
                            <label for="phone" class="card-text me-2">เบอร์โทรศัพท์ :</label>
                        </div>
                        <div class="col-9">
                            <input type="text" class="shadow form-control" id="phone" placeholder="xxx-xxxx-xxx"
                                style="width: 100%; height:130%; border: none; margin-left:auto;">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-5">
                        <div class="g-recaptcha" data-sitekey="6LdCH7MpAAAAACPV2aZa_XrzCqL4a1aB1bDUKzqr"></div>
                    </div>
                </div>
        </div>
        <div class="d-flex justify-content-end " style="width: 87%; height: 7%; margin-top: 7rem">
            <button class="btn btn-secondary me-2" style="width: 20%;"
                onclick="window.location.href='{{ url('/process_first') }}'">ย้อนกลับ</button>
            <button class="btn btn-primary" style="width: 20%;"
            onclick="if (document.getElementById('name').value.trim() !== '' && document.getElementById('surname').value.trim() !== ''
            && document.getElementById('phone').value.trim() !== '' && grecaptcha.getResponse() !== ''){ window.location.href='{{ url('/process_third') }}'; } else {
                alert('กรอกข้อมูลให้ครบด้วยพี่และตอบ Captcha'); }">ถัดไป</button>
        </div>
    </div>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection
