<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    <link href="{{asset('css/header.css')}}" rel="stylesheet">
    <link href="{{asset('css/home.css')}}" rel="stylesheet">
    <!-- font awesome kit -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ce9e1211ca.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-flash.min.css" />

    <!-- for the jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <div id="idoverlay" style="visibility:hidden">

    </div>
    <div id="spinner" style="display: none;"></div>
    <div class="background_header white d-flex justify-content-between px-2 px-sm-5 py-3 " style="position:sticky;top:0;z-index:1000">
        <div data-aos="fade-right" data-aos-duration="2000">

            <img class="rohit_logo" width="30%" src="{{asset('images/Rohit-designstyle-kiddo-m (1).png')}}"></img>
        </div>


        <div class="sidebaricon col-md-5 white">

            <i data-aos="fade-left" data-aos-duration="1000" class="fa-solid fa-bars" style="color: #B197FC; font-size:1.5rem"></i>
        </div>

        <div class="navbar">
            <ul class="d-flex list-unstyled gap-5 mb-0">
                <a href="{{url('/')}}" style="text-decoration:none;color: inherit">
                    <li class="inter link" style="font-size:20px">Home</li>
                </a>
                <a href="#" class="scroll-link"  data-target=".background3" style="text-decoration:none;color: inherit">
                    <li class="inter link" style="font-size:20px">Services</li>
                </a>
                <a href="#" class="scroll-link" data-target=".background4" style="text-decoration:none;color: inherit">
                    <li class="inter link" style="font-size:20px;">portfolio</li>
                </a>
                <a href="#" class="scroll-link" data-target=".background5" style="text-decoration:none;color: inherit">
                    <li class="inter link" style="font-size:20px">Contact</li>
                </a>
            </ul>

        </div>
    </div>
    <div id="sidebarid" class="sidebar position-fixed white">
        <div class="row mx-0 d-flex justify-content-between mt-3">
            <div class="col-3 white  inter bold ">
                PORTFOLIO

            </div>
            <div class="col-3">
                <i  id="cross"class="fa-solid fa-rectangle-xmark fa-shake" style="font-size:1.6rem;color:white"></i>
            </div>

        </div>
        <!-- //small sidbar -->
        <div class="px-3">
            <ul class="list-unstyled mt-3">
           
            <a href="{{url('/')}}" class="text-decoration-none text-body "><li class="white py-1 px-2 linksmall" >Home</li></a>
             <hr class="mb-2 mt-0 black">
             <a class="text-decoration-none text-body sidebar_icon" data-target=".background2"><li class="white py-1 px-2 linksmall" >About</li></a>
             <hr class="mb-2 mt-0 black">
             <a class="text-decoration-none text-body sidebar_icon"data-target=".background3"><li class="white py-1 px-2 linksmall">Services</li></a>
             <hr class="mb-2 mt-0 black">
             <a class="text-decoration-none text-body sidebar_icon"data-target=".background4"><li class="white py-1 px-2 linksmall">Portfolio</li></a>
             <hr class="mb-2 mt-0 black">
             <a class="text-decoration-none text-body sidebar_icon" data-target=".background5"><li class="white py-1 px-2 linksmall">Contact</li></a>
             <hr class="mt-0 black">




            </ul>

        </div>
    </div>