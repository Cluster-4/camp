@extends('layout.new_sidebar')
@section('content')
    <style>
        .div-top {
            margin-left: 24px;
            width: 97%;
            padding-bottom: 2%;
        }

        .upload-form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .upload-box {
            position: relative;
            width: 200px;
            /* ปรับขนาดของช่องอัปโหลดตามที่ต้องการ */
            height: 200px;
            /* ปรับขนาดของช่องอัปโหลดตามที่ต้องการ */
            border: 2px dashed #ccc;
            border-radius: 10px;
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .upload-label {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .upload-input {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }
        .head-page{
            color: #000C6A;
        }
        .display_other{
            display: none;
        }
    </style>

<div style="width: 99.5%; height: auto;">
    <div class="shadow mt-4 rounded-3 div-top">
        <br>
        <h1 class="text-center head-page">แก้ไขห้องประชุม</h1>
        <div class="container">
            <div class="row">
                {{-- ซ้าย --}}
                <div class="col-sm-6 col-md-5 col-lg-6 d-flex align-items-center">
                    <div>
                        <div class="mb-4 d-flex justify-content-center">
                            <img id="selectedImage" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg"
                            alt="example placeholder" style="width: 70%;" />
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="btn btn-primary btn-rounded">
                                <label class="form-label text-white m-1" for="customFile1">Choose file</label>
                                <input type="file" class="form-control d-none" id="customFile1" onchange="displaySelectedImage(event, 'selectedImage')" />
                            </div>
                        </div>
                    </div>
                </div>
                {{-- ขวา --}}
                <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                    <br>

                    {{-- ชื่อห้อง --}}
                    <div class="mb-3 row d-flex align-items-center">
                        <div class="col-2 col-auto">
                            <label for="roomName" class="form-label" style="text-align: center;">ชื่อห้อง</label>
                        </div>
                        <div class="col-5">
                            <input type="text" class="form-control div-input" id="roomName" placeholder="G105">
                        </div>
                    </div>

                    {{-- ขนาดห้อง --}}
                    <div class="mb-3 row d-flex align-items-center">
                        <div class="col-2 col-auto">
                            <label for="floor" class="form-label">ขนาดห้อง</label>
                        </div>
                        <div class="col-3">
                            <select class="form-select div-input" id="floor">
                                <option value="1">เล็ก</option>
                                <option value="2">กลาง</option>
                                <option value="3">ใหญ่</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="capacity" class="form-label">ความจุ  50  คน</label>
                        </div>
                    </div>

                    {{-- แบ่งครึ่งห้อง --}}
                    <div class="mb-3 row d-flex align-items-center">
                        <div class="col-2 col-auto">
                            <label for="type" class="form-label">แบ่งครึ่งห้อง</label>
                        </div>
                        <div class="col-3">
                            <select class="form-select div-input" id="type">
                                <option value="meeting">ได้</option>
                                <option value="training">ไม่ได้</option>
                            </select>
                        </div>
                    </div>

                    {{-- สถานะ --}}
                    <div class="mb-3 d-flex align-items-center">
                        <div class="col-2 col-auto">
                            <label for="facilities" class="form-label">สถานะ</label>
                        </div>
                        <div class="col-3">
                            <select class="form-select div-input" id="facilities">
                                <option value="available">พร้อมใช้</option>
                                <option value="unavailable">ไม่พร้อมใช้</option>
                            </select>
                        </div>
                    </div>

                    {{-- ราคา --}}
                    <div class="mb-3 row d-flex align-items-center">
                        <div class="col-2 col-auto">
                            <label for="price" class="form-label">ราคา</label>
                        </div>
                        <div class="col-3">
                            <input type="number" class="form-control div-input" id="price" placeholder="75">
                        </div>
                        <div class="col col-auto">
                            <label for="price" class="form-label">บาท/ชั่วโมง</label>
                        </div>
                    </div>

                    {{-- คำอธิบายเะิ่มเติม --}}
                    <div class="mb-3 row d-flex align-items-top">
                        <div class="col col-auto">
                            <label for="capacity" class="form-label">คำอธิบายเพิ่มเติม</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control div-input" id="other" style="height: 100px;">
                        </div>
                    </div>

                    {{-- ประเภทห้อง --}}
                    <div class="mb-3 row">
                        <div class="col col-auto">
                            <label for="resources" class="form-label">ประเภทห้อง</label>
                        </div>
                        <div class="col-4">
                            <select class="form-select div-input" id="resources">
                                <option value="pub">ห้องทั่วไป</option>
                                <option value="pri">ห้องภายใน</option>
                            </select>
                        </div>
                    </div>

                    <br><br>

                </div>
            </div>
            <div class="d-flex justify-content-end div-button mt-4">
                <a href="manage_room"><button type="button" class="btn btn-secondary custom-button">ย้อนกลับ</button></a>
                <button class="btn btn-primary ms-2 custom-button" type="button">ถัดไป</button>
            </div>
        </div>

    </div>
</div>

{{-- div ใหญ่สำหรับหน้าที่ซ่อน --}}
{{-- ส่วน A --}}
<div class="display_other">
    <div>
        <div style="width: 99.5%; height: auto;">
            <div class="shadow mt-4 rounded-3 div-top">
                <br>
                <h1 class="text-center head-page">แก้ไขครึ่งห้องส่วน A</h1>
                <div class="container">
                    <div class="row">
                        {{-- ซ้าย --}}
                        <div class="col-sm-6 col-md-5 col-lg-6 d-flex align-items-center">

                            <div>
                                <div class="mb-4 d-flex justify-content-center">
                                    <img id="selectedImage" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg"
                                    alt="example placeholder" style="width: 70%;" />
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="btn btn-primary btn-rounded">
                                        <label class="form-label text-white m-1" for="customFile1">Choose file</label>
                                        <input type="file" class="form-control d-none" id="customFile1" onchange="displaySelectedImage(event, 'selectedImage')" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- ขวา --}}
                        <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">

                            <br><br>

                            {{-- ขนาดห้อง --}}
                            <div class="mb-3 row d-flex align-items-center">
                                <div class="col-2 col-auto">
                                    <label for="floor" class="form-label">ขนาดห้อง</label>
                                </div>
                                <div class="col-3">
                                    <select class="form-select div-input" id="floor">
                                        <option value="1">เล็ก</option>
                                        <option value="2">กลาง</option>
                                        <option value="3">ใหญ่</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="capacity" class="form-label">ความจุ  50  คน</label>
                                </div>
                            </div>

                            {{-- ราคา --}}
                            <div class="mb-3 row d-flex align-items-center">
                                <div class="col-2 col-auto">
                                    <label for="price" class="form-label">ราคา</label>
                                </div>
                                <div class="col-3">
                                    <input type="number" class="form-control div-input" id="price" placeholder="75">
                                </div>
                                <div class="col col-auto">
                                    <label for="price" class="form-label">บาท/ชั่วโมง</label>
                                </div>
                            </div>

                            {{-- คำอธิบายเพิ่มเติม --}}
                            <div class="mb-3 row d-flex align-items-top">
                                <div class="col col-auto">
                                    <label for="capacity" class="form-label">คำอธิบายเพิ่มเติม</label>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control div-input" id="other" style="height: 100px;">
                                </div>
                            </div>

                            <br><br>

                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
