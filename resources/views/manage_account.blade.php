@extends('layout.system_admin_sidebar')
@section('page_name', 'Booking_approvement')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="{{ url('dist\css\inner-addon.css') }}">
        <link rel='stylesheet'
            href='https://cdn-uicons.flaticon.com/2.2.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
        <link rel='stylesheet'
            href='https://cdn-uicons.flaticon.com/2.2.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
        <link rel="stylesheet" href="CSS/manage_account.css">

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    </head>
    <style>
        .table-striped tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
        }

        .table-striped tbody tr:nth-child(even) {
            background-color: #ffffff;
        }

        .tabletop td,
        .container2 td {
            padding: 15px;
            /* ระยะห่างของข้อความภายในเซลล์ */
        }

        .tabletop td:nth-child(1),
        .container2 td:nth-child(1) {
            width: 5%;
            /* กำหนดความกว้างของคอลัมน์แรกใน tabletop และ table */
        }

        .tabletop td:nth-child(2),
        .container2 td:nth-child(2) {
            width: 30%;
            /* กำหนดความกว้างของคอลัมน์ที่สองใน tabletop และ table */
        }

        .tabletop td:nth-child(3),
        .container2 td:nth-child(3) {
            width: 30%;
            /* กำหนดความกว้างของคอลัมน์ที่สามใน tabletop และ table */
        }

        .tabletop td:nth-child(4),
        .container2 td:nth-child(4) {
            width: 16%;
            /* กำหนดความกว้างของคอลัมน์ที่สี่ใน tabletop และ table */
        }

        .tabletop td:nth-child(5),
        .container2 td:nth-child(5) {
            width: 30%;
            /* กำหนดความกว้างของคอลัมน์ที่ห้าใน tabletop และ table */
        }
    </style>

    <style>
        .table-striped tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
        }

        .table-striped tbody tr:nth-child(even) {
            background-color: #ffffff;
        }

        .tabletop td,
        .container2 td {
            padding: 15px;
            /* ระยะห่างของข้อความภายในเซลล์ */
        }

        .tabletop td:nth-child(1),
        .container2 td:nth-child(1) {
            width: 5%;
            /* กำหนดความกว้างของคอลัมน์แรกใน tabletop และ table */
        }

        .tabletop td:nth-child(2),
        .container2 td:nth-child(2) {
            width: 30%;
            /* กำหนดความกว้างของคอลัมน์ที่สองใน tabletop และ table */
        }

        .tabletop td:nth-child(3),
        .container2 td:nth-child(3) {
            width: 30%;
            /* กำหนดความกว้างของคอลัมน์ที่สามใน tabletop และ table */
        }

        .tabletop td:nth-child(4),
        .container2 td:nth-child(4) {
            width: 16%;
            /* กำหนดความกว้างของคอลัมน์ที่สี่ใน tabletop และ table */
        }

        .tabletop td:nth-child(5),
        .container2 td:nth-child(5) {
            width: 30%;
            /* กำหนดความกว้างของคอลัมน์ที่ห้าใน tabletop และ table */
        }
    </style>

    <body>
        <div class="shadow container" style="background-color :#ffffff;">
            <div class="table-wrapper">
                <form action="">
                    <div class="search" style="position: relative">
                        <i class="fi fi-rr-search"
                            style="font-size: 20px; color:black; position:absolute; top:23px; left:55px; "></i>
                        <input type="text" class="shadow text me-4" placeholder="ค้นหาผู้ใช้" style="padding-left: 40px">
                        <svg style="font-size: 20px; color:black; position:absolute; top:23px; margin-left:8px"
                            width="25" height="22" viewBox="0 0 30 27" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.5 12C11.6867 12 12.8467 11.6481 13.8334 10.9888C14.8201 10.3295 15.5892 9.39246 16.0433 8.2961C16.4974 7.19975 16.6162 5.99335 16.3847 4.82946C16.1532 3.66557 15.5818 2.59648 14.7426 1.75736C13.9035 0.918247 12.8344 0.346802 11.6705 0.115291C10.5067 -0.11622 9.30026 0.00259969 8.2039 0.456725C7.10754 0.910851 6.17047 1.67989 5.51118 2.66658C4.85189 3.65328 4.5 4.81331 4.5 6C4.5 7.5913 5.13214 9.11743 6.25736 10.2426C7.38258 11.3679 8.9087 12 10.5 12ZM22.5 15C23.39 15 24.26 14.7361 25.0001 14.2416C25.7401 13.7471 26.3169 13.0443 26.6575 12.2221C26.9981 11.3998 27.0872 10.495 26.9135 9.6221C26.7399 8.74918 26.3113 7.94736 25.682 7.31802C25.0526 6.68869 24.2508 6.2601 23.3779 6.08647C22.505 5.91284 21.6002 6.00195 20.7779 6.34255C19.9557 6.68314 19.2529 7.25992 18.7584 7.99994C18.2639 8.73996 18 9.60999 18 10.5C18 11.6935 18.4741 12.8381 19.318 13.682C20.1619 14.5259 21.3065 15 22.5 15ZM28.5 25.5C28.8978 25.5 29.2794 25.342 29.5607 25.0607C29.842 24.7794 30 24.3978 30 24C29.9988 22.5981 29.6047 21.2246 28.8624 20.0353C28.1201 18.8461 27.0594 17.8886 25.8005 17.2717C24.5417 16.6548 23.1351 16.403 21.7404 16.545C20.3457 16.687 19.0187 17.217 17.91 18.075C16.4408 16.6115 14.5711 15.6159 12.5367 15.2136C10.5024 14.8114 8.39448 15.0205 6.47884 15.8147C4.5632 16.6089 2.92562 17.9525 1.77261 19.6762C0.619604 21.3998 0.00280529 23.4263 0 25.5C0 25.8978 0.158035 26.2794 0.43934 26.5607C0.720644 26.842 1.10218 27 1.5 27H19.5C19.8978 27 20.2794 26.842 20.5607 26.5607C20.842 26.2794 21 25.8978 21 25.5"
                                fill="black" />
                        </svg>
                        <select name="cars" id="cars" class="shadow Status "style=" padding-left: 40px ">
                            <option value="บทบาท">บทบาท</option>
                            <option value="saab">เจ้าหน้าที่</option>
                            <option value="mercedes">ผู้ดูเเลห้องประชุม</option>
                            <option value="audi">ผู้ดูเเลระบบ</option>
                        </select>
                        <a href="/manage_account/create"><button type="button"
                                class="btn1 btn-success">เพิ่มบัญชี</button></a>
                        <a href=""></a><button type="button" class="btn2 btn-primary">ค้นหา</button></a>
                    </div>
                </form>
                <div class="tabletop text-center " style="display: table; width:100%;">
                    <table style="width: 100%">
                        <tr>
                            <td style="padding: 15px">#</td>
                            <td style="padding: 15px">ชื่อผู้ใช้</td>
                            <td style="padding: 15px">บทบาท</td>
                            <td style="padding: 15px ">สถานะ</td>
                            <td style="padding: 15px ">จัดการบัญชี</td>
                        </tr>
                    </table>
                </div>

                <div class="container2 " style="background-color :#ffffff; ">
                    <table style="width: 100%">
                        <table class="table text-center table-striped table-hover " style=" margin-top: 0% ">
                            <tbody class="Text ">
                                <?php
                        foreach ($bmrs_accounts as $index => $accounts) { ?>
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $accounts->acc_fname }} {{ $accounts->acc_lname }}</td>
                                    <td>{{ $accounts->acc_position }}</td>

                                    @if ($accounts->acc_status == 'Inactive')
                                        <td><span class="status text-inactive">&bull;</span>{{ $accounts->acc_status }}</td>
                                    @else
                                        <td><span class="status text-active">&bull;</span>{{ $accounts->acc_status }}</td>
                                    @endif

                                    <td class="dl-and-edit_btn d-flex flex-row">
                                        <a href="manage_account/{{ $accounts->acc_id }}/edit" class="edit"
                                            title="เเก้ไข"data-toggle="tooltip"><button type="button"
                                                class="btn btn-primary">เเก้ไขบัญชี</button>
                                        </a>


                                        <form class="delete-form" action="manage_account/{{ $accounts->acc_id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button  type="submit" class="btn btn-danger">ลบบัญชี</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
        </div>
    </body>



@endsection
