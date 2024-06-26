@extends('layout.system_admin_sidebar')
@section('content')
    <div class="d-flex bg-dark text-white align-items-center p-4 fs-3 sidebar-title">
        <i class="fi fi-rr-pencil me-4" style="font-size: "></i>
        จัดการห้องประชุม
    </div>
    <div class="shadow mt-3 d-flex py-3 justify-content-center" style="border-radius: 18px; width: 100%; height: 85vh;">
        {{-- ถ้าต้องการให้หน้าจอ overflow ได้ให้ปรับ height: > 86vh; --}}
        <form action="">
            <div class="row">
                {{-- ปรับขนาดห้อง ประเภทห้องขนาดเล็ก --}}
                <div class="col-sm-12 col-md-4 col-lg-4" style="margin-top: 7%;">
                    <div class="fs-2 text-center d-flex flex-column mb-5"
                        style="width: 100%; height: 100%; background-color: #D9D9D9; border-radius: 20px;">
                        <span class="mt-5">ห้องขนาดเล็ก</span>
                        <div class="d-flex flex-row align-items-center" style="margin-top: 16%;">
                            <label class="form-label fs-5 ms-3" for="maximum-people"
                                style="margin-right: 7%;">จำนวนคนที่จุสูงสุด</label>
                            <input class="form-control" type="number" min="0" placeholder="จำนวนคน"
                                aria-label="maximum-people" style="border-radius: 10px; width: 50%; height: 120%;">
                        </div>
                        <div class="d-flex flex-row align-items-center" style="margin-top: 15%;">
                            <label class="form-label fs-5 ms-3" for="maximum-people"
                                style="margin-right: 4%;">จำนวนคนที่จุน้อยสุด</label>
                            <input class="form-control" type="number" min="0" placeholder="จำนวนคน"
                                aria-label="maximum-people" style="border-radius: 10px; width: 50%; height: 120%;">
                        </div>
                    </div>
                </div>
                {{-- ปรับขนาดห้อง ประเภทห้องขนาดกลาง --}}
                <div class="col-sm-12 col-md-4 col-lg-4" style="margin-top: 7%">
                    <div class="fs-2 text-center d-flex flex-column"
                        style="width: 100%; height: 100%; background-color: #D9D9D9; border-radius: 20px;">
                        <span class="mt-5">ห้องขนาดกลาง</span>
                        <div class="d-flex flex-row align-items-center" style="margin-top: 16%;">
                            <label class="form-label fs-5 ms-3" for="maximum-people"
                                style="margin-right: 7%;">จำนวนคนที่จุสูงสุด</label>
                            <input class="form-control" type="number" min="0" placeholder="จำนวนคน"
                                aria-label="maximum-people" style="border-radius: 10px; width: 50%; height: 120%;">
                        </div>
                        <div class="d-flex flex-row align-items-center" style="margin-top: 15%;">
                            <label class="form-label fs-5 ms-3" for="maximum-people"
                                style="margin-right: 4%;">จำนวนคนที่จุน้อยสุด</label>
                            <input class="form-control" type="number" min="0" placeholder="จำนวนคน"
                                aria-label="maximum-people" style="border-radius: 10px; width: 50%; height: 120%;">
                        </div>
                    </div>
                </div>
                {{-- ปรับขนาดห้อง ประเภทห้องขนาดใหญ่ --}}
                <div class="col-sm-12 col-md-4 col-lg-4" style="margin-top: 7%">
                    <div class="fs-2 text-center d-flex flex-column"
                        style="width: 100%; height: 100%; background-color: #D9D9D9; border-radius: 20px;">
                        <span class="mt-5">ห้องขนาดใหญ่</span>
                        <div class="d-flex flex-row align-items-center" style="margin-top: 16%;">
                            <label class="form-label fs-5 ms-3" for="maximum-people"
                                style="margin-right: 7%;">จำนวนคนที่จุสูงสุด</label>
                            <input class="form-control" type="number" min="0" placeholder="จำนวนคน"
                                aria-label="maximum-people" style="border-radius: 10px; width: 50%; height: 120%;">
                        </div>
                        <div class="d-flex flex-row align-items-center" style="margin-top: 15%;">
                            <label class="form-label fs-5 ms-3" for="maximum-people"
                                style="margin-right: 4%;">จำนวนคนที่จุน้อยสุด</label>
                            <input class="form-control" type="number" min="0" placeholder="จำนวนคน"
                                aria-label="maximum-people" style="border-radius: 10px; width: 50%; height: 120%;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end align-items-end" style="height: 45%">
                <button type="button" class="btn me-3 btn-secondary shadow"
                    style="width: 20%; height: 12%; border-radius: 10px; font-size: 1rem;">ย้อนกลับ</button>
                <button type="submit" class="btn shadow"
                    style="width: 20%; height: 12%; border-radius: 10px; background-color: #000C6A; color: #ffffff; font-size: 1rem;">บันทึก</button>
            </div>
        </form>
    </div>
    <style>
        .buttom-sumit {
            width: 15%;
            height: 15%;
            border-radius: 10px;
            background-color: #000C6A;
            color: #ffffff;
        }

        .buttom-cancel {
            width: 15%;
            height: 15%;
            border-radius: 10px;
        }
    </style>
@endsection
