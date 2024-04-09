<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Days+One&family=Noto+Sans+Thai:wght@100..900&display=swap"
        rel="stylesheet">
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.2.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.2.0/uicons-regular-straight/css/uicons-regular-straight.css'>
</head>
<style>
    body {
        /* s */


        overflow: hidden;
        height: 100vh;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        background-image: url('loginbg.jpg');
        /* assets\dist\img\window11.png */
        background-size: cover;

        background-position: center;
        background-repeat: no-repeat;



    }

    form {
        text-align: center;
        margin-left: 15%;
        position: absolute;
        top: 50%;
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);

    }

    .form-signin {


        max-height: 893px;
        max-width: 903px;
        padding: 1rem;
        margin: 0 auto;

    }

    .form-signin .form-floating:focus-within {
        z-index: 2;
    }

    .form-signin input[type="username"] {
        width: 459px;
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
        width: 459px;
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .wrap-login100 {
        height: 893px;
        width: 903px;
        border-radius: 100px;
        background-color: white;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
</style>

<body>
    <form action="{{ route('login_view') }}" method="POST">
        @csrf

        <div class="wrap-login100">

            <div style="margin-top: 4%;">
                <img src="img/Meethig icon.jpg" alt="" width="288" height="299">
            </div>
            <div class="fs-1 text-center " style="font-family: 'Noto Sans Thai',sans-serif; color: #000C6A; ">
                ระบบจองห้องประชุม<br>หน่วยงานราชการ
            </div>

            <div class="d-flex flex-row justify-content-center mt-4 form-floating" style="margin-top: 4%;">
                <i class="fi fi-rs-circle-user"style="font-size: 45px;"></i>
                <div class="form-floating ms-2">
                    <input type="text" class="form-control ms-1" id="floatingInput" placeholder="Username"
                        style="width: 459px" name="acc_username">
                    <label style="color: #9B9B9B" for="floatingInput">Username</label>
                </div>

            </div>

            <div class="d-flex flex-row justify-content-center mt-4 form-floating">
                <i class="fi fi-sr-lock" style="font-size: 45px;"></i>
                <div class="form-floating ms-2">
                    <input type="password" class="form-control " id="floatingPassword" placeholder="Password"
                        style="width: 459px " name="password">
                    <label style="color:#9B9B9B " for="floatingPassword" >Password</label>
                </div>

            </div>
            <div class="">
                @if ($message = Session::get('error'))
                <h1 class="ml" style="font-size:16px; color:red">{{ $message }}</h1>
                @endif

            </div>

            <div class="form-check text-start my-3  d-flex align-items-start  " style="width: 100%; padding-left:31%">
                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                <label style="color: #9B9B9B " class="form-check-label ms-2" for="flexCheckDefault">
                    Remember me
                </label>
            </div>

            <div>
                <button style="background-color: #000C6A ;height: 50px;
            width: 259px;"
                    class="btn btn-primary py-2 btn-lg" type="submit" onclick="">Login</button>
            </div>



            <div class="d-flex align-items-start mt-3" style="width:100%; ">


                <footer class="text-center py-3  my-4 border-top d-flex align-items-start pr-6"
                    style="font-size: 0.8rem; width: 100%; ">

                    <div class="ml-6"style="width:68%">

                        <span style="color: #000C6A;" class="mb-3 mb-md-0 text-body-secondary"><img src="img/Iv.jpg"
                                alt="IV Soft Co. Logo" width="20" height="20"> IV Soft Co.,Ltd.</span>

                        <span style="color: #000C6A;" class="mb-3 mb-md-0 text-body-secondary"><img
                                src="img/buuicon.jpg" alt="Burapha University Logo" width="20" height="20"><i
                                class="fas fa-building"> Burapha University</span>

                    </div>





                </footer>


            </div>


        </div>
    </form>


</body>
</html>
