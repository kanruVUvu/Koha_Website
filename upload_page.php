
<?php
include("php_script.php");
//include("includes/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Koha Website Image Upload Page</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="kohafavicon.jpeg" rel="shortcut icon"/>
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/home.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/owl.carousel.css"/>
    <link rel="stylesheet" href="css/magnific-popup.css"/>
    <!-- Bootstrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/animate.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/ee27b093c2.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style> @font-face {
  font-family: 'Georama';
  font-style: italic;
  font-weight: 100;
  font-stretch: 100%;
  src: url(https://fonts.gstatic.com/s/georama/v4/MCo_zAn438bIEyxFVaIC0ZMQ72G6xnvmodYVPOBB5nuzMdWs0rvF2zEHz_9Abg.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Georama';
  font-style: italic;
  font-weight: 100;
  font-stretch: 100%;
  src: url(https://fonts.gstatic.com/s/georama/v4/MCo_zAn438bIEyxFVaIC0ZMQ72G6xnvmodYVPOBB5nuzMdWs0rvF2zEGz_9Abg.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Georama';
  font-style: italic;
  font-weight: 100;
  font-stretch: 100%;
  src: url(https://fonts.gstatic.com/s/georama/v4/MCo_zAn438bIEyxFVaIC0ZMQ72G6xnvmodYVPOBB5nuzMdWs0rvF2zEIz_8.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
@font-face {
  font-family: 'Roboto Serif';
  font-style: normal;
  font-weight: 100;
  font-stretch: 100%;
  src: url(https://fonts.gstatic.com/s/robotoserif/v5/R71RjywflP6FLr3gZx7K8UyuXDs9zVwDmXCb8lxYgmuii32UGoVldX6UgfjL4-3sMM_kB_qXSEXTJQCFLH5-_bcEliosl698AM5f.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Roboto Serif';
  font-style: normal;
  font-weight: 100;
  font-stretch: 100%;
  src: url(https://fonts.gstatic.com/s/robotoserif/v5/R71RjywflP6FLr3gZx7K8UyuXDs9zVwDmXCb8lxYgmuii32UGoVldX6UgfjL4-3sMM_kB_qXSEXTJQCFLH5-_bcEliosl658AM5f.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Roboto Serif';
  font-style: normal;
  font-weight: 100;
  font-stretch: 100%;
  src: url(https://fonts.gstatic.com/s/robotoserif/v5/R71RjywflP6FLr3gZx7K8UyuXDs9zVwDmXCb8lxYgmuii32UGoVldX6UgfjL4-3sMM_kB_qXSEXTJQCFLH5-_bcEliosl6B8AA.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
        input::-webkit-file-upload-button {
            display: none;
        }

        .container-kc {
            position: absolute;
            top: 50%;
            left: 50%;
            -moz-transform: translateX(-50%) translateY(-50%);
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 60%;
        }

        .lets-pixelate {
            background-color: #000c0a;
            box-shadow: none;
            border: 2px solid #ddb253;
            border-radius: 10px;
        }

        .lets-pixelate a {
            color: white;
            text-decoration: none;
        }

        .lets-pixelate a > i {
            padding-top: 3px;
        }

        .lets-pixelate a > p {
            margin-bottom: 0px;
            padding-left: 8px;
        }

        .lets-pixelate:hover a > p {
            color: #fce9c0;
            transition: all .3s ease;
            -webkit-transition: all .3s ease;
        }

        .team h1 {
            text-align: center;
            margin-top: 25px;
            font-style: italic;
            font-size: 58px;
        }

        .flip-card {
            background-color: transparent;
            width: 300px;
            height: 300px;
            perspective: 1000px;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;

        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front,
        .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .flip-card-front {
            background-color: transparent;

        }

        .flip-card-back {
            background-color: transparent;

            transform: rotateY(180deg);
        }

        .active {
            color: #ddb253 !important;
        }

        .member-info {
            text-align: center;
        }

        /*--------------------------------------------------------------
    # Breadcrumbs
    --------------------------------------------------------------*/
        .breadcrumbs {
            padding: 15px 0;
            background-color: #f3f8fa;
            min-height: 40px;
        }

        .breadcrumbs h2 {
            font-size: 28px;
            font-weight: 300;
        }

        .breadcrumbs ol {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .breadcrumbs ol li + li {
            padding-left: 10px;
        }

        .breadcrumbs ol li + li::before {
            display: inline-block;
            padding-right: 10px;
            color: #6c757d;
            content: "/";
        }

        /* Design */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        html {
            background-color: #ecf9ff;
        }

        body {
            color: #272727;
            font-family: "Poppins", sans-serif !important;
            font-style: normal;
            font-weight: 400;
            letter-spacing: 0;
            padding: 1rem;
        }

        .main {
            max-width: 1200px;
            margin: 0 auto;
        }

        h1 {
            font-size: 24px;
            font-weight: 400;
            text-align: center;
        }

        img {
            height: auto;
            max-width: 100%;
            vertical-align: middle;
        }

        .btn {
            color: #ffffff;
            padding: 0.8rem;
            font-size: 14px;
            text-transform: uppercase;
            border-radius: 4px;
            font-weight: 400;
            display: block;
            width: 100%;
            cursor: pointer;
            font-family: "Poppins", sans-serif;
            border: 1px solid rgba(255, 255, 255, 0.2);
            background: transparent;
        }

        .btn:hover {
            background-color: rgba(255, 255, 255, 0.12);
        }

        .cards {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .cards_item {
            display: flex;
            padding: 1rem;
        }

        @media (min-width: 40rem) {
            .cards_item {
                width: 50%;
            }
        }
        @media (min-width: 60rem) {
            .cards_item {
                width: 100px;
            }
        }


        @media (min-width: 56rem) {
            .cards_item {
                width: 190px;
            }
        }

        .card {
            background-color: white;
            border-radius: 0.25rem;
            box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .card_content {
            padding: 1rem;
            background: linear-gradient(to bottom left, #EF8D9C 40%, #FFC39E 100%);
        }

        .card_title {
            color: #ffffff;
            font-size: 1.1rem;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: capitalize;
            margin: 0px;
        }

        .card_text {
            color: #ffffff;
            font-size: 0.875rem;
            line-height: 1.5;
            margin-bottom: 1.25rem;
            font-weight: 400;
        }

        .made_by {
            font-weight: 400;
            font-size: 13px;
            margin-top: 35px;
            text-align: center;
        }

        @media (max-width: 768px) {
            .breadcrumbs .d-flex {
                display: block !important;
            }

            .breadcrumbs ol {
                display: block;
            }

            .breadcrumbs ol li {
                display: inline-block;
            }

            .test1 {
                position: relative;
                right: 489px;
            }

            .test2 {
                position: relative;
                right: 409px;
            }

            .test3 {
                width: 30%;
            }
        }


        .logo {
            width: 115px;
            background-color: #000000;
        }

        .about-col2 img {
            width: 400px;
            height: 100%;
            padding: 10px;
        }

        .more {
            margin: 30px;
            padding: 10px;
        }

        .btn {
            font-size: 16px;
            font-weight: 900;
            background-color: #ddb253;
        }

        .btn1 {
            padding: 10px;
            border-radius: 20px;
            background: black;
            color: white;
            cursor: pointer;
        }

        .more2 {
            margin: 30px;
            padding: 10px;
        }

        .btn2 {
            padding: 10px;
            border-radius: 20px;
            background: black;
            color: white;
            cursor: pointer;
        }

        /*  preloader*/

        #preloder {
            #background: #000 url("logo1.jpeg") no-repeat center center;
            background-size: 15%;
            height: 100vh;
            width: 100%;
            position: fixed;
            z-index: 100;
            top: 0;
            text-shadow: 0 0 0 50px rgb(234, 236, 233),
            0 0 0 100px #fff,
            0 0 0 150px #fff,
            0 0 0 200px #fff,
            0 0 0 250px #fff;
            animation: animate 5s linear infinite;
        }

        @keyframes animate {
            0% {
                filter: hue-rotate(0deg);
            }

            100% {
                filter: hue-rotate(360deg);
            }

        }

        .dropdown {
            background: #000;
            color: rgba(194, 191, 188, 0.973);
            border: none;
        }

        .footer-newsletter {
            padding: 50px 0;
            background: #000000;
        }

        .footer-newsletter h4 {
            font-size: 24px;
            margin: 0 0 20px 0;
            padding: 0;
            line-height: 1;
            font-weight: 600;
            color: #a2cce3;
        }

        .footer-newsletter form {
            margin-top: 30px;
            background: #fff;
            padding: 6px 10px;
            position: relative;
            border-radius: 50px;
        }

        .footer-newsletter form input[type=email] {
            border: 0;
            padding: 4px;
            width: calc(100% - 100px);
        }

        .footer-newsletter form input[type=submit] {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            border: 0;
            background: none;
            font-size: 16px;
            padding: 0 20px;
            margin: 3px;
            background: #68A4C4;
            color: #fff;
            transition: 0.3s;
            border-radius: 50px;
        }

        .footer-newsletter form input[type=submit]:hover {
            background: #468db3;
        }

        @media (min-width: 481px) and (max-width: 767px) {
            .test1 {
                position: relative;
                right: 30px;
            }

            .test2 {
                position: relative;
                right: 30px;
            }
        }

        @media (min-width: 320px) and (max-width: 480px) {
            .test1 {
                position: relative;
                right: 30px;
            }

            .test2 {
                position: relative;
                right: 30px;
            }
        }
        body{
            font-family: "Georama", sans-serif !important;
            background-color: black;
        }
        p,a, h1, h2, h3, h4, h5, h6,button {
            font-family: 'Georama' !important;
        }
        .accordion-body{
            background-color: #212529;
        }

        .accordion-button:not(.collapsed) {
            background-color: #191c1f;
            color: white;
            height: 50px;
            font-size: 20px;

        }
        .accordion-button{
            background-color: #191c1f;
            color: white;
            height: 50px;
            font-size: 20px;
        }
    </style>
</head>

<body style="overflow-x:hidden; background-color: black !important; font-family: 'Georama' ;color: #ddb253; width: 100%">
<?php include 'includes_website/main.php' ?>

<script type="text/javascript">
    AOS.init();
</script>

<div style="margin: 100px 0 20px 0">
    <div style="background-color: black; color: white">
        <div class="container">
            <div style="display: flex; justify-content: left" data-aos="fade-up" data-aos-duration="30000">
                <h2 style="text-align:right; font-size: 16px !important;"><a style="color: #ddb253" href="index.php">Home</a></h2>
                <h2 style="color: white !important; font-size: 16px !important;"> / Upload Image</h2>
                <!--<ol>
                  <li><a href="index.html">Home</a></li>
                  <li>Customer Registration</li>
                </ol>-->
            </div>

        </div>
    </div>
</div>



<div class="row">
    <div class=" col-lg-5 col-md-5 col-sm-5 col-xs-5" style="background-color: black">
        <div class="faq text-center" style="margin-top: 50px; display: flex; justify-content: center; justify-items: center" >
            <h1 style="margin-bottom: 50px"></h1>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header " id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne"  aria-expanded="true" aria-controls="collapseOne">
                            <i class="fa fa-question-circle" aria-hidden="true"></i> &nbsp
                            Koha Gallery
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="overflow-y: scroll; max-height: 65vh">
                            <div class="main">
                                <ul class="cards">
                                    <li class="cards_item">
                                        <div class="card">
                                            <div class="card_image" style="display: flex; height: 100%"><img src="http://www.thekoha.com/admin_area/original_images/black background.PNG">
                                            </div>
                                            <div class="card_content">
                                                <h2 class="card_title">Black Dog </h2>
                                                <p class="card_text"> $1000</p>
                                                <button class="btn card_btn" style="font-size: 0.7em" onclick="location.href='http://www.thekoha.com/black-dog';" >View Details</button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="cards_item">
                                        <div class="card">
                                            <div class="card_image" style="display: flex; height: 100%"><img src="http://www.thekoha.com/admin_area/original_images/buddha-3.jpg">
                                            </div>
                                            <div class="card_content">
                                                <h2 class="card_title">Buddha</h2>
                                                <p class="card_text"> $1000</p>
                                                <button class="btn card_btn" style="font-size: 0.7em" onclick="location.href='http://www.thekoha.com/buddha';">View Details</button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="cards_item">
                                        <div class="card">
                                            <div class="card_image" style="display: flex; height: 100%"><img src="http://www.thekoha.com/admin_area/original_images/dog1.PNG">
                                            </div>
                                            <div class="card_content">
                                                <h2 class="card_title">White Dog </h2>
                                                <p class="card_text"> $500</p>
                                                <button class="btn card_btn" style="font-size: 0.7em" onclick="location.href='http://www.thekoha.com/white-dog';">View Details</button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="cards_item">
                                        <div class="card">
                                            <div class="card_image" style="display: flex; height: 100%"><img src="http://www.thekoha.com/admin_area/original_images/koi-2.jpg">
                                            </div>
                                            <div class="card_content">
                                                <h2 class="card_title">Fish </h2>
                                                <p class="card_text"> $500</p>
                                                <button class="btn card_btn" style="font-size: 0.7em" onclick="location.href='http://www.thekoha.com/fish-image';">View Details</button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="cards_item">
                                        <div class="card">
                                            <div class="card_image" style="display: flex; height: 100%"><img src="http://www.thekoha.com/admin_area/original_images/shiva-4.jpg">
                                            </div>
                                            <div class="card_content">
                                                <h2 class="card_title">Shiva Statue </h2>
                                                <p class="card_text"> $400</p>
                                                <button class="btn card_btn" style="font-size: 0.7em" onclick="location.href='http://www.thekoha.com/shiva-statue';">View Details</button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="cards_item">
                                        <div class="card">
                                            <div class="card_image" style="display: flex; height: 100%"><img src="http://www.thekoha.com/admin_area/original_images/Ironman.png">
                                            </div>
                                            <div class="card_content">
                                                <h2 class="card_title">Ironman </h2>
                                                <p class="card_text"> $300</p>
                                                <button class="btn card_btn" style="font-size: 0.7em" onclick="location.href='http://www.thekoha.com/iron-man';">View Details</button>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="cards_item">
                                        <div class="card">
                                            <div class="card_image" style="display: flex; height: 100%"><img src="http://www.thekoha.com/admin_area/original_images/Joker.png">
                                            </div>
                                            <div class="card_content">
                                                <h2 class="card_title">Joker </h2>
                                                <p class="card_text"> $1000</p>
                                                <button class="btn card_btn" style="font-size: 0.7em" onclick="location.href='http://www.thekoha.com/joker-image';">View Details</button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="cards_item">
                                        <div class="card">
                                            <div class="card_image" style="display: flex; height: 100%"><img src="http://www.thekoha.com/admin_area/original_images/shutterstock_1445018480.png">
                                            </div>
                                            <div class="card_content">
                                                <h2 class="card_title">Eye </h2>
                                                <p class="card_text"> $500</p>
                                                <button class="btn card_btn" style="font-size: 0.7em" onclick="location.href='http://www.thekoha.com/eye-image';">View Details</button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="cards_item">
                                        <div class="card">
                                            <div class="card_image" style="display: flex; height: 100%"><img src="http://www.thekoha.com/admin_area/original_images/lionactual.jpg">
                                            </div>
                                            <div class="card_content">
                                                <h2 class="card_title">Lion </h2>
                                                <p class="card_text"> $1000</p>
                                                <button class="btn card_btn" style="font-size: 0.7em" onclick="location.href='http://www.thekoha.com/lion-image';">View Details</button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="cards_item">
                                        <div class="card">
                                            <div class="card_image" style="display: flex; height: 100%"><img src="http://www.thekoha.com/admin_area/original_images/shutterstock_1807877740.png">
                                            </div>
                                            <div class="card_content">
                                                <h2 class="card_title">Animated Lion </h2>
                                                <p class="card_text"> $1000</p>
                                                <button class="btn card_btn" style="font-size: 0.7em" onclick="location.href='http://www.thekoha.com/animated-lion';">View Details</button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <button class="btn mt-3 center" onclick="location.href = 'http://www.thekoha.com/shop.php';"> View All Products &nbsp;&nbsp;&nbsp;<i
                                    class="fas fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class=" col-lg-7 col-md-7 col-sm-7 col-xs-7"  style="background-color: black">
        <form class="center" action="#" method="post">
            <div style="background-color: #2c3034;">
                <img class="center" style="width: 200px; padding-top: 70px; padding-bottom: 70px" id="myimage" >
                <div class="col center" style=" display:flex; justify-content:center ">
                    <input style=" text-align: center; color:transparent ; ;width: 600px; height: 200px; border: #808080;border-style: dotted; border-width: 2px; margin: 20px;  background-image:url(/static/assets/drag.png) ; background-size: contain "
                           type="file" onchange="onFileSelected(event)" name="imagefile" id="imagefile">
                </div>
            </div>
            <div class="row">

                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 ">
                        <button class="btn mt-3 center" style="width: 120px" type="submit"> NEXT &nbsp;&nbsp;&nbsp;<i
                                class="fas fa-angle-right"></i></button>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ">
                        <a href="http://www.thekoha.com/shop.php"
                           style="width: 120px ; margin-top: 10px ; color: #0a0c17" class="btn btn-primary center">Browse&nbsp;&nbsp;<i
                                class="fas fa-search"></i>&nbsp;</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<script>
    function onFileSelected(event) {
        var selectedFile = event.target.files[0];
        var reader = new FileReader();

        var imgtag = document.getElementById("myimage");
        imgtag.title = selectedFile.name;

        reader.onload = function (event) {
            imgtag.src = event.target.result;
        };

        reader.readAsDataURL(selectedFile);
    }
</script>
</body>
</html>