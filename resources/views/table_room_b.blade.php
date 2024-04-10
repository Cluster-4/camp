@extends('layout.room_admin_sidebar')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
        <style>
            body {
                background-color: black;
            }

            .date-carousel {
                background-color: rgb(255, 255, 255);
                box-sizing: border-box;
                display: flex;
                height: 0.5in;
                margin: auto;
                position: relative;
                width: 3in;
                margin-bottom: 30px
            }

            .date-carousel-next,
            .date-carousel-prev,
            .date-carousel-input {
                box-sizing: border-box;
                position: relative;
                border: none;
            }

            .date-carousel-next,
            .date-carousel-prev {
                background-color: transparent;
                color: white;
                cursor: pointer;
                font-size: larger;
                font-weight: bold;
                width: 0.5in;
            }

            .date-carousel-input {
                color: rgb(0, 0, 0);
                background-color: transparent;
                text-align: center;
                width: 2in;
                font-size: 1.5rem;
            }

            /* Disable Native UI */

            .date-carousel-input::-webkit-inner-spin-button,
            .date-carousel-input::-webkit-input-placeholder {
                display: none;
                -webkit-appearance: none;
            }
        </style>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="CSS/tebleRoom.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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

                            <div style="margin-left:4%">
                                <button
                                    style="font-size:16px; color:black; border-radius: 10px;  ; background-color: white ;height: 55px;
                    width: 130px;"
                                    class="ml-4 btn btn-secondary btn-lg " type="button"
                                    onclick="goTableRoomA()">ครึ่งห้องส่วน A</button>
                            </div>
                            <div style="margin-left:4%">
                                <button
                                    style="font-size:16px; color:black; border-radius: 10px; background-color: #6FA0FF ;height: 55px;
                    width: 130px;"
                                    class="btn btn-primary btn-lg " type="button" onclick="goTableRoomB()">ครึ่งห้องส่วน
                                    B</button>
                            </div>
                            <div style="margin-left:4%">
                                <button
                                    style="font-size:16px; color:black; border-radius: 10px; background-color: white ;height: 55px;
                    width: 130px;"
                                    class="btn btn-secondary btn-lg" type="button"
                                    onclick="goTableRoomFull()">เต็มห้อง</button>
                            </div>

                        <div style="display: flex;justify-content: end;width:100%  ">
                            <div class="mt-4">
                                <h1 style="font-size:32px"> ระหว่าง&nbsp; &nbsp;</h1>
                            </div>


                            <div class="mt-4">
                                <article class="date-carousel">
                                    <input type="button" class="date-carousel-prev button-left" value="&lt;">
                                    <input type="date" class="date-carousel-input start mt-2 ">
                                    <input type="button" class="date-carousel-next button-right " value="&gt;">
                                </article>
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
    <script>
        var util = {
            qs(sel, ctx) {
                return (ctx || document).querySelector(sel);
            },
            qsa(sel, ctx) {
                return Array.from((ctx || document).querySelectorAll(sel));
            }
        };

        class DateCarousel {
            constructor(el) {
                this.element = el;
                this.prevButton = util.qs(".date-carousel-prev", el);
                this.input = util.qs(".date-carousel-input", el);
                this.nextButton = util.qs(".date-carousel-next", el);
                this.input.valueAsDate = new Date();
                this.prevButton.addEventListener("click", this.prev.bind(this));
                this.nextButton.addEventListener("click", this.next.bind(this));
            }

            prev() {
                this.input.stepDown();
                this.input.stepUp();
                this.input.stepUp();
                this.input.stepUp();
                this.input.stepUp();
                this.input.stepUp();
                this.input.stepUp();
                this.input.stepUp();
            }

            next() {
                this.input.stepUp();
                this.input.stepUp();
                this.input.stepUp();
                this.input.stepUp();
                this.input.stepUp();
                this.input.stepUp();
                this.input.stepUp();
            }
        }
        util.qsa('.date-carousel').forEach(function(el) {
            new DateCarousel(el)
        });
    </script>

    </html>
@endsection
