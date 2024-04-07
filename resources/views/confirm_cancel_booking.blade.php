@extends('layout.norm_other_layout')
@section('content')

    <body>
        <div class="container" style="display : flex; width:95vw ; ">
            <div class="position-absolute top-0 end-0">
                <div style="margin-top:5% ; font-size:50px; color : #000C6A ; display: flex ; justify-content :center; align-item: center;">
                    <div>
                        ยืนยันการยกเลิกการจอง
                    </div>

                </div>


                <div class="row" style="display : flex ;  flex-direction: row ; justify-content-start; width:90vw; margin-top:3%; ">


                    <div  class="col" style="width:45%; " >
                        <img src="https://www.lifewire.com/thmb/AVyFbv7LAuEgM7fli8NvJsfc8y8=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/columns-rows-excel-google-spreadsheets-57dd3f055f9b586516c6086f.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="data_cf_cc" style="font-size:30px; color : #000C6A ; width:55%; ">
                        <p>ชื่อ ปุ้มปุ้ย ลุยสวน</p>
                        <p>วันที่ : 27/02/2567 - 27/02/2567</p>
                        <p>เวลา : 09:00 - 12:00 น.</p>
                        <p>เบอร์โทรศัพท์ : XXX-XXX-XXXX</p>
                        <p>ชื่อห้อง : G106</p>
                        <p>ขนาดของห้อง : กลาง</p>
                        <p>หมายเลขการจอง :XXXXXXXXXXXXX</p>
                        <div style=" display: flex; white-space:nowrap; ">
                            <p>เหตุผลในการขอยกเลิก :</p>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" style="width:40%;margin-left:20px;background-color:#dadada"></textarea>

                        </div>

                            <div class="container; " style="width:100% ; margin-top:3%; display:flex; justify-content:flex-end;">
                                <button class="btn cancle"
                                    style="width: 30% ; height : 55px; color : white; border-radius : 9px;background-color: #898989 ; box-shadow : 4px 3px  rgba(50,50,50,.2); font-size:20px;">
                                    ย้อนกลับ
                                </button>
                                <button class="btn approve mx-4"
                                    style="width: 30% ; height : 55px; color : white; border-radius : 9px;background-color: #ff0000 ; box-shadow : 4px 3px  rgba(50,50,50,.2); font-size:20px;">
                                    ยืนยันการยกเลิก
                                </button>
                            </div>
                    </div>

                </div>
            </div>
        </div>
        </div>





    </body>
@endsection
