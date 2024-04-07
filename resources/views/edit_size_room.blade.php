@extends('layout.norm_officer_layout')
@section('content')
    <div class="shadow mt-3 d-flex py-3" style="border-radius: 18px; width: 100%; height: 85vh;"> {{-- ถ้าต้องการให้หน้าจอ overflow ได้ให้ปรับ height: 100%; --}}
        <div class="container">
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
                                    aria-label="maximum-people" style="border-radius: 10px; width: 206px; height: 120%;">
                            </div>
                            <div class="d-flex flex-row align-items-center" style="margin-top: 15%;">
                                <label class="form-label fs-5 ms-3" for="maximum-people"
                                    style="margin-right: 4%;">จำนวนคนที่จุน้อยสุด</label>
                                <input class="form-control" type="number" min="0" placeholder="จำนวนคน"
                                    aria-label="maximum-people" style="border-radius: 10px; width: 206px; height: 120%;">
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
                                    aria-label="maximum-people" style="border-radius: 10px; width: 206px; height: 120%;">
                            </div>
                            <div class="d-flex flex-row align-items-center" style="margin-top: 15%;">
                                <label class="form-label fs-5 ms-3" for="maximum-people"
                                    style="margin-right: 4%;">จำนวนคนที่จุน้อยสุด</label>
                                <input class="form-control" type="number" min="0" placeholder="จำนวนคน"
                                    aria-label="maximum-people" style="border-radius: 10px; width: 206px; height: 120%;">
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
                                    aria-label="maximum-people" style="border-radius: 10px; width: 206px; height: 120%;">
                            </div>
                            <div class="d-flex flex-row align-items-center" style="margin-top: 15%;">
                                <label class="form-label fs-5 ms-3" for="maximum-people"
                                    style="margin-right: 4%;">จำนวนคนที่จุน้อยสุด</label>
                                <input class="form-control" type="number" min="0" placeholder="จำนวนคน"
                                    aria-label="maximum-people" style="border-radius: 10px; width: 206px; height: 120%;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-end justify-content-end" style="padding-top: 23%">
                    <button type="button" class="btn me-3 btn-secondary shadow"
                        style="width: 15%; height: 15%; border-radius: 10px;">ย้อนกลับ</button>
                    <button type="submit" class="btn shadow"
                        style="width: 15%; height: 15%; border-radius: 10px; background-color: #000C6A; color: #ffffff">บันทึก</button>
                </div>
            </form>
        </div>
    </div>
@endsection
