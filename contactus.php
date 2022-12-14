<?php
include('database.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Contact Us</title>
    <meta content="We always love getting in touch with our customers, so please feel free to drop us a line." name="description">
    <meta content="Koha Reach Us, Koha Contact, Koha Website Contact Us, Koha Contact Us" name="keywords">

    <!-- Favicons -->
    <link href="kohafavicon.jpeg" rel="shortcut icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
<!--    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ee27b093c2.js" crossorigin="anonymous"></script>
<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"-->
<!--          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/Home.css" rel="stylesheet">
<!--    <link rel="stylesheet" href="css/bootstrap.min.css"/>-->
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/owl.carousel.css"/>
    <link rel="stylesheet" href="css/magnific-popup.css"/>
    <link rel="stylesheet" href="css/animate.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

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
  @media (max-width: 767px) {
  .hide-after { display:none ; height: 0; padding: 0}   
        }
  @media (min-width: 767px) {
       .hide-before { display:none ; height: 0; padding: 0}       
        }
        /* Medium devices (landscape tablets, 768px and up) */
        @media only screen and (min-width: 768px) {
            .test1
            {
                position:relative;
                right:174px;
            }
            .test2
            {
                position:relative;
                right:105px;
            }
        }

        @media (max-width: 970px) {
            .sec-2 { margin-top: 220px; }
        }

        @media (min-width: 971px) {
            .sec-2 { margin-top: 100px; }
        }

        @media (max-width: 970px) {
            .mobile-nav { visibility: hidden }
        }

        @media (min-width: 971px) {
            .desktop-nav { visibility: hidden; width: 0; height: 0 }
        }

        .lets-pixelate2{
            background: black;

            float: left;
            border:0px;
            color:#fff;
            box-shadow: 0 0 1px #ccc;
            -webkit-transition-duration: 0.5s;
            -webkit-transition-timing-function: linear;
            box-shadow:0px 0 0 white  inset !important;
        }
        .lets-pixelate2:hover{
            box-shadow:170px 0 0 white inset !important;
            color:black !important;

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
            .test3
            {
                width:30%;
            }
        }


        .logo
        {
            width: 115px;
            background-color: #000000;
        }
        .about-col2 img{
            width: 400px;
            height: 100%;
            padding:10px;
        }
        .more {
            margin: 30px;
            padding: 10px;
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

        #preloder{
            background: #000 url("logo1.jpeg") no-repeat center center;
            background-size: 15%;
            height: 100vh;
            width: 100%;
            position: fixed;
            z-index: 100;
            top: 0;
            text-shadow:  0 0 0 50px rgb(234, 236, 233),
            0 0 0 100px #fff,
            0 0 0 150px #fff,
            0 0 0 200px #fff,
            0 0 0 250px #fff;
            animation :animate 5s linear infinite;
        }
        @keyframes animate {
            0%{
                filter: hue-rotate(0deg);
            }
            100%{
                filter: hue-rotate(360deg);
            }

        }
        .dropdown{
            background: #000;
            color: rgba(194, 191, 188, 0.973);
            border:none;
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
        p{
            font-size: 16px !important;
        }
        h1,h2,h3{
            font-size: 25px !important;
        }
		@media only screen and (min-width: 768px) and (max-width: 1000px) {
			#contacttestz
			{
				font-size: 3vw !important
			}
		}
		@media only screen and (min-width: 1001px) {
			#contacttestz
			{
				font-size: 2.5vw !important
			}
		}
        @media only screen and (min-width: 768px) {
			#contacttesty
			{
				font-size: 5vw !important
			}
			#bannertest {
			height: auto; 
			width: 100vw; 
			max-height:60vh;
			object-fit: cover;
           filter: brightness(70%);
			}
            .white-text-size{
                padding-top: 20px;
                font-size: 20px !important;
            }
			.overlay {
            z-index: 99;
            width: 70%;
            /* height: 100%; */
            /* margin-left: 15%; */
            /* vertical-align: middle; */
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        }
        

        .quotation_div {
            position: relative;
            display: table;
        }

        @media (min-width: 481px) and (max-width: 767px) {
			.overlay {
            z-index: 99;
            width: 100%;
            /* height: 100%; */
            /* margin-left: 15%; */
            /* vertical-align: middle; */
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
			#contacttesty
			{
				font-size: 7.4vw !important;
			}
			#contacttestz
			{
				font-size: 4.8vw !important;
			}
			#bannertest {
			height: auto; 
			width: 100vw; 
			object-fit: cover;
           filter: brightness(70%);
		   max-height: 60vh;
			}
            .test1
            {
                position:relative;
                right:30px;
            }
            .test2
            {
                position:relative;
                right:30px;
            }
        }
        @media (min-width: 20px) and (max-width: 480px) {
			.overlay {
            z-index: 99;
            width: 100%;
            /* height: 100%; */
            /* margin-left: 15%; */
            /* vertical-align: middle; */
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
			#contacttesty
			{
				font-size: 7.4vw !important;
			}
			#contacttestz
			{
				font-size: 4.8vw !important;
			}
			#bannertest {
			height: auto; 
			width: 100vw; 
			object-fit: cover;
           filter: brightness(70%);
		   max-height: 60vh;
			}
            .test1
            {
                position:relative;
                right:30px;
            }
            .test2
            {
                position:relative;
                right:30px;
            }
        }
         @font-face {
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
        body{
            font-family: "Georama", sans-serif !important;
            background-color: black;

        }
        p,a, h1, h2, h3, h4, h5, h6,button {
            font-family: 'Georama', serif !important;
            color: white !important;
        }
        p{
            font-size: 20px;
            padding-bottom: 50px;
        }
        .form-control{
            background-color: #1c1f23 !important;
            color: antiquewhite !important;
        }
        input{
            background-color: #1c1f23 !important;
            color: antiquewhite !important;
        }
        h1 {
            font-family: Georama, serif !important;
            font-size: 55px !important;
            color: #ddb253;
        }
        h2h2,h3,h4,h5,h6 {
            font-family: Georama, serif !important;
            font-size: 27px !important;
        }
        h2 {
            color: #cccccc !important;
        }
        p{
            font-size: 20px !important;
        }
    </style>
</head>

<body style="overflow-x:hidden;">
<?php include 'includes_website/main.php'?>
<script type="text/javascript">
    AOS.init();
</script>

<main id="main">

    <!-- ======= Contact Section ======= -->
    <div style="margin: 100px 0 -20px 0">
        <div style="background-color: black; color: white">
            <div class="container">
                <div style="display: flex; justify-content: left">
                    <p style="text-align:right; text-decoration: none; font-size: 20px !important;"><a style="text-decoration: none; color: #ddb253 !important;" href="index.php">Home&nbsp;</a></p>
                    <p style="color: white !important; font-size: 20px !important;"> / Contact Us</p>
                </div>
            </div>
        </div>
    </div>
<!--    <section class="breadcrumbs" style="background-color: black; color: white">-->
<!--        <div class="container">-->
<!---->
<!--            <div class="d-flex justify-content-between align-items-center">-->
<!--                <h2>Privacy Policy</h2> -->
<!--                <ol>-->
<!--                    <li><a href="index.php">Home</a></li>-->
<!--                    <li>Contact</li>-->
<!--                </ol>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--    </section>-->
	 <section style="padding-top: 0px">
        <div class='quotation_div'>
    <span class="img-container" style="text-align:center !important;display:block !important;position:relative !important;"> <!-- Inline parent element -->

      <img id="bannertest" src="assets/contactusbannerimage.jpg" data-aos="fade-up" data-aos-duration="30000" alt="">
        <div class='overlay'>
            <h1 data-aos="fade-up" data-aos-duration="30000" id="contacttesty" style="font-family: 'Roboto Serif' !important; text-align: center; color: #ddb253 !important;">LETS HAVE A TALK</h1>

            <h2 class="white-text-size" data-aos="fade-up" data-aos-duration="30000" id="contacttestz" style=" text-align: center;">We always love getting in touch with our customers, so please feel free to drop us a line. We respond to every message and every message is read and appreciated! We???re a small company so any support would mean the world to us! A ???like??? on Facebook, a ???pin??? on Pinterest or just sending our link to a friend would be super amazing! If there???s anything we can do in return, drop us an email!</h2>
        </div>
    </span>
        </div>
    </section>

    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
       <!-- <h3 style="text-align:center; font-size: 40px !important; padding-top: 20px">Get in Touch</h3>
        <div style="display: flex; justify-content: center">
            <p style="text-align: justify; width: 60% ; font-size: 20px !important; padding-top: 20px">We always love getting in touch with our customers, so please feel free to drop us a line. We respond to every message and every message is read and appreciated!<br/>
                We???re a small company so any support would mean the world to us! A ???like??? on Facebook, a ???pin??? on Pinterest or just sending our link to a friend would be super amazing! If there???s anything we can do in return, drop us an email!</p>
        </div>-->

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                  
                    <form action="reaction.php" method="POST" id="contact-form" class="php-email-form" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="testname" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="testemail" id="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="phoneno" id="subject" placeholder="Mobile" required>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="bestt" id="subject" placeholder="Time to contact" required>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subjectp" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="massage2" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="form-group mt-3">
                        <input type="hidden" name="hellotestcontact2" value="hellotestconnect2">
						</div>
						
						<div class="form-group mt-3">
                        <div class="text-center">
						<button onclick="form_submit()" class="submit-button" style="padding:10px 15px !important;font-family: 'Georama' !important;font-size:15px;background-color:grey !important;color:#ffffff !important;">
						Send Message 
						</button>
						<!--<input type="submit" value="Send Message" class="submit-button" style="font-family: 'Georama' !important;font-size:15px;background-color:grey !important;color:#ffffff !important;">--></div>
                    </div>
					</form>
                </div>
                <div class="col-lg-6">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-box" style="height:250px !important">
                                <div style="size: 50px 50px">
                                    <i style=" border: 0px ;color: #ddb253" class="fa-solid fa-location-dot"></i>
<!--                                    <img src="assets/img/socialmedia/maps.jpg" style="width: 90px; height: 120px" alt="">-->
                                </div>
<!--                                <i class="bx bx-map"></i>-->
                                <h3>Our Address</h3>
                                <p>703, 1st floor, 19th Main Rd, Siddanna Layout, Banashankari Stage II, Banashankari, Bengaluru, Karnataka - 560070</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box" style="height:250px !important">
                                <div style="size: 50px 50px">
                                     <i style="color:#ddb253;border-color:#000000;" class="fa-solid fa-envelope"></i>
                                </div>
<!--                                <i class="bx bx-envelope"></i>-->
                                <h3>Email Us</h3>
                                <p>info@thekoha.com<br>support@thekoha.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box" style="height:200px !important">
                                <div style="size: 50px 50px">
                                     <i style="color:#ddb253;border-color:#000000;" class="fa-solid fa-phone"></i>
                                </div>
<!--                                <i class="bx bx-phone-call"></i>-->
                                <h3>Call Us</h3>
                                <p>+91 9916299016<br>+91 7676869730</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box" style="height:200px !important">
                                <div style="size: 50px 50px">
                                    <i class="fa fa-youtube"   style=" color:#ddb253;border-color:#000000;"></i>
                                </div>
<!--                                <i class="fab fa-youtube" style="background-color: red; color: white; border-radius: 100%;border: 0; border: 0; text-align: center ; display: inline-block;"></i>-->
                                <!--                  <i class="bi bi-youtube" style="color:white;background-color:red; radius"></i>-->
                                <h3>Subscribe to our channel</h3>
                                <p>KOHA</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box" >
                                <div style="size: 50px 50px">
                                    <i class="fa fa-instagram"   style=" color:#ddb253;border-color:#000000"></i>
                                </div>
<!--                                <i class="fab fa-instagram" style="color: white;  border-radius: 100%;border: 0px; background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%); width: 48px; height: 48px"></i>-->
                                <h3>Follow us on Instagram</h3>
                                <p>KOHA.INS</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <div style="size: 50px 50px">
                                    <i class="fab fa-facebook-f"   style=" color:#ddb253;border-color:#000000;"></i>
                                </div>
                                <!--                 <i class="bi bi-facebook" style="color:white;background-color:blue;"></i>-->

<!--                                <i class="fab fa-facebook" style="background-color: blue; color: white; border-radius: 100%;border: 0px; text-align: center ; display: inline-block;"></i>-->
                                <h3>Like us on Facebook</h3>
                                <p>fb.com/KOHA</p>
                            </div>
                        </div>
                        <div class="col-6 mx-auto hide-after">
                            <div class="info-box" >
                                <div style="size: 50px 50px">
                                    <i class="fa fa-pinterest"   style=" color:#ddb253;border-color:#000000;"></i>
                                </div>
                                <!--                  <i class="bi bi-pinterest" style="color:white;background-color:red;"></i>-->
<!--                                <i class="fab fa-pinterest" style="background-color: red; color: white; border-radius: 100%;border: 0; border: 0; text-align: center ; display: inline-block;"></i>-->
                                <h3>Pin us on Pinterest</h3>
                                <p>pin.com/KOHA</p>
                            </div>
                        </div>
						 <div class="col-md-6 hide-before">
                            <div class="info-box" >
                                <div style="size: 50px 50px">
                                    <i class="fa fa-pinterest"   style=" color:#ddb253;border-color:#000000;"></i>
                                </div>
                                <!--                  <i class="bi bi-pinterest" style="color:white;background-color:red;"></i>-->
<!--                                <i class="fab fa-pinterest" style="background-color: red; color: white; border-radius: 100%;border: 0; border: 0; text-align: center ; display: inline-block;"></i>-->
                                <h3>Pin us on Pinterest</h3>
                                <p>pin.com/KOHA</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->
<script type="text/javascript">
  function form_submit() {
    document.getElementById("contact-form").submit();
   }    
  </script>
    <!-- ======= Map Section ======= -->
    <section class="map mt-2">
        <div class="container-fluid p-0" data-aos="fade-up" data-aos-duration="30000">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.706940453096!2d77.56345701378937!3d12.926547619365223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1586c5f4a013%3A0x824b459e406f2aa8!2s19th%20Main%20Rd%2C%20Siddanna%20Layout%2C%20Banashankari%20Stage%20II%2C%20Banashankari%2C%20Bengaluru%2C%20Karnataka%20560070!5e0!3m2!1sen!2sin!4v1657900928437!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section><!-- End Map Section -->

</main><!-- End #main -->
<br/>
<br/>
<br/>
<br/>
<!-- ======= Footer ======= -->
<?php include 'includes_website/footer.php'?>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<!--<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>-->
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>