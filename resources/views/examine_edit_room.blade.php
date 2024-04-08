@extends('layout.system_admin_sidebar')
@section('content')

    <head>
        <script src="sweetalert2.all.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
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

        .head-page {
            color: #000C6A;
        }

        .display_other {
            display: none;
        }

        .div-backgrund{
            width: 94.5vw; 
            height: 84vh;
        }

        .div-col{
            width: auto;
            height: auto;
        }

        .head-page{
            color: #000C6A;
            font-size: 300%;
        }
    </style>

    <div class="shadow div-backgrund mt-4">
        <div class="container">
            <div class="row">
                <h1 class="text-center mt-5 head-page">ตรวจสอบรายละเอียด</h1>

                {{-- ซ้าย --}}
                <div class="col-6 mt-5">
                    <div>
                        <div class="mb-4 d-flex justify-content-center">
                            <img id="selectedImage" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg"
                                alt="example placeholder" style="width: 70%;" />
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="btn btn-primary btn-rounded">
                                <label class="form-label text-white m-1" for="customFile1">Choose file</label>
                                <input type="file" class="form-control d-none" id="customFile1"
                                    onchange="displaySelectedImage(event, 'selectedImage')" />
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ขวา --}}
                <div class="col-6 mt-5">
                    <div class="container">
                        {{-- ชื่อห้อง --}}
                        <div class="row d-flex align-items-center">
                          <div class="col">
                            <label for="roomName" class="form-label">ชื่อห้อง</label>
                          </div>
                          <div class="col-6">
                            <label for="name">G101</label>
                          </div>
                          <div class="col">
                            
                          </div>
                        </div>

                        <br>

                        {{-- ขนาดห้อง --}}
                        <div class="row d-flex align-items-center">
                            <div class="col">
                                <label for="floor" class="form-label">ขนาดห้อง</label>
                            </div>
                            <div class="col-6">
                                <label for="">กลาง</label>
                            </div>
                            <div class="col">
                                <label for="capacity" class="form-label">ความจุ 50 คน</label>
                            </div>
                        </div>

                        <br>

                        {{-- แบ่งครึ่งห้อง --}}
                        <div class="row d-flex align-items-center">
                            <div class="col">
                                <label for="type" class="form-label">แบ่งครึ่งห้อง</label>
                            </div>
                            <div class="col-6">
                                <select class="form-select div-input" id="haft-room-select" onchange="haft_function()">
                                    <option value="1">ได้</option>
                                    <option value="0">ไม่ได้</option>
                                </select>
                            </div>
                            <div class="col">
                                
                            </div>
                        </div>

                        <br>
                        
                        {{-- สถานะ --}}
                        <div class="row d-flex align-items-center">
                            <div class="col">
                                <label for="facilities" class="form-label">สถานะ</label>
                            </div>
                            <div class="col-6">
                                <label for="">พร้อมใช้</label>
                            </div>
                            <div class="col">
                                
                            </div>
                        </div>

                        <br>

                        {{-- ราคา --}}
                        <div class="row d-flex align-items-center">
                            <div class="col">
                                <label for="price" class="form-label">ราคา</label>
                            </div>
                            <div class="col-6">
                                <label for="">75</label>
                            </div>
                            <div class="col">
                                <label for="price" class="form-label">บาท/ชั่วโมง</label>
                            </div>
                        </div>

                        <br>

                        {{-- คำอธิบายเพิ่มเติม --}}
                        <div class="row d-flex align-items-top">
                            <div class="col">
                                <label for="capacity" class="form-label">คำอธิบายเพิ่มเติม</label>
                            </div>
                            <div class="col-6">
                                <label for="">1. <br>
                                    2. <br>
                                    3.
                                </label>
                            </div>
                            <div class="col">
                                
                            </div>
                        </div>

                        <br>

                        {{-- ประเภทห้อง --}}
                        <div class="row d-flex align-items-center">
                            <div class="col">
                                <label for="resources" class="form-label">ประเภทห้อง</label>
                            </div>
                            <div class="col-6">
                                <label for="">ห้องทั่วไป</label>
                            </div>
                            <div class="col">
                                
                            </div>
                        </div>

                        <br><br>

                        <div class="justify-content-end div-button mt-5" id="button-haft-room">
                            <a href="add_room"><button type="button" class="btn btn-secondary custom-button">ย้อนกลับ</button></a>
                            <button class="btn btn-primary ms-2 custom-button" type="button" onclick="con()">ยืนยัน</button>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>

    {{-- หน้าสำหรับกรอกข้อมูลห้องที่สามารถแบ่งครึ่งได้ --}}

    <div class="shadow div-backgrund mt-4" id="haft-room1">
        <div class="container">
            <div class="row">
                <h1 class="text-center mt-5 head-page">ครึ่งห้องส่วน A</h1>

                {{-- ซ้าย --}}
                <div class="col-6 mt-5">
                    <div>
                        <div class="mb-4 d-flex justify-content-center">
                            <img id="selectedImage" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg"
                                alt="example placeholder" style="width: 70%;" />
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="btn btn-primary btn-rounded">
                                <label class="form-label text-white m-1" for="customFile1">Choose file</label>
                                <input type="file" class="form-control d-none" id="customFile1"
                                    onchange="displaySelectedImage(event, 'selectedImage')" />
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ขวา --}}
                <div class="col-6 mt-5">
                    <div class="container">

                        {{-- ขนาดห้อง --}}
                        <div class="row d-flex align-items-center">
                            <div class="col">
                                <label for="floor" class="form-label">ขนาดห้อง</label>
                            </div>
                            <div class="col-6">
                                <label for="">กลาง</label>
                            </div>
                            <div class="col">
                                <label for="capacity" class="form-label">ความจุ 50 คน</label>
                            </div>
                        </div>

                        <br>

                        {{-- ราคา --}}
                        <div class="row d-flex align-items-center">
                            <div class="col">
                                <label for="price" class="form-label">ราคา</label>
                            </div>
                            <div class="col-6">
                                <label for="">75</label>
                            </div>
                            <div class="col">
                                <label for="price" class="form-label">บาท/ชั่วโมง</label>
                            </div>
                        </div>

                        <br>

                        {{-- คำอธิบายเพิ่มเติม --}}
                        <div class="row d-flex align-items-top">
                            <div class="col">
                                <label for="capacity" class="form-label">คำอธิบายเพิ่มเติม</label>
                            </div>
                            <div class="col-6">
                                <label for="">1. <br>
                                    2. <br>
                                    3.
                                </label>
                            </div>
                            <div class="col">
                                
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>

    <div class="shadow div-backgrund mt-4" id="haft-room2">
        <div class="container">
            <div class="row">
                <h1 class="text-center mt-5 head-page">ครึ่งห้องส่วน B</h1>

                {{-- ซ้าย --}}
                <div class="col-6 mt-5">
                    <div>
                        <div class="mb-4 d-flex justify-content-center">
                            <img id="selectedImage" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg"
                                alt="example placeholder" style="width: 70%;" />
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="btn btn-primary btn-rounded">
                                <label class="form-label text-white m-1" for="customFile1">Choose file</label>
                                <input type="file" class="form-control d-none" id="customFile1"
                                    onchange="displaySelectedImage(event, 'selectedImage')" />
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ขวา --}}
                <div class="col-6 mt-5">
                    <div class="container">

                        {{-- ขนาดห้อง --}}
                        <div class="row d-flex align-items-center">
                            <div class="col">
                                <label for="floor" class="form-label">ขนาดห้อง</label>
                            </div>
                            <div class="col-6">
                                <label for="">กลาง</label>
                            </div>
                            <div class="col">
                                <label for="capacity" class="form-label">ความจุ 50 คน</label>
                            </div>
                        </div>

                        <br>

                        {{-- ราคา --}}
                        <div class="row d-flex align-items-center">
                            <div class="col">
                                <label for="price" class="form-label">ราคา</label>
                            </div>
                            <div class="col-6">
                                <label for="">75</label>
                            </div>
                            <div class="col">
                                <label for="price" class="form-label">บาท/ชั่วโมง</label>
                            </div>
                        </div>

                        <br>

                        {{-- คำอธิบายเพิ่มเติม --}}
                        <div class="row d-flex align-items-top">
                            <div class="col">
                                <label for="capacity" class="form-label">คำอธิบายเพิ่มเติม</label>
                            </div>
                            <div class="col-6">
                                <label for="">1. <br>
                                    2. <br>
                                    3.
                                </label>
                            </div>
                            <div class="col">
                                
                            </div>
                        </div>

                        <br><br>

                        <div class="d-flex justify-content-end div-button mt-5">
                            <a href="add_room"><button type="button" class="btn btn-secondary custom-button">ย้อนกลับ</button></a>
                            <button class="btn btn-primary ms-2 custom-button" type="button" onclick="con()">ยืนยัน</button>
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

        .div-input {
            border-radius: 8px;
            background-color: #C1C1C1;
        }

        .custom-button {
            width: 150px;
            height: 40px;
            border-radius: 10px;
        }
    </style>
    <script>
        window.onload = function() {
            haft_function(); // เรียกใช้เมื่อหน้าเว็บโหลดเสร็จ
        };
        // 1 แบ่งได้
        // 0 แบ่งไม่ได้

        function haft_function() {
            var classroom_dropdown = document.getElementById("haft-room-select").value;
            console.log(document.getElementById("haft-room-select").value);
            if (classroom_dropdown == 1) {
                // แสดง dropdown อย่างถูกต้อง
                document.getElementById("haft-room1").style.display = "flex";
                document.getElementById("haft-room2").style.display = "flex";
                document.getElementById("button-haft-room").style.display = "none"
            } else {
                // ซ่อน dropdown ทั้งหมดเมื่อไม่มีการเลือก
                document.getElementById("haft-room1").style.display = "none";
                document.getElementById("haft-room2").style.display = "none";
                document.getElementById("button-haft-room").style.display = "flex"
            }
        }

        function con() {
            console.log("test");
            Swal.fire({
                position: "center",
                icon: "success",
                title: "แก้ไขห้องเสร็จสิ้น",
                showConfirmButton: false,
                timer: 3000
            });
        }
    </script>
@endsection