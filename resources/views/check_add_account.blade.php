@extends('layout.system_admin_sidebar')
@section('page_name', 'Booking_approvement')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('CSS/check_add_account.css') }}">
        <title>Document</title>
    </head>

    <body>
        <div class="shadow container container" style="background-color :#ffffff;">
            <div class="container text-center">
                <label for="text" class="Name mt-5 front-size: ">ตรวจสอบบัญชีบัญชีผู้ใช้</label>
                <div class="row">
                    <div class="col-sm-5 col-md-6">
                        {{-- style="margin-left:25%" --}}
                        <div class="col+10 mage mb-3 mt-4" >
                            <img id="selectedImage" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg"
                                alt="example placeholder" style="width: 350px;" />
                        </div>

                    </div>
                    <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0 mt-4">
                        <form action="" class="" style="text-align: start" >
                            <div class="row mb-2">
                                <div class="col-3">
                                    <label for="" class="text">ชื่อผู้ใช้ : </label>
                                </div>
                                <div class="col-3">
                                    <label for="text">Money</label>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3">
                                    <label for="" class="text">ชื่อ: </label>
                                </div>
                                <div class="col-3">
                                    <label for="text">Money</label>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3">
                                    <label for="" class="text">ชื่อนามสกุล : </label>
                                </div>
                                <div class="col-3">
                                    <label for="text">Money</label>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3">
                                    <label for="" class="text">บทบาท :</label>
                                </div>
                                <div class="col-3">
                                    <label for="text">Money</label>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3">
                                    <label for="" class="text">รหัสผ่าน : </label>
                                </div>
                                <div class="col-3">
                                    <label for="text">Money</label>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3">
                                    <label for="" class="text">เบอร์โทรศัพท์ : </label>
                                </div>
                                <div class="col-3">
                                    <label for="text">Money</label>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3">
                                    <label for="" class="text">อีเมลล์ : </label>
                                </div>
                                <div class="col-3">
                                    <label for="text">Money</label>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-3">
                                    <label for="" class="text">สถานะ :</label>
                                </div>
                                <div class="col-3">
                                    <label for="text">Money</label>
                                </div>
                            </div>
                            <div>
                                <a href="/manage_account"><button type="button" class="btn btn-primary btn-next ">บันทึก</button></a>
                                <a href="/add_account"><button type="button" class="btn btn-secondary btn-cancel">ย้อนกลับ</button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </body>
    </html>
@endsection
