@extends('layout.norm_officer_layout')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="CSS/tebleRoom.css">
    </head>


    <div class="shadow container" style="background-color :#ffffff; height:150%; ">

        <body>

            <section style="">
                <div class="container-fluid " style="">
                    <div id="room-availability" class="pt-4">

                        <div>
                            <h1>ห้อง</h1>
                        </div>

                        <div class="">
                            <h1 style="magin-right:5%;">G104</h1>
                        </div>


                        <div class="wrap-selected " style=" ">
                            <hr style="visibility: hidden;">
                            <button
                                style="font-size:14px; color:black; border-radius: 10px;  ; background-color: white ;height: 55px;
                    width: 128px;"
                                class="ml-4 btn btn-secondary btn-lg " type="button">ครึ่งห้องส่วน A</button>
                            <hr style="visibility: hidden;">

                            <button
                                style="font-size:14px; color:black; border-radius: 10px; background-color: white ;height: 55px;
                    width: 128px;"
                                class="btn btn-secondary btn-lg " type="button">ครึ่งห้องส่วน B</button>
                            <hr style="visibility: hidden;">

                            <button
                                style="font-size:14px; color:black; border-radius: 10px; background-color: #6FA0FF ;height: 55px;
                    width: 128px;"
                                class="btn btn-primary btn-lg" type="button">เต็มห้อง</button>
                            <hr style="visibility: hidden;">
                        </div>

                        <div class=""
                            style="display: flex;
                        justify-content: end;width:100%  ">
                            <div class="">
                                <h1 style=""> ระหว่าง&nbsp; &nbsp;</h1>
                            </div>
                            <div class="button-left ">
                            </div>
                            <div class="">

                                <h1> &nbsp;18/03/2567 - 24/03/2567&nbsp; </h1>
                            </div>
                            <div class="button-right">

                            </div>
                        </div>
                    </div>
            </section>
            <section style="height: 100vh;">
                <div class="table-container pt-4">
                    <table>
                        <tr>
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
                        <tr>
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
                        <tr>
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
                        <tr>
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
                        <tr>
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
                        <tr>
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
                        <tr>
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
                        <tr>
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
                <div class = "just"><button type="button" class="btn btn-return buttomBack">ย้อนกลับ</button></div>

            </section>

        </body>
    </div>


    </html>
@endsection
