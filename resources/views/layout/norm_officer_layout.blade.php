<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ระบบจองห้องประชุมหน่วยงานราชการ</title>
    <link rel="stylesheet" href="{{ url('dist/css/bootstrap.min.css') }}">
    <script src="{{ url('dist/js/bootstrap.min.js') }}"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Noto+Sans+Thai:wght@100..900&display=swap"
        rel="stylesheet">
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.2.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel="stylesheet" href="{{ url('dist\css\sidebar_style.css') }}">
    <script src="{{ url('dist\js\sidebar.js') }}"></script>
</head>
<style>
    .nav-link {
        height: 44px;
    }

    .navbar .nav-link.active {
        background-color: #69A5DD;
        color: white;
    }

    .overflow-container {
        overflow-y: auto;
        overflow-x: hidden;
        max-height: 87vh;
        /* กำหนดความสูงสูงสุดของเนื้อหา */
    }
</style>

<body style="font-family: Noto Sans Thai, DM Sans;">
    <div class="d-flex flex-row">
        {{-- sidebar --}}
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white"
            style="width: 350px; height: 100vh; background-color: #242038;">
            <a href="/"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto mx-auto text-white text-decoration-none">
                <img src="logo_bmrs.jpg" class="img-fluid" alt="" width="73px" height="65.39px"
                    style="border-radius: 15px" />
                <span class="fs-5 lh-sm ms-3">ระบบจองห้องประชุม<br>หน่วยงานราชการ</span>
            </a>
            <hr class="invisible">
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item ">
                    <a href="#" class="d-flex nav-link text-white align-items-center" aria-current="booking room">
                        <div class="me-2">
                            <svg width="32" height="28" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M30 7.86001C30.0011 7.6626 29.9633 7.46691 29.8886 7.28415C29.814 7.1014 29.704 6.93517 29.565 6.79501L23.205 0.435024C23.0648 0.296002 22.8986 0.186015 22.7158 0.111368C22.5331 0.0367213 22.3374 -0.00111627 22.14 2.50714e-05C21.9426 -0.00111627 21.7469 0.0367213 21.5641 0.111368C21.3814 0.186015 21.2152 0.296002 21.075 0.435024L16.83 4.68002L0.435024 21.075C0.296002 21.2151 0.186015 21.3814 0.111368 21.5641C0.0367213 21.7469 -0.00111627 21.9426 2.50714e-05 22.14V28.5C2.50714e-05 28.8978 0.15806 29.2793 0.439364 29.5606C0.720668 29.8419 1.1022 30 1.50002 30H7.86001C8.0699 30.0114 8.27985 29.9786 8.47624 29.9036C8.67263 29.8287 8.85108 29.7133 9.00001 29.565L25.305 13.17L29.565 9.00001C29.7019 8.85463 29.8134 8.68731 29.895 8.50501C29.9094 8.38545 29.9094 8.26458 29.895 8.14501C29.902 8.07519 29.902 8.00484 29.895 7.93501L30 7.86001ZM7.24501 27H3.00002V22.755L17.895 7.86001L22.14 12.105L7.24501 27ZM24.255 9.99001L20.01 5.74501L22.14 3.63002L26.37 7.86001L24.255 9.99001Z" fill="white"/>
                                </svg>
                        </div>
                        จัดการห้องประชุม
                    </a>
                </li>
                <li class="nav-item mt-2">
                    <a href="#" class="d-flex nav-link active align-items-center" aria-current="booking room">
                        <div class="me-2">
                            <svg width="32" height="28" viewBox="0 0 42 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.7 16.8C16.3614 16.8 17.9854 16.3074 19.3668 15.3843C20.7482 14.4613 21.8248 13.1494 22.4606 11.6145C23.0964 10.0796 23.2627 8.39069 22.9386 6.76124C22.6145 5.1318 21.8145 3.63507 20.6397 2.46031C19.4649 1.28554 17.9682 0.485523 16.3388 0.161407C14.7093 -0.162708 13.0204 0.00363956 11.4855 0.639416C9.95056 1.27519 8.63866 2.35184 7.71565 3.73321C6.79265 5.11459 6.3 6.73864 6.3 8.4C6.3 10.6278 7.185 12.7644 8.7603 14.3397C10.3356 15.915 12.4722 16.8 14.7 16.8ZM31.5 21C32.746 21 33.9641 20.6305 35.0001 19.9383C36.0361 19.246 36.8436 18.2621 37.3204 17.1109C37.7973 15.9597 37.922 14.693 37.6789 13.4709C37.4359 12.2489 36.8358 11.1263 35.9548 10.2452C35.0737 9.36416 33.9511 8.76414 32.7291 8.52106C31.507 8.27797 30.2403 8.40273 29.0891 8.87956C27.9379 9.35639 26.954 10.1639 26.2617 11.1999C25.5695 12.2359 25.2 13.454 25.2 14.7C25.2 16.3709 25.8637 17.9733 27.0452 19.1548C28.2267 20.3363 29.8291 21 31.5 21ZM39.9 35.7C40.457 35.7 40.9911 35.4788 41.3849 35.0849C41.7788 34.6911 42 34.157 42 33.6C41.9983 31.6373 41.4466 29.7144 40.4074 28.0495C39.3682 26.3845 37.8831 25.0441 36.1207 24.1804C34.3583 23.3167 32.3891 22.9642 30.4365 23.163C28.484 23.3618 26.6262 24.1038 25.074 25.305C23.0171 23.2561 20.3995 21.8623 17.5514 21.2991C14.7033 20.7359 11.7523 21.0287 9.07038 22.1406C6.38848 23.2524 4.09587 25.1335 2.48166 27.5466C0.867446 29.9597 0.00392741 32.7968 0 35.7C0 36.257 0.221249 36.7911 0.615076 37.1849C1.0089 37.5788 1.54305 37.8 2.1 37.8H27.3C27.857 37.8 28.3911 37.5788 28.7849 37.1849C29.1787 36.7911 29.4 36.257 29.4 35.7" fill="white"/>
                                </svg>
                        </div>
                        จัดการบัญชีผู้ใช้งาน
                    </a>
                </li>
                <li class="nav-item mt-2">
                    <a href="#" class="d-flex nav-link text-white align-items-center" aria-current="booking room">
                        <div class="me-2">
                            <svg width="32" height="28" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="30" height="29.7248" fill="url(#pattern0_790_962)"/>
                                <defs>
                                <pattern id="pattern0_790_962" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0_790_962" transform="matrix(0.015625 0 0 0.0157697 0 -0.00462962)"/>
                                </pattern>
                                <image id="image0_790_962" width="64" height="64" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAOxAAADsQBlSsOGwAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAUWSURBVHic7ZtNbBVVFMf/ZyxEKKI2QCIkqESiIhQ/6kYXihqtC200KXGl4sqFCRvjRimYkOjW4EbRhXGlDSZqMJgIKQuD2ioqDSE1QJsQqpQKpjSx7Ss/F/Meqe/N1513X+cl7W9539xz/ue8O/feOXdGagDAUuBV4ChwiXxcBUaBA0BnI3Q2BGADcCJn0El8BiwvOr5EgDXAcAOCr/AlEBQdZyzApw0MvsKLPjWbL0PAGknnJV3ny2YMv5nZvb6M+RxOj6rxwUvSVmCVL2M+E7DWo6001vky5DMBSz3amjdfzTujzhMLPgEt1Q1Ai6T7Jd0i6bKk383s0nwL8wHQJmmLpJskjUr6xcxKcRcvB94GxqvW3RmgF7gjxdkb87AHqPBgipaNhFvomap+48BuYFl1h9XAQIrTf4DHmz0BwBNlrUn0U15KA8KtZa+kB5KyKmmlpC9IGQlFAmyUdECh1iQ6JH0OWCBpu6RHMvpYKemdmN+uZrThgzhf7yo9+ArbJHUHkl52dN4F3BzRPu5opx7GqhsIJ7xnHe28FCgcDi4skdQe0T7gaCcvf0k6F9G+VRGrWgodgaQVOUTUDDMzOyHp5xy2XPnEzKJugRty2LoxULg+unI+pn2npJkc9rIyovg5KFccgaTDjp0uSvo16gcz+17SDklTOcSkcU7SM2Z2Oeb343Kfh74TsAUoOazBu9KsAvcB3wKzbst7JJPAB4T1hjS/ux3sloB7XDv+BFyfNb2EJbJtwOvAvw7ijgLPAw/jUAcElhFucrLQM7ejlZOQNBIOU0chAngI+DODsP1A7sddYBVwJMF+CegBaqthwOaygLPAVFnwQaA7soO7uPXA8QRhO+v1UfZjwHbgm3IMU8AZ4EMqw74ogFbgff4/2oaAx4rQ460o6gqwVuHmZUzhI/d0ETpqEsBiPSBfPaCZoIh6QLOAYz1AQAD0pXSYm4SmHQnlfz4t+ApHABPwQsYOFXqLDjQOwmHvwnYBhxw7TRNdDygUoI3aez6Ngz7rAUWTux7QlsOZt7M5j+SJY3WL8m2GYg9UgE2S7pL/g9JZSYNmNuSqKQFzHTKJAPskvebTZq0L9ppZT/ql2fB2NAZsVmODl8LR+hZh+dsLPs8G13u0lYRJut2XMZ8JGJB0xaO9OP6W1O/LmLcEmNkFSd2SBhVOWL6ZVVj36/L5cOZ1EjSzQ5IO+bTZaBb8+wGLCShaQNEsJkBSIbW4JmE6UHjaulAZDST9ULSKAjkm4DnHIkJckWQY+AjY0ii1QHvZx3DZZ710VU5RfvRgrMIscUdP+QM3YA9+DlsrHLumkfAjh4sejUOGU2SHBOzxrG0MuK3aySbgtEcnJcJH5HqDb8fvP/8HcHecs1ZgFzDiydl+Dwn42JOWEeBNqo7bI+9TwnvjTkkbJLVm0LlC0i7VPqefNbMNOeKeq2VY0q1VzWck7VW2x+9JSaclDZkZ9WhJBHglIut1vypD9Gy/w4dmye9WeCKizcd7/Usi2rwVXhafBYoWUDQt0rUvvjqUPOHNSjplZifnQ1heyHYuMSlpwMwuCHgauOKwnLwX47g76mIPAUXRHXPtPoc4JoBOAScdOlXY1GwJIHzBy5XBQPnq+VF9JjO2uRJlI2oVyBVHIKnPsdOEot8M71etsCM5RFXTF+E/6lwgz7lEn4B1wNekzwMlwq/Cn4yzBjwFDBLeX18RvglWF3P0TWTw31m+Ju3V3ysVff8B/V3rCkqo6wUAAAAASUVORK5CYII="/>
                                </defs>
                                </svg>
                        </div>
                        จองห้องประชุม
                    </a>
                </li>
                <li class="nav-item mt-2">
                    <a href="#" class="d-flex nav-link text-white align-items-center" aria-current="booking room">
                        <div class="me-2">
                            <svg width="32" height="28" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect y="0.165161" width="30" height="29.7248" fill="url(#pattern0_1109_1040)"/>
                                <defs>
                                <pattern id="pattern0_1109_1040" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0_1109_1040" transform="matrix(0.015625 0 0 0.0157697 0 -0.00462962)"/>
                                </pattern>
                                <image id="image0_1109_1040" width="64" height="64" xlink:href="data:image/png;base64,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"/>
                                </defs>
                                </svg>
                        </div>
                        ติดตามสถานะการจอง
                    </a>
                </li>
            </ul>
            <hr>
            <div class="d-flex align-items-center justify-content-between">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none"
                    aria-expanded="false">
                    <img src="https://media.discordapp.net/attachments/1209200207963758673/1224255943861080064/a8a6659eb448af110e0eb9cfb83e901d.png?ex=661cd432&is=660a5f32&hm=a4a235e24939438515f682e285e9e1fe9d10fb1ea91b0bf873690fee774c090b&=&format=webp&quality=lossless&width=628&height=585"
                        alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong><u>เจ้าหน้าที่</u></strong>
                </a>
                <a href="{{ url('/') }}" class="nav-link text-white"><i class="fi fi-sr-sign-out-alt"
                        style="font-size: 30"></i></a>
            </div>
        </div>
        <div class="d-flex flex-column mx-auto mt-1">
            {{-- navbar --}}
            <div class="d-flex bg-dark text-white align-items-center p-4 fs-3"
                style="width: 80vw; height: 10%; background-image: linear-gradient(to right ,#1E1450 ,#1E3ACC); border-radius: 18px;">
                <div class="me-3">
                    <svg width="42" height="38" viewBox="0 0 42 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.7 16.8C16.3614 16.8 17.9854 16.3074 19.3668 15.3843C20.7482 14.4613 21.8248 13.1494 22.4606 11.6145C23.0964 10.0796 23.2627 8.39069 22.9386 6.76124C22.6145 5.1318 21.8145 3.63507 20.6397 2.46031C19.4649 1.28554 17.9682 0.485523 16.3388 0.161407C14.7093 -0.162708 13.0204 0.00363956 11.4855 0.639416C9.95056 1.27519 8.63866 2.35184 7.71565 3.73321C6.79265 5.11459 6.3 6.73864 6.3 8.4C6.3 10.6278 7.185 12.7644 8.7603 14.3397C10.3356 15.915 12.4722 16.8 14.7 16.8ZM31.5 21C32.746 21 33.9641 20.6305 35.0001 19.9383C36.0361 19.246 36.8436 18.2621 37.3204 17.1109C37.7973 15.9597 37.922 14.693 37.6789 13.4709C37.4359 12.2489 36.8358 11.1263 35.9548 10.2452C35.0737 9.36416 33.9511 8.76414 32.7291 8.52106C31.507 8.27797 30.2403 8.40273 29.0891 8.87956C27.9379 9.35639 26.954 10.1639 26.2617 11.1999C25.5695 12.2359 25.2 13.454 25.2 14.7C25.2 16.3709 25.8637 17.9733 27.0452 19.1548C28.2267 20.3363 29.8291 21 31.5 21ZM39.9 35.7C40.457 35.7 40.9911 35.4788 41.3849 35.0849C41.7788 34.6911 42 34.157 42 33.6C41.9983 31.6373 41.4466 29.7144 40.4074 28.0495C39.3682 26.3845 37.8831 25.0441 36.1207 24.1804C34.3583 23.3167 32.3891 22.9642 30.4365 23.163C28.484 23.3618 26.6262 24.1038 25.074 25.305C23.0171 23.2561 20.3995 21.8623 17.5514 21.2991C14.7033 20.7359 11.7523 21.0287 9.07038 22.1406C6.38848 23.2524 4.09587 25.1335 2.48166 27.5466C0.867446 29.9597 0.00392741 32.7968 0 35.7C0 36.257 0.221249 36.7911 0.615076 37.1849C1.0089 37.5788 1.54305 37.8 2.1 37.8H27.3C27.857 37.8 28.3911 37.5788 28.7849 37.1849C29.1787 36.7911 29.4 36.257 29.4 35.7" fill="white"/>
                        </svg>
                </div>
                    จัดการบัญชีผู้ใช้งาน
            </div>
            <div class="overflow-container">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
