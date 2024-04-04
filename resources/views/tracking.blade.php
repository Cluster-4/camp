<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <title>ระบบจองห้องประชุมหน่วยงานราชการ</title>
    <!-- JavaScript -->
    <script>
        function goTrackingPage() {
            window.location.href = "/tracking";
        }

        function goBookingPage() {
            window.location.href = "/home"
        }
    </script>

    <!--CSS-->
    <style>
        #frame {
            height: 936px;
            width: 1866px;
            background-color: #ffffff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
            border-radius: 15px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            place-items: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #login {
            font-size: 24px;
            position: absolute;
            top: 20px;
            right: 20px;
            margin: 1rem;
        }

        #group {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #menu {
            height: 72px;
            width: 752px;
            background-color: #D9D9D9;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            border-radius: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #search {
            height: 197px;
            width: 752px;
            background-color: #D9D9D9;
            border-radius: 15px;
            margin-top: 1rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            /* จัดให้ชิดกันตรงกลางแนวนอน */
            align-items: center;
            /* จัดให้ชิดกันตรงกลางแนวตั้ง */
            position: relative;
        }

        #booking,
        #tracking {
            height: 72px;
            width: 376px;
            background-color: #D9D9D9;
            border-radius: 15px;
            display: grid;
            place-items: center;
            position: relative;
            font-size: 20px;
            cursor: pointer;
        }

        #booking {
            color: #5F5F5F;
        }

        #tracking {
            color: #000C6A;
        }

        #tracking::after {
            content: '';
            position: absolute;
            width: 80%;
            height: 3px;
            background-color: #000C6A;
            bottom: 10px;
        }

        #tracking::before {
            content: '';
            position: absolute;
            width: 1px;
            height: 40px;
            background-color: #707070;
            left: 0;
            top: 16px;
        }

        #booking:hover {
            color: #000C6A;
        }

        #search input[type="text"] {
            font-size: 30px;
            width: 542px;
            height: 124px;
            background-color: #F5F9FD;
            text-align: center;
            border-top-left-radius: 15px;
            border-bottom-left-radius: 15px;
        }

        #search input[type="submit"] {
            font-size: 30px;
            width: 166px;
            height: 128px;
            border-top-right-radius: 15px;
            border-bottom-right-radius: 15px;
            background-color: #000C6A;
            color: white;
        }

        #search input[type="submit"]:hover {
            background-color: #707070;
        }
    </style>
</head>

<body>
    <header>
        <div id="frame">
            <div id="login">
                ลงชื่อเข้าใช้
            </div>
            <div id="group">
                <div id="menu">
                    <div id="booking" onclick="goBookingPage()">
                        จองห้องประชุม
                    </div>
                    <div id="tracking" onclick="goTrackingPage()">
                        ติดตามสถานะการจอง
                    </div>
                </div>
                <div id="search">
                    <div id="search_tracking">
                        <input type="text" id="tracking_user" class="form-control" placeholder="กรอกหมายเลขการจอง"
                            onfocus="(this.type='text')" />
                    </div>
                    <div id="get_info">
                        <input type="submit" value="ค้นหา">
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>

</html>
