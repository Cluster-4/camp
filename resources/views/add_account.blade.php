@extends('layout.norm_officer_layout')
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
        <form action="/manage_account" method="POST">
            @csrf
            <div class="container" style="background-color :#ffffff;">
                <div class="container text-center">
                    <label for="text" class="mt-5 front-size: ">เพิ่มบัญชี</label>
                    <div class="row">

                        <div class="col-sm-5 col-md-6">

                            <div>
                                <div class="mb-4 d-flex justify-content-center">
                                    <img id="selectedImage" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg"
                                        style="width: 70%; height:" />
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="btn btn-primary btn-rounded">
                                        <label class="form-label text-white m-1" for="customFile1">Choose file</label>
                                        <input type="file" class="" id="pic" name="pic"
                                            onchange="displaySelectedImage(event, 'selectedImage')">
                                        {{-- form-control d-none --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0 mt-5">
                            <div class="row mb-1">
                                <div class="col-3">
                                    <label for="" class="text">ชื่อผู้ใช้ :</label>
                                </div>
                                <div class="col-3">
                                    <input type="เนส" name="username" class="input">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-3">
                                    <label for="" class="text">ชื่อ :
                                    </label>
                                </div>
                                <div class="col-3">
                                    <input type="text" name="fname" class="input">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-3">
                                    <label for="">นามสกุล : </label>
                                </div>
                                <div class="col-3">
                                    <input type="text" name="lname" class="input">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-3">
                                    <label for="บทบาท">บทบาท : </label>
                                </div>
                                <div class="col-3">
                                    <select name="position" class="drop">
                                        <option value="เจ้าหน้าที่">เจ้าหน้าที่</option>
                                        <option value="ผู้ดูเเลห้องประชุม">ผู้ดูเเลห้องประชุม</option>
                                        <option value="ผู้ดูเเลระบบ">ผู้ดูเเลระบบ</option>
                                        <option value="ผู้ดูบริหาร">ผู้ดูบริหาร</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-3">
                                    <label for="">รหัสผ่าน : </label>
                                </div>
                                <div class="col-3">
                                    <input type="text" class="input" name="password">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-3">
                                    <label for="">เบอร์โทรศัพท์ : </label>
                                </div>
                                <div class="col-3">
                                    <input type="text" class="input" name="tel">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-3">
                                    <label for="">อีเมล :
                                    </label>
                                </div>
                                <div class="col-3">
                                    <input type="text" class="input" name="email">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-3">
                                    <label for="">สถานะ :
                                    </label>
                                </div>
                                <div class="col-3">
                                    <select name="status" id="" class="drop">
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                </div>
                            </div>
                            </a><button type="submit" class="btn btn-primary">ถัดไป</button>
                            <a href="/manage_account">
                                <button type="button" class="btn btn-primary">ยกเลิก</button>
                        </div>
                    </div>
                </div>
        </form>
    </body>

    </html>
@endsection
