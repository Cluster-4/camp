@extends('layout.system_admin_sidebar')
@section('page_name', 'Booking_approvement')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('CSS/edit_account.css') }}">
        <title>Document</title>
    </head>

    <body>
        <div class="shadow container container" style="background-color :#ffffff;">
            <div class="container text-center">
                <label for="text" class="Name mt-5 front-size: ">เเก้ไขบัญชีผู้ใช้</label>
                <div class="row">
                    <div class="col-sm-5 col-md-6">
                        <div class="col+10 mage mb-3 mt-4">
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
                        <form action="" class="" style="text-align: start">
                            <div class="row mb-1">
                                <div class="col-3">
                                    <label for="" class="text">ชื่อผู้ใช้ : </label>
                                </div>
                                <div class="col-3">
                                    <input type="text" class="input">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-3">
                                    <label for="" class="text">ชื่อ: </label>
                                </div>
                                <div class="col-3">
                                    <input type="text" class="input">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-3">
                                    <label for="" class="text">นามสกุล : </label>
                                </div>
                                <div class="col-3">
                                    <input type="text" class="input">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-3">
                                    <label for="" class="text">บทบาท :</label>
                                </div>
                                <div class="col-3">
                                    <select name="บทบาท" id="" class="drop">
                                        <option value="บทบาท">บทบาท</option>
                                        <option value="saab">เจ้าหน้าที่</option>
                                        <option value="mercedes">ผู้ดูเเลห้องประชุม</option>
                                        <option value="audi">ผู้ดูเเลระบบ</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-3">
                                    <label for="" class="text">รหัสผ่าน : </label>
                                </div>
                                <div class="col-3">
                                    <input type="text" class="input">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-3">
                                    <label for="" class="text">เบอร์โทรศัพท์ : </label>
                                </div>
                                <div class="col-3">
                                    <input type="text" class="input">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-3">
                                    <label for="" class="text">อีเมลล์ : </label>
                                </div>
                                <div class="col-3">
                                    <input type="text" class="input">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <label for="" class="text">สถานะ :</label>
                                </div>
                                <div class="col-3">
                                    <select name="สถานะ" id="" class="drop ">
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <a href="/check_edit_account"><button type="button"
                                        class="btn btn-primary btn-save ">ถัดไป</button></a>
                                <a href="/manage_account"><button type="button"
                                        class="btn btn-secondary btn-back">ยกเลิก</button></a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
    </body>

    </html>
@endsection
