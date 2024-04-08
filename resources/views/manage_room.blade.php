<!DOCTYPE html>
<html lang="en">
@extends('layout.system_admin_sidebar')
@section('content')

    <head>
        <script src="sweetalert2.all.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link rel="stylesheet" href="{{ asset('css/manageRoom.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    </head>

    <style>
        .main-container {
            width: 98%;
            height: auto;
            padding: 2%;
        }

        .main-div {
            border-radius: 18px;
            width: 97%;
            height: auto;

        }

        .card-room {
            width: 293px;
            height: 450px;
            border-radius: 20px;
            margin: 50px 6% 40px 6.5%;
            background-color: #EDEDED;
            padding: 0;
        }

        .button-search {
            width: 150px;
            border-radius: 10px;
            background-color: #3D7EFC;
        }

        .button-setting {
            width: 150px;
            border-radius: 10px;
            background-color: 828282;
        }

        .button-add {
            background-color: #2EB85C;
            color: white;
            width: 150px;
            border-radius: 10px;
        }

        .search {
            border: none;
            height: 61px;
            width: 260px;
        }

        .div-search {
            border: 1px solid #9B9B9B;
            border-radius: 10px;
            width: 310px;
            display: flex;
        }

        .div-select {
            border-radius: 10px;
            border: 1px solid #9B9B9B;
            display: flex;
            width: 210px;
        }

        .select {
            border: none;
            height: 61px;
        }
    </style>

    <body>

        <div class="shadow mt-4 my-3 ms-4 main-container main-div row ">

            <div class="row align-items-start">
                <div class="col" style="display: flex">

                    {{-- ช่องค้นหา --}}
                    <div class="div-search">
                        <div class="d-flex align-items-center ms-2">
                            <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M24.5 24.5L31.9999 31.9998" stroke="black" stroke-width="3" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M2 14.8568C2 21.9574 7.75629 27.7136 14.857 27.7136C18.4135 27.7136 21.6329 26.2696 23.9605 23.9359C26.2801 21.6103 27.7141 18.401 27.7141 14.8568C27.7141 7.75619 21.9578 2 14.857 2C7.75629 2 2 7.75619 2 14.8568Z"
                                    stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>

                        <div>
                            <input type="search" class="form-control search" placeholder="ค้นหาห้อง" aria-label="Username"
                                aria-describedby="basic-addon1">
                        </div>
                    </div>

                    {{-- เลือกประเภทห้อง --}}
                    <div class="div-select ms-4">

                        <div class="d-flex align-items-center ms-2">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="30" height="29.7248" fill="url(#pattern0_695_877)" />
                                <defs>
                                    <pattern id="pattern0_695_877" patternContentUnits="objectBoundingBox" width="1"
                                        height="1">
                                        <use xlink:href="#image0_695_877"
                                            transform="matrix(0.015625 0 0 0.0157697 0 -0.00462962)" />
                                    </pattern>
                                    <image id="image0_695_877" width="64" height="64"
                                        xlink:href="data:image/png;base64,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" />
                                </defs>
                            </svg>
                        </div>

                        <div class="">
                            <select class="form-select select" aria-label="Default select example">
                                <option selected>ประเภทห้องประชุม</option>
                                <option value="1">ห้องทั่วไป</option>
                                <option value="2">ห้องภายใน</option>
                            </select>
                        </div>

                    </div>
                </div>
                {{-- ปุ่มต่างๆทางขวา --}}
                <div class="col d-flex justify-content-end">
                    <div class="d-flex flex-row bd-highlight mb-3">
                        <div class="p-2 bd-highlight"><button class="btn btn-primary button-search" type="button">ค้นหา</button></div>
                        <div class="p-2 bd-highlight"><a href="edit_size_room"><button class="btn btn-secondary button-setting" type="button">ตั้งค่าขนาดห้อง</button></a></div>
                        <div class="p-2 bd-highlight"><a href="add_room"><button class="btn btn button-add" type="button">เพิ่มห้อง</button></a></div>
                    </div>
                </div>
            </div>
            {{-- loop ปริ้น card --}}
            <?php
                for ($i = 0; $i < 10; $i++) {
                    // Start a new row if $i is divisible by 3 (starting from 0)
                ?>
            {{-- card  --}}
            <div class="card card-room ms">
                <!-- card content -->
                <img src="https://i.pinimg.com/236x/5a/1b/12/5a1b126a63df80e79d63ab5554276b98.jpg" width="293px" height="182px" class="card-img-top" alt="..." style="border-radius: 20px 20px 0px 0px;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                        ชื่อ :
                        <br>ขนาด :
                        <br>แบ่งครึ่งห้อง :
                        <br>ราคา :
                        <br>สถานะ :
                        <br>ประเภทห้อง :
                    </p>
                </div>
                <div class="d-flex justify-content-end align-items-end">
                    {{-- เปลี่ยนด่านหลัง fi fi-sr- เท่านั้น --}}
                    <a href="" class="nav-link mb-2"><i class="fi fi-sr-trash" style="font-size: 30px; color: red;"></i></a>
                    <a href="edit_room" class="nav-link mb-2"><i class="fi fi-sr-pencil" style="font-size: 30px"></i></a>
                </div>
            </div>
            <?php
                // Close the row if $i is the last index of the row (or the last index of the loop)
            }
            ?>
        </div>

        <style>
            .button-cancel{
                width: 150px;
                border-radius: 10px;
                background-color: #9B9B9B;
                color: white;
            }
            .button-con{
                width: 150px;
                border-radius: 10px;
                background-color: #FC1C1C;
                color: white;
            }
        </style>
        <script>
            const trashLinks = document.querySelectorAll('.fi.fi-sr-trash');

            // Add click event listener to each trash icon link
            trashLinks.forEach(link => {
                link.addEventListener('click', (event) => {
                    event.preventDefault(); // Prevent the default link behavior

                    // Show the SweetAlert2 confirmation dialog
                    Swal.fire({

                        title: 'ยืนยันการลบห้องประชุม',

                        html:

                            '<div style="display: flex; align-items: center; class="row">' +
                                '<div style="flex: 1;" class="col">' +
                                    '<img src="https://i.pinimg.com/236x/5a/1b/12/5a1b126a63df80e79d63ab5554276b98.jpg" style="max-width: 300px;">' +
                                '</div>' +
                                '<br>' +
                                '<div style="flex: 1;" class="col ">' +
                                    '<p>ชื่อ : </p>' +
                                    '<p>ขนาด : </p>' +
                                    '<p>แบ่งครึ่งห้อง : </p>' +
                                    '<p>ราคา : </p>' +
                                    '<p>สถานะ : </p>' +
                                    '<p>ประเภทห้อง : </p>' +
                                '</div>' +
                            '</div>' +
                            '<br>',
                            // '<div class="row" style="align-items: center;">' +
                            //     '<div class="col">' +
                            //         '<button class="button-cancel modal-b-cancel shadow">ย้อนกลับ</button>' +
                            //     '</div>' +
                            //     '<div class="col">' +
                            //         '<button class="button-con modal-b-condelete shadow">ยืนยัน</button>' +
                            //     '</div>' +
                            // '</div>',
                        width: '50%' ,
                        showCancelButton: true ,
                        cancelButton: 'order-1' ,
                        confirmButton: 'order-2',
                        confirmButtonColor: '#FC1C1C',
                        cancelButtonColor: '#9B9B9B',
                        confirmButtonText: 'ยืนยัน',
                        cancelButtonText: 'ย้อนกลับ',
                        customClass: {
                            actions: 'swal-actions-styled' // ใส่ class สำหรับปรับแต่งตำแหน่งปุ่ม
                        }
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Swal.fire({
                                title: 'การลบห้องเสร็จสิ้น',
                                icon: 'success',
                                width: '50%' , // กำหนดความกว้างเป็น 50% ของหน้าจอ
                                showCancelButton: false ,
                                showConfirmButton: false ,
                                timer: 2000,
                            })
                        }
                    })
                });
            });
        </script>
        <style>
            .modal-b-condelete{
                background-color: #FC1C1C;
                color: white;
                border: none;
                width: 150px;
                height: 40px;
                border-radius: 10px;
            }
            .modal-b-cancel{
                background-color: #9B9B9B;
                color: white;
                border: none;
                width: 150px;
                height: 40px;
                border-radius: 10px;
            }
        </style>

    </body>


    </html>
@endsection
