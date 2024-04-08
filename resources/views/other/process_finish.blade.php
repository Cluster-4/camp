@extends('layout.norm_other_layout')
@section('content')

    <head>
        <!-- CSS BTN HOVER-->
        <style>
            button:hover {
                background-color: #2838af;
            }

            button {
                width: 30%;
                height: 6vh;
                border-radius: 15px;
                font-size: 20px;
                background-color: #000C6A;
                color: white;
                box-shadow: 0 5px 10px #00000080;
                border: 0;
            }
        </style>
    </head>

    <body>
        <div style=" display: flex; flex-direction: column; justify-content: center; align-items: center; height:100%;">
            <div class="shadow"
                style="width: 50%; height: 50%; border-radius: 15px; background-color: white; display: flex; justify-content: center; align-items: center; flex-direction: column;">
                <i class="fi fi-sr-check-circle" style="color: green; font-size: 100px;"></i>
                <p style="font-size: 64px; color: #000C6A;"> เสร็จสิ้นการดำเนินการ</p>
                <p style="font-size:24px;">หมายเลขการจอง : xxxxxxxxxxx </p>
                <p style="font-size:20px;"><span style="color: red">หมายเหตุ</span> :
                    หมายเลขการจองสามารถนำไปตรวจสอบสถานะการจองได้ในเมนูติดตามสถานะการจอง</p>
                <button type="button" onclick="window.location.href='{{ url('/home') }}'">ยืนยัน</button>
            </div>
        </div>
    
    </body>
@endsection
