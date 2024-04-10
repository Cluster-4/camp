@extends('layout.norm_officer_sidebar')
@section('content')

    <head>
        <link rel="stylesheet" href="{{ url('dist\css\inner-addon.css') }}">
        <!-- CSS BTN HOVER-->
        <script>
            function goTrackingPage() {
                window.location.href = "/tracking"
            }

            function goBookingPage() {
                window.location.href = "/home"
            }

            function validateForm() {
                var dateIn = document.getElementById('date_in').value;
                var dateOut = document.getElementById('date_out').value;
                var timeIn = document.getElementById('time_in').value;
                var timeOut = document.getElementById('time_out').value;
                console.log(dateIn, dateOut, timeIn, timeOut);
                // Check if any of the required fields are empty
                if (dateIn === '' || dateOut === '' || timeIn === '' || timeOut === '') {
                    Swal.fire({
                        icon: "error",
                        title: "กรุณากรอกข้อมูลให้ครบถ้วน",
                        confirmButtonText: "ยืนยัน",
                    });
                    return false; // Prevent form submission
                }
                // If all fields are filled, allow form submission
                window.location.href = "/booking";
                return true;
            }
        </script>
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
    </head>

    <body>
        <!-- กรอบใหญ่ -->
        <div class="shadow mt-3 mx-auto position-relative overflow-y-auto"
            style=" overflow-x: hidden; width: 100%; height: 88%; border-radius: 15px; ">
            <div style=" display: flex; flex-direction: column; justify-content: center; align-items: center; height:100%;">
                <div
                    style="font-size:70px; font-weight:800; color : #000C6A ; display: flex ; justify-content : start; align-item: start; ">
                    จองห้องประชุม
                </div>
                <!-- กรอบ input ข้อมูล -->
                <div class="shadow mt-2"
                    style="width: 60%; height: 55%; border-radius: 15px; background-color: #D9D9D9;justify-content: center; align-items: center;">
                    <form>
                        <!-- ชื่อห้อง -->
                        <div class="row" style="display: flex; justify-content: center;">
                            <div class="col-10 mt-5 inner-addon right-addon">
                                <i class="fi fi-rr-search me-2" style="color: black; font-size: 30px;"></i>
                                <input type="text" class="form-control"
                                    style="height: 8vh; border-radius: 15px; display: flex; justify-content: center; align-items: center; font-size: 30px;"
                                    id="name_room" placeholder="ค้นหาห้องประชุม">
                            </div>
                        </div>
                        <!-- วันที่ใช้ห้อง -->
                        <div class="row" style="display: flex; justify-content: center;">
                            <div class="col-5 mt-2 inner-addon right-addon" style="position: relative;">
                                <i class="fi fi-rr-calendar" style="color: black; font-size: 27px; margin-right:4%"></i>
                                <input required="" type="text" id="date_in" class="form-control input-date"
                                    style="height: 8vh; border-radius: 15px; font-size: 30px; " placeholder="วันที่เข้าใช้"
                                    onclick="(this.type='date')" />
                                <span style="position: absolute; top: 1vh; right: 5%; color: red;">*</span>
                            </div>
                            <div class="col-5 mt-2 inner-addon right-addon" style="position: relative;">
                                <i class="fi fi-rr-calendar" style="color: black; font-size: 27px; margin-right:4%"></i>
                                <input required="" type="text" id="date_in" class="form-control"
                                    style="height: 8vh; border-radius: 15px; font-size: 30px;"
                                    placeholder="วันที่สิ้นสุดการใช้" onclick="(this.type='date')" />
                                <span style="position: absolute; top: 1vh; right: 5%; color: red;">*</span>
                            </div>
                        </div>
                        <!-- เวลาที่ใช้ห้อง -->
                        <div class="row" style="display: flex; justify-content: center;">
                            <div class="col-5 mt-2 inner-addon right-addon" style="position: relative;">
                                <i class="fi fi-rr-clock-three" style="color: black; font-size: 27px; margin-right:4%"></i>
                                <input required="" type="text" id="time_in" class="form-control"
                                    style="height: 8vh; border-radius: 15px; font-size: 30px;" placeholder="เวลาเข้าใช้"
                                    onclick="(this.type='time')" />
                                <span style="position: absolute; top: 1vh; right: 5%; color: red;">*</span>
                            </div>
                            <div class="col-5 mt-2 inner-addon right-addon" style="position: relative;">
                                <i class="fi fi-rr-clock-three" style="color: black; font-size: 27px; margin-right:4%"></i>
                                <input required="" type="text" id="time_in" class="form-control"
                                    style="height: 8vh; border-radius: 15px; font-size: 30px;"
                                    placeholder="เวลาที่สิ้นสุดการใช้" onclick="(this.type='time')" />
                                <span style="position: absolute; top: 1vh; right: 5%; color: red;">*</span>
                            </div>
                        </div>
                        <!-- ปุ่มค้นหา -->
                        <div class="row">
                            <div class="col-12 mt-5" style="display: flex; justify-content: center; align-items: center;">
                                <button onclick="return validateForm()" type="button" class="btn btn-primary"
                                    style="width: 20%; height:120%;font-size:27px;">ค้นหา</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- หมายเหตุ -->
                <div class="mt-3" style="font-size:20px; display: flex; justify-content: center; align-items: center;">
                    <p><span style="color:red;">หมายเหตุ</span> : กรุณากรอกในช่องที่มีเครื่องหมาย
                        <span style="color:red;"> *</span> ให้ครบทุกช่อง
                    </p>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
