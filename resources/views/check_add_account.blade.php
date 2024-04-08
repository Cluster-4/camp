@extends('layout.new_sidebar')
@section('page_name', 'Booking_approvement')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('CSS/add_account.css') }}">
        <title>Document</title>
    </head>

    <body>
        <div class="shadow container container" style="background-color :#ffffff;">
            <div class="container text-center">
                <label for="text" class="Name mt-5 front-size: ">ตรวจสอบรายละเอียด</label>
                <div class="row">
                    <div class="col-sm-5 col-md-6">
                        <div class="col+10 mage mb-3 mt-4" >
                            <img id="selectedImage" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg"
                                alt="example placeholder" style="width: 350px;" />
                        </div>
                        <div class="">
                            <div class="btn btn-primary btn-rounded">
                                <label class="form-label text-white m-1" for="customFile1">Choose file</label>
                                <input type="file" class="form-control d-none" id="customFile1"
                                    onchange="displaySelectedImage(event, 'selectedImage')" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0 mt-4">
                        <form action="" class="" style="text-align: start" >
                            <div class="row">
                                <div class="col-3">
                                    <label for="" class="text">ชื่อผู้ใช้ : </label>
                                </div>
                                <div class="col-3">
                                    <label for="">โบ๊ทคุง</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <label for="" class="text">ชื่อ: </label>
                                </div>
                                <div class="col-3">
                                    <label for="">ธนวันต์</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <label for="" class="text">ชื่อนามสกุล : </label>
                                </div>
                                <div class="col-3">
                                    <label for="">กล้วยหอม</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <label for="" class="text">บทบาท :</label>
                                </div>
                                <div class="col-3">
                                    <label for="">นักบินอวกาศ</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <label for="" class="text">รหัสผ่าน : </label>
                                </div>
                                <div class="col-3">
                                    <label for="">25478888888</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <label for="" class="text">เบอร์โทรศัพท์ : </label>
                                </div>
                                <div class="col-3">
                                    <label for="">ๅ/-ภถุึคตจ</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <label for="" class="text">อีเมลล์ : </label>
                                </div>
                                <div class="col-3">
                                    <label for="">Thanawan@gmail.com</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <label for="" class="text">สถานะ :</label>
                                </div>
                                <div class="col-3">
                                    <label for="">โสดเกิน</label>
                                </div>
                            </div>
                            <div>
                                <button type="btn" class="btn2 btn-primary">บันทึก</button>
                                <button type="btn" class="btn1 btn-primary">ยกเลิก</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
    </body>

    </html>
@endsection
