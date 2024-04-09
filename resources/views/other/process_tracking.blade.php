@extends('layout.norm_other_layout')
@section('content')
    <style>
        /* เพิ่ม CSS เพื่อปรับระยะห่างของปุ่มใน alert */
        .swal2-confirm,
        .swal2-cancel {
            margin-right: 1rem;
        }
    </style>
    <script>
        function showDeleteMessage() {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: "btn btn-success",
                    cancelButton: "btn btn-danger"
                },
                buttonsStyling: false
            });
            swalWithBootstrapButtons.fire({
                title: "ยืนยันการยกเลิก",
                text: "การจองห้องของคุณจะถูกยกเลิก",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "ยืนยันการยกเลิก",
                cancelButtonText: "ยกเลิกการยืนยัน",
                reverseButtons: true,
                width: "40vw",
            }).then((result) => {
                if (result.isConfirmed) {
                    swalWithBootstrapButtons.fire({
                        title: "ยกเลิกการจองสำเร็จ",
                        text: "การจองของคุณถูกยกเลิกเรียบร้อย\nกำลังพากลับหน้าหลัก",
                        icon: "success",
                        width: "40vw",
                        timer: 3000,
                        timerProgressBar: true,
                        showConfirmButton: false,
                    }).then(() => {
                        window.location.href = "{{ url('/tracking') }}";
                    });
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swalWithBootstrapButtons.fire({
                        title: "ยกเลิกการยืนยันเรียบร้อย",
                        text: "คุณยังคงรักษาห้องสุดเจ๋งของคุณไว้ได้",
                        icon: "error",
                        width: "40vw",
                        confirmButtonText: "ยืนยัน",
                        showConfirmButton: true // ไม่แสดงปุ่มยืนยัน
                    });
                }
            });
        }
    </script>

    <body>
        <div style="display: flex; justify-content: center; margin-top: 2rem; margin-bottom:3rem;">
            <div style="font-size: 50px; color: #000C6A; display: flex; justify-content: center; align-item: center;">
                <div style="display: flex; align-items: center;">
                    <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M39 19.5C39 30.2696 30.2696 39 19.5 39C8.73045 39 0 30.2696 0 19.5C0 8.73045 8.73045 0 19.5 0C30.2696 0 39 8.73045 39 19.5Z"
                            fill="#FFEA2F" />
                    </svg>
                    รอการอนุมัติ
                </div>
            </div>
        </div>
        <div style="display: flex; align-items: center; height: 68vh; width: 95vw; flex-direction: column;">
            <div class="shadow card mb-3" style="max-width: 50vw; height: 50vh; justify-content: center;">
                <div class="card-header" style="font-size: 30px;">
                    รหัสการจอง :
                </div>
                <div class="row g-0" style="height: 100vh;">
                    <div class="col" style="display: flex; justify-content: center; align-items: center; height: auto;">
                        <img src="https://omo-oss-image.thefastimg.com/portal-saas/new2022071417205406509/cms/image/903d1009-961d-41d9-a07f-2074bf00ec78.jpg"
                            class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-8 d-flex align-items-center">
                        <div class="card-body" style="height: auto;; display: flex; flex-direction: column;">
                            <div class="row">
                                <div class="col">
                                    <h3 class="card-title ">ชื่อ : </h3>
                                </div>
                                <div class="col-7 d-flex align-items-center">
                                    <h5 class="card-text" style="font-size: 1.5rem;"> ปุ้มปุ้ย ลุยสวน</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h3 class="card-title ">วันที่ : </h3>
                                </div>
                                <div class="col-7 d-flex align-items-center">
                                    <h5 class="card-text" style="font-size: 1.5rem; "> 27/02/2567 - 27/02/2567</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h3 class="card-title ">เวลา : </h3>
                                </div>
                                <div class="col-7 d-flex align-items-center">
                                    <h5 class="card-text" style="font-size: 1.5rem;"> 09:00 - 12:00 น.</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h3 class="card-title ">เบอร์โทรศัพท์ :</h3>
                                </div>
                                <div class="col-7 d-flex align-items-center">
                                    <h5 class="card-text" style="font-size: 1.5rem;"> XXX-XXX-XXXX</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h3 class="card-title ">ชื่อห้อง :</h3>
                                </div>
                                <div class="col-7 d-flex align-items-center">
                                    <h5 class="card-text" style="font-size: 1.5rem;"> G106</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h3 class="card-title ">ขนาดของห้อง : </h3>
                                </div>
                                <div class="col-7 d-flex align-items-center ">
                                    <h5 class="card-text" style="font-size: 1.5rem;"> กลาง</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="d-flex justify-content-end align-items-end"
                style="margin-right: 3.2rem; margin-top: 2rem; width:95vw; height:25vh; border-end-start-radius:20px;border-end-end-radius:20px;">
                <button type="button" class="btn btn-danger me-2" style="font-size:20px; width:17vw; height: 6vh;"
                    onclick="showDeleteMessage()">ยกเลิกการจอง</button>
                <button type="button" class="btn btn-primary" style= "font-size:20px; width:17vw; height: 6vh;"
                    onclick="window.location.href='{{ url('/tracking') }}'">ยืนยัน</button>
            </div>
        </div>
    </body>
@endsection
