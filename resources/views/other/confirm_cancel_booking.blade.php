@extends('layout.norm_other_layout')
@section('content')

    <body>
        <div style="display : flex; width:95vw ; flex-direction:column;">
            <div class="position-absolute top-0 end-0">
                <div
                    style="margin-top:5% ; font-size:50px; color : #000C6A ; display: flex ; justify-content :center; align-item: center;">
                        ยืนยันการยกเลิกการจอง
                </div>
                <div style="display : flex ;flex-direction: row ;justify-content-start; width:90vw; margin-top:3%;">
                    <img src="https://omo-oss-image.thefastimg.com/portal-saas/new2022071417205406509/cms/image/903d1009-961d-41d9-a07f-2074bf00ec78.jpg"
                        alt="" style="border-radius : 4%; width:43% ; height:60%">
                    <div style="font-size:30px; color : black ; width:55% ; margin-left : 10%">
                        ชื่อ ปุ้มปุ้ย ลุยสวน<br>
                        วันที่ : 27/02/2567 - 27/02/2567 <br>
                        เวลา : 09:00 - 12:00 น.<br>
                        เบอร์โทรศัพท์ : XXX-XXX-XXXX<br>
                        ชื่อห้อง : G106<br>
                        ขนาดของห้อง : กลาง<br>
                        หมายเลขการจอง :XXXXXXXXXXXXX
                        <div style=" display: flex; white-space:nowrap; ">
                            <p>เหตุผลในการขอยกเลิก :</p>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" style="width:40%;margin-left:20px;background-color:#dadada"></textarea>
                        </div>
                        <div class="container; d-flex justify-content-end align-items-end "
                            style="width:100% ; margin-top:8.1rem;">
                            <button class="btn cancle"
                                style="width: 30% ; height : 55px; color : white; border-radius : 9px;background-color: #9B9B9B ; box-shadow : 4px 3px  rgba(50,50,50,.2); font-size:20px;"
                                onclick="window.location.href='{{ url('/wait') }}'">
                                ย้อนกลับ
                            </button>
                            <button class="btn approve mx-4"
                                style="width: 30% ; height : 55px; color : white; border-radius : 9px;background-color: #000C6A ; box-shadow : 4px 3px  rgba(50,50,50,.2);
                                 font-size:20px;" onclick="window.location.href='{{ url('/cancel_finish') }}'">
                                ยืนยัน
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </body>
@endsection
