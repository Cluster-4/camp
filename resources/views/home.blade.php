<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <title>ระบบจองห้องประชุมหน่วยงานราชการ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        function goTrackingPage() {
            window.location.href = "/tracking";
        }

        function goBookingPage() {
            window.location.href = "/home"
        }
    </script>

    <!-- CSS -->
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
            width: 100%;
        }

        #menu {
            width: 752px;
            max-width: 100%;
            background-color: #D9D9D9;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
            border-radius: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #booking {
            height: 72px;
            width: 376px;
            background-color: #D9D9D9;
            border-radius: 15px;
            display: grid;
            place-items: center;
            position: relative;
            color: #000C6A;
            font-size: 20px;
        }

        #booking::after {
            content: '';
            position: absolute;
            width: 80%;
            height: 3px;
            background-color: #000C6A;
            bottom: 10px;
        }

        #tracking {
            height: 72px;
            width: 376px;
            background-color: #D9D9D9;
            border-radius: 15px;
            display: grid;
            place-items: center;
            position: relative;
            color: #5F5F5F;
            font-size: 20px;
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

        #tracking:hover {
            color: #000C6A;
        }

        #search {
            margin-top: 10px;
            width: 752px;
            background-color: #D9D9D9;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.5);
            border-radius: 15px;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }

        #search div {
            margin: 5px;
        }

        #search input,
        #search label {
            font-size: 20px;
            font-family: Noto Sans Thai, DM Sans;
            color: #000000;
        }

        .form-control {
            margin: 0.5rem;
            height: 60px;
            width: 330px;
            border-radius: 10px;
        }

        #name_room {
            width: 676px;
            height: 60px;
        }

        #search input[type="submit"] {
            width: 339px;
            height: 60px;
            background-color: #000C6A;
            border: none;
            color: white;
            border-radius: 15px;
            margin-top: 40px;
        }

        #search input[type="submit"]:hover {
            background-color: #707070;
        }

        #get_info {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        #noti {
            margin: 1rem;
            color: #000000;
            text-align: center;
        }

        #noti span {
            color: red;
        }
    </style>
</head>

<body style="font-family: Noto Sans Thai, DM Sans;">
    <header>
        <div id="frame">
            <div id="login">
                ลงชื่อเข้าใช้
            </div>
            <div id="group"">
                <div id="menu">
                    <div id="booking" onclick="goBookingPage()">
                        จองห้องประชุม
                    </div>
                    <div id="tracking" onclick="goTrackingPage()">
                        ติดตามสถานะการจอง
                    </div>
                </div>
                <div id="search">
                    <div id="search_r">
                        <input type="text" id="name_room" class="form-control" placeholder="ค้นหาห้อง"
                            onfocus="(this.type='text')" />
                    </div>
                    <div id="date_i">
                        <input required="" type="text" id="date_in" class="form-control"
                            placeholder="วันที่เข้าใช้" onfocus="(this.type='date')" />
                    </div>
                    <div id="date_o">
                        <input required="" type="text" id="date_out" class="form-control"
                            placeholder="วันที่สิ้นสุด" onfocus="(this.type='date')" />
                    </div>
                    <div id="time_i">
                        <input required="" type="text" id="time_in" class="form-control"
                            placeholder="เวลาเข้าใช้" onfocus="(this.type='time')" />
                    </div>
                    <div id="time_o">
                        <input required="" type="text" id="time_out" class="form-control"
                            placeholder="เวลาสิ้นสุด" onfocus="(this.type='time')" />
                    </div>
                    <div id="get_info">
                        <input type="submit" value="ค้นหา">
                    </div>
                </div>
                <div id="noti">
                    <span>หมายเหตุ</span> : กรุณากรอกในช่องที่มีเครื่องหมาย <span>*</span> ให้ครบทุกช่อง
                </div>
            </div>
        </div>
    </header>
</body>

</html>
