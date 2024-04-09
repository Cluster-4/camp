@extends('layout.room_admin_sidebar')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="CSS/tebleRoom.css">
        <script>
            function goTableRoomA() {
                window.location.href = "/table_a";
            }

            function goTableRoomB() {
                window.location.href = "/table_b";
            }

            function goTableRoomFull() {
                window.location.href = "/table_full";
            }

            function returnTemp() {
                window.location.href = "/table";
            }
        </script>
    </head>

    <div class="shadow container" style="background-color :#ffffff">

        <body>

            <section style="">
                <div class="container-fluid " style="">
                    <div id="room-availability" class="pt-4">
                        <div class=" d-flex justify-content: start; pt-4 " style="margin-left: 4%">
                            <div>
                                <h1 style="color:#6FA0FF; font-size:32px">ห้อง</h1>
                            </div>
                            <div style="margin-left: 8%">
                                <h1 style="magin-left:10px; font-size:32px">G104</h1>
                            </div>
                        </div>
                        <div class="wrap-selected " style="width:48%; ">
                            <div style="margin-left:4%">
                                 <button
                                    style="font-size:16px; color:black; border-radius: 10px;  ; background-color: white ;height: 55px;
                    width: 130px;"
                                    class="ml-4 btn btn-secondary btn-lg " type="button"
                                    onclick="goTableRoomA()">ครึ่งห้องส่วน A</button>
                            </div>
                            <div style="margin-left:4%">
                                <button
                                    style="font-size:16px; color:black; border-radius: 10px; background-color: white ;height: 55px;
                    width: 130px;"
                                    class="btn btn-secondary btn-lg " type="button"
                                    onclick="goTableRoomB()">ครึ่งห้องส่วน B</button>
                            </div>
                            <div style="margin-left:4%">
                                <button
                                    style="font-size:16px; color:black; border-radius: 10px; background-color: #6FA0FF ;height: 55px;
                    width: 130px;"
                                    class="btn btn-primary btn-lg" type="button"
                                    onclick="goTableRoomFull()">เต็มห้อง</button>
                            </div>
                        </div>
                        <div style="display: flex;justify-content: end;width:100%  ">
                            <div class="mt-4">
                                <h1 style="font-size:32px"> ระหว่าง&nbsp; &nbsp;</h1>
                            </div>
                            <div class="button-left mt-3">
                            </div>
                            <div class="mt-4">
                                <h1 style="font-size:32px"> &nbsp;18/03/2567 - 24/03/2567&nbsp; </h1>
                            </div>
                            <div class="button-right mt-3">

                            </div>
                        </div>
                    </div>
            </section>
            <section>
                <div class="table-container pt-4">
                    <table>
                        <tr style="height:92.63px">
                            <th class="trfrist">วัน/เวลา</th>
                            <th>08.00-09.00</th>
                            <th>09.00-10.00</th>
                            <th>10.00-11.00</th>
                            <th>11.00-12.00</th>
                            <th>12.00-13.00</th>
                            <th>13.00-14.00</th>
                            <th>14.00-15.00</th>
                            <th>15.00-16.00</th>
                            <th>16.00-17.00</th>
                            <th>17.00-18.00</th>
                            <th>18.00-19.00</th>
                            <th>19.00-20.00</th>
                        </tr>
                        <tr style="height:92.63px">
                            <td>วันจันทร์</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr style="height:92.63px">
                            <td>วันอังคาร</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr style="height:92.63px">
                            <td>วันพุธ</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr style="height:92.63px">
                            <td>วันพฤหัสบดี</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr style="height:92.63px">
                            <td>วันศุกร์</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr style="height:92.63px">
                            <td>วันเสาร์</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr style="height:92.63px">
                            <td>วันอาทิตย์</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>

                </div>
                <hr style="visibility: hidden;">
                <div class = "just">
                    <button type="button" class="btn btn-return buttomBack" onclick="returnTemp()">ย้อนกลับ</button>
                </div>
                <hr style="visibility: hidden;">
            </section>

        </body>
    </div>


    </html>
@endsection