</div>

{{-- ส่วน B --}}
<div class="display_other">
    <div>
        <div style="width: 99.5%; height: auto;">
            <div class="shadow mt-4 rounded-3 div-top">
                <br>
                <h1 class="text-center head-page">แก้ไขครึ่งห้องส่วน B</h1>
                <div class="container">
                    <div class="row">
                        {{-- ซ้าย --}}
                        <div class="col-sm-6 col-md-5 col-lg-6 d-flex align-items-center">

                            <div>
                                <div class="mb-4 d-flex justify-content-center">
                                    <img id="selectedImage" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg"
                                    alt="example placeholder" style="width: 70%;" />
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="btn btn-primary btn-rounded">
                                        <label class="form-label text-white m-1" for="customFile1">Choose file</label>
                                        <input type="file" class="form-control d-none" id="customFile1" onchange="displaySelectedImage(event, 'selectedImage')" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- ขวา --}}
                        <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">

                            <br><br>

                            {{-- ขนาดห้อง --}}
                            <div class="mb-3 row d-flex align-items-center">
                                <div class="col-2 col-auto">
                                    <label for="floor" class="form-label">ขนาดห้อง</label>
                                </div>
                                <div class="col-3">
                                    <select class="form-select div-input" id="floor">
                                        <option value="1">เล็ก</option>
                                        <option value="2">กลาง</option>
                                        <option value="3">ใหญ่</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="capacity" class="form-label">ความจุ  50  คน</label>
                                </div>
                            </div>

                            {{-- ราคา --}}
                            <div class="mb-3 row d-flex align-items-center">
                                <div class="col-2 col-auto">
                                    <label for="price" class="form-label">ราคา</label>
                                </div>
                                <div class="col-3">
                                    <input type="number" class="form-control div-input" id="price" placeholder="75">
                                </div>
                                <div class="col col-auto">
                                    <label for="price" class="form-label">บาท/ชั่วโมง</label>
                                </div>
                            </div>

                            {{-- คำอธิบายเพิ่มเติม --}}
                            <div class="mb-3 row d-flex align-items-top">
                                <div class="col col-auto">
                                    <label for="capacity" class="form-label">คำอธิบายเพิ่มเติม</label>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control div-input" id="other" style="height: 100px;">
                                </div>
                            </div>

                            <br><br>

                        </div>
                    </div>
                    <div class="d-flex justify-content-end div-button mt-4">
                        <a href="manage_room"><button type="button" class="btn btn-secondary custom-button">ย้อนกลับ</button></a>
                        <button class="btn btn-primary ms-2 custom-button" type="button">ถัดไป</button>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

    <style>
        .div-button {
            margin-bottom: 2%;
        }
        .div-input{
            border-radius: 13.5px;
            background-color: #C1C1C1;
        }
        .custom-button{
            width: 150px;
            height: 40px;
            border-radius: 10px;
        }
    </style>
@endsection
