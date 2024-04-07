@extends('layout.norm_other_layout')
@section('content')
<head>
    <link rel="stylesheet" href="{{url ('dist\css\inner-addon.css')}}">
        <!-- CSS BTN HOVER-->
        <style>
            button:hover {
                background-color: #2838af;
            }

            button {
                width: 30%;
                height: 8vh;
                border-radius: 15px;
                font-size: 20px;
                background-color: #000C6A;
                color: white;
                box-shadow: 0 5px 10px #00000080;
            }
        </style>
        <!--JAVA SCRIPT-->
        <script>
            function goTrackingPage() {
                window.location.href = "/tracking";
            }

            function goBookingPage() {
                window.location.href = "/home"
            }

            function goRoomGenaratePage() {
                window.location.href = "/filter";
            }
        </script>
    </head>
<body>
    <div class="row"></div>
</body>
@endsection
