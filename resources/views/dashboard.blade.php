@extends('layout.room_admin_sidebar')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="shadow mt-3" style="border-radius: 18px; width: 100%; height: 85vh">
        <div
            class="container"
        >
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 mt-4 mb-2 ">
                    <div style="border-radius: 8px; background-color: #2138B0; width: 522px; height: 325px; box-shadow : 8px 6px  rgba(50,50,50,.2);">
                        <div class="d-flex flex-row p-4 fs-1" style="color: white">
                                รายการจองที่เหลือ
                        </div>
                        <div class="d-flex justify-content-evenly" style="font-size: 128px; color: white">
                            15
                            <i class="fi fi-sr-newspaper j" style="font-size: 180px ; opacity: 0.3 ; color: black"></i>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-6 mt-4 mb-2 ">
                    <div style="border-radius: 8px; background-color: #2E77E4; width: 522px; height: 325px; box-shadow : 8px 6px  rgba(50,50,50,.2);">
                        <div class="d-flex flex-row p-4 fs-1" style="color: white">
                                รายการที่ดำเนินการเสร็จสิ้น
                        </div>
                        <div class="d-flex justify-content-evenly" style="font-size: 128px; color: white">
                            7
                            <i class="fi fi-sr-assept-document" style="font-size: 180px; opacity: 0.3 ; color: black"></i>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-6 mt-5">
                    <div style="border-radius: 8px; background-color: #2EB85C; width: 522px; height: 325px;  box-shadow : 8px 6px  rgba(50,50,50,.2);">
                        <div class="d-flex flex-row p-4 fs-1" style="color: white">
                                รายการที่อนุมัติ
                        </div>
                        <div class="d-flex justify-content-evenly" style="font-size: 128px; color: white">
                            4
                            <i class="fi fi-sr-checkbox" style="font-size: 180px; opacity: 0.3 ; color: black"></i>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-6 mt-5">
                    <div style="border-radius: 8px; background-color: #FF0000; width: 522px; height: 325px;  box-shadow : 8px 6px  rgba(50,50,50,.2);">
                        <div class="d-flex flex-row p-4 fs-1" style="color: white">
                                รายการที่ไม่อนุมัติ
                        </div>
                        <div class="d-flex justify-content-evenly" style="font-size: 128px; color: white">
                            3
                            <i class="fi fi-sr-rectangle-xmark" style="font-size: 180px; opacity: 0.3 ; color: black"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>


@endsection
