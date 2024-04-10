@extends('layout.system_admin_sidebar')
@section('content')

    <head>

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

        .div-backgrund {
            width: 94.5vw;
            height: 84vh;
        }

        .div-col {
            width: auto;
            height: auto;
        }

        .head-page {
            color: #000C6A;
            font-size: 300%;
        }

        .input-picture {
            border: 0px solid #ffffff;
            width: auto;
            height: auto;
            background-color: aqua;
            content: '';
        }
    </style>
    <div class="d-flex bg-dark text-white align-items-center p-4 fs-3 sidebar-title">
        <i class="fi fi-rr-pencil me-4" style="font-size: "></i>
        จัดการห้องประชุม
    </div>

    <form action="{{ route('update_room', [$room->rm_id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="shadow div-backgrund mt-4">
            <div class="container">
                <div class="row">
                    <h1 class="text-center mt-5 head-page">แก้ไขห้องประชุม</h1>

                {{-- ซ้าย --}}
                <div class="col-6 mt-5">
                    <div>
                        <div class="mb-4 d-flex justify-content-center">
                            <img id="selectedImage" src="{{ asset('storage/room_images/' . $room->rm_pic_path) }}" style="width: 70%;" />
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="btn btn-primary btn-rounded">

                                <input type="file" class="" id="rm_pic_path" name="rm_pic_path" onchange="displaySelectedImage(event, 'selectedImage')">
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
                                <input type="text" class="form-control div-input" id="rm_name" name="rm_name" value="{{ $room->rm_name }}">
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
                                <select class="form-select div-input" id="rm_size_id" name="rm_size_id">
                                    @foreach ($sizes as $size)
                                        <option value="{{ $size->rm_size_id }}" {{ $size->rm_size_id == $room->rm_size_id ? 'selected' : '' }}>{{ $size->rm_size_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                            </div>
                        </div>

                        <br>

                        {{-- แบ่งครึ่งห้อง --}}
                        <div class="row d-flex align-items-center">
                            <div class="col">
                                <label for="type" class="form-label">แบ่งครึ่งห้อง</label>
                            </div>
                            <div class="col-6">
                                <select class="form-select div-input" id="rm_is_half" name="rm_is_half" onchange="haft_function()">
                                    <option value="1" {{ $room->rm_is_half == 1 ? 'selected' : '' }}>ได้</option>
                                    <option value="0" {{ $room->rm_is_half == 0 ? 'selected' : '' }}>ไม่ได้</option>
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
                                <select class="form-select div-input" id="rm_status" name="rm_status">
                                    <option value="พร้อมใช้" {{ $room->rm_status == 'พร้อมใช้' ? 'selected' : '' }}>พร้อมใช้</option>
                                    <option value="ไม่พร้อมใช้" {{ $room->rm_status == 'ไม่พร้อมใช้' ? 'selected' : '' }}>ไม่พร้อมใช้</option>
                                </select>
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
                                <input type="number" class="form-control div-input" id="rm_price" name="rm_price" value="{{ $room->rm_price }}">
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
                                <input type="text" class="form-control div-input" id="rm_facilities" name="rm_facilities" value="{{ $room->rm_facilities }}" style="height: 100px;">
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
                                <select class="form-select div-input" id="rm_type" name="rm_type">
                                    <option value="ห้องทั่วไป" {{ $room->rm_type == 'ห้องทั่วไป' ? 'selected' : '' }}>ห้องทั่วไป</option>
                                    <option value="ห้องภายใน" {{ $room->rm_type == 'ห้องภายใน' ? 'selected' : '' }}>ห้องภายใน</option>
                                </select>
                            </div>
                            <div class="col">
                            </div>
                        </div>

                        <br><br>

                        <div class="justify-content-end div-button mt-5" id="button-haft-room">
                            <a href="{{ route('manage_room') }}"><button type="button" class="btn btn-secondary custom-button">ย้อนกลับ</button></a>
                            <button type="submit" class="btn btn-primary ms-2 custom-button">ยืนยัน</button>
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
                    <h1 class="text-center mt-5 head-page">แก้ไขครึ่งห้องส่วน A</h1>

                    {{-- ซ้าย --}}
                    <div class="col-6 mt-5">
                        <div>
                            <div class="mb-4 d-flex justify-content-center">
                                <img id="s_Image" src="{{ asset('storage/room_images/' . $room->rm_half_a_pic_path) }}" style="width: 70%;" />
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="btn btn-primary btn-rounded">
                                    
                                    <input type="file" class="" id="rm_half_a_pic_path" name="rm_half_a_pic_path" onchange="displaySelectedImage(event, 's_Image')">
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
                                    <select class="form-select div-input" id="rm_half_a_size_id" name="rm_half_a_size_id">
                                        @foreach ($sizes as $size)
                                            <option value="{{ $size->rm_half_a_size_id }}" {{ $size->rm_half_a_size_id == $room->rm_half_a_size_id ? 'selected' : '' }}>{{ $size->rm_size_name }}</option>
                                        @endforeach
                                    </select>
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
                                    <input type="text" class="form-control div-input" id="price" value="{{ $room->rm_a_price }}">
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
                                    <input type="text" class="form-control div-input" id="rm_half_a_facilities" name="rm_half_a_facilities" value="{{ $room->rm_half_a_facilities }}" style="height: 100px;">
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
                    <h1 class="text-center mt-5 head-page">แก้ไขครึ่งห้องส่วน B</h1>

                    {{-- ซ้าย --}}
                    <div class="col-6 mt-5">
                        <div>
                            <div class="mb-4 d-flex justify-content-center">
                                <img id="select_Image" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg"
                                    alt="example placeholder" style="width: 70%;" />
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="btn btn-primary btn-rounded">

                                    <input type="file" class="" id="rm_half_b_pic_path"
                                        name="rm_half_b_pic_path" onchange="displaySelectedImage(event, 'select_Image')">
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
                                    <select class="form-select div-input" id="rm_half_b_size_id"
                                        name="rm_half_b_size_id">
                                        @foreach ($sizes as $size)
                                            <option value={{ $size->rm_half_b_size_id }}>{{ $size->rm_size_name }}</option>
                                        @endforeach
                                    </select>
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
                                    <input type="text" class="form-control div-input" id="price" value="{{ $room->rm_b_price }}">
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
                                    <input type="text" class="form-control div-input" id="rm_half_b_facilities" name="rm_half_b_facilities" value="{{ $room->rm_half_b_facilities }}" style="height: 100px;">

                                </div>
                                <div class="col">

                                </div>
                            </div>

                            <br><br>

                            <div class="d-flex justify-content-end div-button mt-5">
                                <a href="manage_room"><button type="button"
                                        class="btn btn-secondary custom-button">ย้อนกลับ</button></a>
                                <button type="submit" class="btn btn-primary ms-2 custom-button">ยืนยัน</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


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
            var classroom_dropdown = document.getElementById("rm_is_half").value;
            console.log(document.getElementById("rm_is_half").value);
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

        function displaySelectedImage(event, elementId) {
            const selectedImage = document.getElementById(elementId);
            const fileInput = event.target;

            if (fileInput.files && fileInput.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    selectedImage.src = e.target.result;
                };

                reader.readAsDataURL(fileInput.files[0]);
            }
        }

        // function showSuccess() {
        //     console.log("test");
        //     Swal.fire({
        //         position: "center",
        //         icon: "success",
        //         title: "แก้ไขห้องเสร็จสิ้น",
        //         showConfirmButton: false,
        //         timer: 7000
        //     });
        // }
    </script>
@endsection
