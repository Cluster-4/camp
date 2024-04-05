@extends('layout.norm_officer_layout')
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
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div style="border-radius: 8px; background-color: #2138B0; width: 627px; height: 390px;">
                        <div class="d-flex flex-row p-4 fs-1" style="color: white">
                                รายการจองที่เหลือ
                        </div>
                        <div class="d-flex flex-row justify-content-center" style="font-size: 128px; color: white">
                            15
                            <i class="fi fi-sr-newspaper" style="font-size: 225px; opacity: 0.3 ; color: black"></i>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div style="border-radius: 8px; background-color: #2E77E4; width: 627px; height: 390px;">
                        <div class="d-flex flex-row p-4 fs-1" style="color: white">
                                รายการที่ดำเนินการเสร็จสิ้น
                        </div>
                        <div class="d-flex flex-row justify-content-center" style="font-size: 128px; color: white">
                            7
                            <i class="fi fi-sr-newspaper" style="font-size: 225px; opacity: 0.3 ; color: black"></i>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div style="border-radius: 8px; background-color: #2EB85C; width: 627px; height: 390px;">
                        <div class="d-flex flex-row p-4 fs-1" style="color: white">
                                รายการที่อนุมัติ
                        </div>
                        <div class="d-flex flex-row justify-content-center" style="font-size: 128px; color: white">
                            4
                            <i class="fi fi-sr-newspaper" style="font-size: 225px; opacity: 0.3 ; color: black"></i>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div style="border-radius: 8px; background-color: #FF0000; width: 627px; height: 390px;">
                        <div class="d-flex flex-row p-4 fs-1" style="color: white">
                                รายการที่ไม่อนุมัติ
                        </div>
                        <div class="d-flex flex-row justify-content-center" style="font-size: 128px; color: white">
                            3
                            <i class="fi fi-sr-newspaper" style="font-size: 225px; opacity: 0.3 ; color: black"></i>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-6 mx-1" style="border-radius: 8px; background-color: #2138B0; width: 627px; height: 390px;">

                </div>
                <div class="col-6 " style="border-radius: 8px; background-color: #2138B0; width: 627px; height: 390px;"></div>
            </div> --}}
        </div>

    </div>
</body>
</html>


@endsection
