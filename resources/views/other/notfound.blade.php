@extends('layout.norm_other_layout')
@section('content')

    <head>
        <!-- CSS BTN HOVER-->
        <style>
            button:hover {
                background-color: rgb(114, 114, 114);
            }

            button {
                width: 30%;
                height: 6vh;
                border-radius: 15px;
                font-size: 20px;
                background-color: #9B9B9B
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
                <i class="fi fi-sr-cross-circle" style="color: #FC1C1C; font-size: 100px;"></i>
                <p style="font-size: 64px; color: #FC1C1C;"> ไม่พบข้อมูลการจอง</p>
                <div class="mt-3">
                    <button type="button" onclick="window.location.href='{{ url('/tracking') }}'">
                        ย้อนกลับ
                    </button>
                </div>
            </div>
        </div>
    </body>
@endsection
