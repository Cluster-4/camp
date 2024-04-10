@extends('layout.room_admin_sidebar')
@section('page_name', 'Booking_approvement')
@section('content')

    <head>
        <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.min.css">
        <style>
            /* Media Queries for Responsive Design */
            @media (max-width: 767px) {
                .table-container {
                    overflow-x: auto;
                }
            }
        </style>
    </head>
    <!-- CODE HERE -->
    <div class="shadow my-3" style="border-radius: 18px; width:100%; height: 83vh;">
        <div class="table-container" style="background-color: #ffffff;">
            <table id="mytable" class="table table-responsive">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ชื่อผู้จอง</th>
                        <th>ชื่อห้อง</th>
                        <th>วันที่เข้าใช้</th>
                        <th>วันที่สิ้นสุด</th>
                        <th>เวลาเข้าใช้</th>
                        <th>เวลาสิ้นสุด</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookings as $booking)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $booking->user_name }}</td>
                            <td>{{ $booking->room_name }}</td>
                            <td>{{ date('d/m/Y', strtotime($booking->start_date)) }}</td>
                            <td>{{ date('d/m/Y', strtotime($booking->end_date)) }}</td>
                            <td>{{ date('H:i', strtotime($booking->start_time)) }}</td>
                            <td>{{ date('H:i', strtotime($booking->end_time)) }}</td>
                            <td>
                                <button class="btn btn-sm btn-success btn-custom"
                                    onclick="showSuccessAlert({{ $booking->id }})">✓</button>
                                <button class="btn btn-sm btn-danger btn-custom"
                                    onclick="showCancel({{ $booking->id }})">✗</button>
                                <button class="btn btn-sm btn-primary btn-custom"
                                    onclick="showDetail({{ $booking->id }})">รายละเอียด</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#mytable').DataTable();
        });

        function showSuccessAlert() {
            Swal.fire({
                title: 'ยืนยันการจอง',
                html: '<div style="display: flex; align-items: center;">' +
                    '<div style="flex: 1;">' +
                    '<img src="https://www.ananda.co.th/blog/thegenc/wp-content/uploads/2023/09/business-meeting-working-room-office-building-FI.jpg" style="max-width: 300px;">' +
                    '<p style="margin-top: 10px;">ห้อง Gt-200</p>' +
                    '</div>' +
                    '<div style="flex: 1; margin-left: 20px;">' +
                    '<p>ชื่อผู้จอง: ภาณุวิชญ์ จันทร์กลาง</p>' +
                    '<p>วันที่จอง: 03/04/2024</p>' +
                    '<p>วันที่ใช้ห้อง: 03/04/2024</p>' +
                    '<p>ถึงวันที่: 04/04/2024</p>' +
                    '<p>เวลา: 10:58-11:58 น.</p>' +
                    '<p>ขนาดของห้อง: เต็มห้อง</p>' +
                    '</div>' +
                    '</div>',
                width: '80%',
                showCancelButton: true,
                confirmButtonText: 'ยืนยันการอนุมัติ',
                cancelButtonText: 'ยกเลิก',
                confirmButtonColor: '#28a745',
                cancelButtonColor: '#9B9B9B',
                customClass: {
                    actions: 'swal-actions-styled' // ใส่ class สำหรับปรับแต่งตำแหน่งปุ่ม
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: 'อนุมัติสำเร็จ',
                        text: 'คำขอจองห้องได้รับการอนุมัติแล้ว',
                        icon: 'success',
                        width: '50%' // กำหนดความกว้างเป็น 50% ของหน้าจอ
                    })
                }
            })
        }
        //
        function showCancel() {
            Swal.fire({
                title: 'ยกเลิกการจอง',
                html: '<div style="display: flex; align-items: center;">' +
                    '<div style="flex: 1;">' +
                    '<img src="https://www.ananda.co.th/blog/thegenc/wp-content/uploads/2023/09/business-meeting-working-room-office-building-FI.jpg" style="max-width: 300px;">' +
                    '<p style="margin-top: 10px;">ห้อง G108</p>' +
                    '</div>' +
                    '<div style="flex: 1; margin-left: 20px;">' +
                    '<p>ชื่อผู้จอง: นายกรณ์ พรหมนิเกตร</p>' +
                    '<p>วันที่จอง: 19/02/2567</p>' +
                    '<p>วันที่ใช้ห้อง: 21/02/2567</p>' +
                    '<p>ถึงวันที่: 22/02/2567</p>' +
                    '<p>เวลา: 13.00-17.00 น.</p>' +
                    '<p>ขนาดของห้อง: เต็มห้อง</p>' +
                    '</div>' +
                    '</div>' +
                    '<p>เหตุผลในการยกเลิก:</p>' +
                    '<textarea class="form-control" id="reason" rows="3" style="width: 100%;"></textarea>',
                width: '80%',
                showCancelButton: true,
                confirmButtonText: 'ยืนยันการยกเลิก',
                cancelButtonText: 'ยกเลิก',
                confirmButtonColor: '#dc3545',
                cancelButtonColor: '#9B9B9B',
                customClass: {
                    actions: 'swal-actions-styled'
                },
                preConfirm: () => {
                    const reason = Swal.getPopup().querySelector('#reason').value;
                    if (!reason) {
                        Swal.showValidationMessage('กรุณาระบุเหตุผลในการยกเลิก');
                        return true;
                    }
                    return Swal.fire({
                        title: 'ยืนยันการยกเลิก',
                        text: 'คุณแน่ใจหรือไม่ว่าต้องการยกเลิกการจองนี้?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'ยืนยัน',
                        cancelButtonText: 'ยกเลิก',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            return {
                                reason
                            };
                        } else {
                            return false;
                        }
                    });
                }
            }).then((result) => {
                if (result.value && result.value.reason) {
                    Swal.fire({
                        title: 'ยกเลิกการจองสำเร็จ',
                        text: `เหตุผล: ${result.value.reason}`,
                        icon: 'success',
                        width: '50%'
                    });
                }
            });
        }
        //
        function showDetail() {
            Swal.fire({
                title: 'รายละเอียดการจอง',
                html: '<div style="display: flex; align-items: center;">' +
                    '<div style="flex: 1;">' +
                    '<img src="https://www.ananda.co.th/blog/thegenc/wp-content/uploads/2023/09/business-meeting-working-room-office-building-FI.jpg" style="max-width: 300px;">' +
                    '<p style="margin-top: 10px;">ห้อง G108</p>' +
                    '</div>' +
                    '<div style="flex: 1; margin-left: 20px;">' +
                    '<p>ชื่อผู้จอง: นายกรณ์ พรหมนิเกตร</p>' +
                    '<p>วันที่เข้าใช้: 18/02/2567</p>' +
                    '<p>วันที่สิ้นสุด: 18/02/2567</p>' +
                    '<p>เวลาเข้าใช้: 10.00</p>' +
                    '<p>เวลาสิ้นสุด: 15.00</p>' +
                    '</div>' +
                    '</div>',
                width: '70%', // กำหนดความกว้างเป็น 80% ของหน้าจอ
                confirmButtonText: 'ปิด',
            })
        }
    </script>
@endsection
