@extends('layout.norm_other_layout')
@section('content')
<body>
    <div style="display : flex; width:95vw ; flex-direction:column;">
    <div class="position-absolute top-0 end-0">
        <div style="margin-top:5% ; font-size:50px; color : #000C6A ; display: flex ; justify-content :center; align-item: center;" >
            <div style="display: flex;align-items: center;">
                <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M39 19.5C39 30.2696 30.2696 39 19.5 39C8.73045 39 0 30.2696 0 19.5C0 8.73045 8.73045 0 19.5 0C30.2696 0 39 8.73045 39 19.5Z" fill="#FFEA2F"/>
                </svg>
            </div>
            <div>
                รอการอนุมัติ
            </div>

        </div>


        <div style="display : flex ;flex-direction: row ; justify-content-start; width:90vw; margin-top:3%; ">
                <img src="https://omo-oss-image.thefastimg.com/portal-saas/new2022071417205406509/cms/image/903d1009-961d-41d9-a07f-2074bf00ec78.jpg" alt="" style="border-radius : 4%; width:43% ; height:60%">
        <div style="font-size:30px; color : #000C6A ; width:55% ; margin-left : 10%">
                <p>ชื่อ ปุ้มปุ้ย ลุยสวน</p>
                <p>วันที่ : 27/02/2567 - 27/02/2567</p>
                <p>เวลา : 09:00 - 12:00 น.</p>
                <p>เบอร์โทรศัพท์ : XXX-XXX-XXXX</p>
                <p>ชื่อห้อง : G106</p>
                <p>ขนาดของห้อง : กลาง</p>
                <p>หมายเลขการจอง :XXXXXXXXXXXXX</p>
                <div class="container; d-flex justify-content-end align-items-end " style="width:100% ; margin-top:7%;">
                    <button class="btn cancle" style="width: 30% ; height : 55px; color : white; border-radius : 9px;background-color: #FF0000 ; box-shadow : 4px 3px  rgba(50,50,50,.2); font-size:20px;">
                        ยกเลิกการจอง
                    </button>
                    <button class="btn approve mx-4" style="width: 30% ; height : 55px; color : white; border-radius : 9px;background-color: #000C6A ; box-shadow : 4px 3px  rgba(50,50,50,.2); font-size:20px;">
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
