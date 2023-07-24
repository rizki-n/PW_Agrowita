<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ url('./assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Agrowita Admin page</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;

        }

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            height: 100%;
            width: 78px;
            background: #386A2B;
            padding: 6px 14px;
            z-index: 99;
            transition: all 0.5s ease;

            /* background-color: aquamarine;
            border-style: solid; */
        }

        /* ADDED BY FEBRY */
        .sidebar ul,
        .nav-link {
            padding-left: 0px
        }
        /* END ADDED BY FEBRY */

        /* CHANGED BY FEBRY */
        /* .sidebar i { */
            .sidebar li > a > i{
        /* END CHANGED BY FEBRY */
            color: #fff;
            height: 60px;
            min-width: 50px;
            font-size: 28px;
            text-align: center;
            line-height: 60px;

            /* background-color: gray;
            border-style: dotted; */
        }

        .sidebar li {
            position: relative;
            margin: 8px 0;
            list-style: none;
        }

        .sidebar li .navname {
            position: absolute;
            top: -20px;
            left: calc(100% + 15px);
            z-index: 3;
            background: #fff;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
            padding: 6px 12px;
            border-radius: 4px;
            font-size: 15px;
            font-weight: 400;
            opacity: 0;
            white-space: nowrap;
            pointer-events: none;
            transition: 0s;
        }

        .sidebar li:hover .navname {
            opacity: 1;
            pointer-events: auto;
            transition: all 0.4s ease;
            top: 50%;
            transform: translateY(-50%);
        }

        .sidebar li a {
            display: flex;
            height: 100%;
            width: 100%;
            text-decoration: none;
            border-radius: 12px;
            align-items: center;
            transition: all 0.4s ease;
            margin: 0px;

            /* background-color: yellow;
            border-style: dotted; */
        }

        /* CHANGED BY FEBRY */
        /* .sidebar li a:hover,
        .sidebar li .nav-link.active
        {
            background: #FFF;
            color: black !important;
        } */

        .sidebar li .nav-link.active,
        .sidebar li a:hover{
            background-color: #FFF
        }

        .sidebar li .nav-link.active,
        .sidebar li a:hover,
        .sidebar li a:hover i {
            transition: all 0.4s ease;
            color: #11101D;
        }

        .sidebar li .nav-link.active > i{
            color: #000 !important
        }

        /* END CHANGED BY FEBRY */

        .content {
            position: absolute;
            min-height: 100vh;
            top: 0;
            left: 78px;
            width: calc(100% - 80px);
            transition: all 0.5s ease;
            z-index: 2;
        }

        .content .text {
            display: inline-block;
            color: #11101d;
            font-size: 25px;
            font-weight: 500;
            margin: 18px
        }
        
    </style>
</head>

<body>

    <div class="sidebar">
        <a class="center" href="../home" style="margin: 10% 0% 50% 0%">
            <img src="{{ url('../assets/logo/agrologo.png') }}" width=90% />
        </a>

        <ul class="nav-list">
            <li class="nav-item">
                <a href="{{ url('admin/pesanan') }}">
                    <i class='bx bx-message-square-error'></i>
                </a>
                <span class="navname">Pesanan</span>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/listpaket') }}">
                    <i class='bx bx-food-menu'></i>
                </a>
                <span class="navname">Paket</span>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/tgl_tutup') }}">
                    <i class='bx bx-calendar'></i>
                </a>
                <span class="navname">Tgl Tutup</span>
            </li>
        </ul>

    </div>

    <main class="container-fluid content center">
        @yield('content')
    </main>

</body>

</html>
