<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEMACO</title>

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="body">


    <!---header-->
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-9 logo_section">
                    <div class="center-desk">
                        <div class="logo">
                            <a href="https://lemaconet.com"><img src="assets/images/lemaconet F.png"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-3">

                    <nav>
                        <input type="checkbox" id="check">
                        <label for="check" class="checkbtn">
                            <i class="fa fa-bars"></i>
                        </label>
                        <!-- <lable class="logo">
                            <img src="images/lemaconet F.png">
                        </lable> -->
                        <ul>
                            <li><a href="https://lemaconet.com" class="active">Home</a></li>
                            <li><a href="/login">Login</a></li>
                            <li><a href="/register" class="reg_btn">Get Started</a></li>

                        </ul>
                    </nav>
                    <!-- <div class="menu-area topnav" id="myTopnav">
                        <nav class="main-menu">
                            <ul class="menu-area-main">
                                <div id="selectField">
                                    <a href="https://lemaconet.com">Home</a>
                                    
                                    <a href="/login">Login</a>
                                    <a href="/register"><button class="nav_btn">Get Started</button></a>

                                </div>
                            </ul>
                        </nav>
                    </div> -->
                </div>
            </div>
        </div>
    </div>