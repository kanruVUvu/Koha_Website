<?php
include('database.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>KOHA | Privacy Policy</title>
    <meta content="This Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your information when You use the Service and tells You about Your privacy rights and how the law protects You." name="description">
    <meta content="Koha Privacy, Koha Privacy Content, Koha Privacy Policy, Koha Privacy Policy Page" name="keywords">

    <!-- Favicons -->
    <link href="kohafavicon.jpeg" rel="shortcut icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
            rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
<!--    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ee27b093c2.js" crossorigin="anonymous"></script>
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
        p{
            font-family: Georama !important;
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

  
        /* Medium devices (landscape tablets, 768px and up) */
        @media only screen and (min-width: 768px) {
			h1
			{
			 font-size: 45px !important;
			}
			h4
			{
			font-size:40px !important;
			}
			h2
			{
			font-size:40px !important;
			}
			p
			{
			text-align:justify !important;
			}
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

        .lets-pixelate a>i {
            padding-top: 3px;
        }

        .lets-pixelate a>p {
            margin-bottom: 0px;
            padding-left: 8px;
        }

        .lets-pixelate:hover a>p {
            color: #fce9c0;
            transition: all .3s ease;
            -webkit-transition: all .3s ease;
        }
        .hero {
            background-position: bottom;
            height: auto;
            text-align: center;
            margin-bottom: 40px;
        }

        .page-title {
            color: #fce138;
            /*border-bottom: 4px solid #fce138;*/ 
padding-top: 20px;			
            display: inline-block;
            font-weight: normal;
            font-size: 42px;
            font-style: italic;
        }

        .secondary-content {
            width: 80%;
            margin: 0 auto;
            color: #024e76;
        }

        .secondary-content h3 {
            font-size: 25px;
            margin: 20px 0;
        }
        .secondary-content h4 {
            font-size: 18px;
            margin: 20px 0;
        }

        .secondary-content p {
            font-size: 16px;
            line-height: 1.5;
            margin: 20px 0;
            color:white;
        }

        .secondary-content ul {
            margin: 15px 20px;
        }

        .secondary-content li {
            color: white;
            margin: 10px 0;
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
        a, h1, h2, h3, h4, h5, h6 {
            color: #ddb253;
            align-self: center;
            text-align: center;
            font-family: 'Georama' !important;
        }
        p{
            align-self: center;
            text-align: center;
            font-family: 'Georama';
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
        .h2{
            font-family: 'Georama' !important;
        }
        p {
            font-size: 25px !important;
            text-align: justify !important;
        }
         h3 {
            font-size: 40px !important;
        }
        @media (min-width: 481px) and (max-width: 767px) {
			h1
			{
			 font-size: 34px !important;
			}
			h2
			{
			font-size:31px !important;
			}
			h4
			{
			font-size:33px !important;
			}
			p
			{
			text-align:left !important;
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
        @media (min-width: 320px) and (max-width: 480px) {
			h1
			{
			 font-size: 34px !important;
			}
			h2
			{
			font-size:31px !important;
			}
			h4
			{
			font-size:33px !important;
			}
			p
			{
			text-align:left !important;
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

        .secondary-content p{
            font-family: 'Georama' !important;
        }
        .secondary-content h3,h4{
            font-family: 'Georama' !important;
        }
        @media (max-width: 970px) {
            .mobile-nav { visibility: hidden }
        }

        @media (min-width: 971px) {
            .desktop-nav { visibility: hidden; width: 0; height: 0 }
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
        p{
            font-family: "Georama", sans-serif !important;
        }

        h1 {
            font-family: Georama, serif !important;
           
            color: #ddb253;
        }
       
        h2 {
            color: #cccccc !important;
        }
        h3,h5,h6 {
            font-family: Georama, serif !important;
            font-size: 30px !important;
        }
        h2 {
            color: #cccccc !important;
        }

        h2 {
            color: #cccccc !important;
        }
        h3,h5,h6 {
            font-family: Georama, serif !important;
            font-size: 40px !important;
        }
        h2 {
            color: #cccccc !important;
        }
        p {
            font-size: 25px !important;
            
        }
    </style>
</head>

<body style="overflow-x:hidden; background-color: black; color: white !important; ; font-family: 'Georama' !important;">

<!-- ======= Header ======= -->
<?php include 'includes_website/main.php'?>
<script type="text/javascript">
    AOS.init();
</script>

<div style="margin: 100px 0 20px 0">
    <div style="background-color: black; color: white">
        <div class="container">
            <div style="display: flex; justify-content: left">
                <p style="text-align:right; text-decoration: none; font-size: 20px !important;"><a style="text-decoration: none; color: #ddb253 !important;" href="index.php">Home&nbsp;</a></p>
                <p style="color: white !important; font-size: 20px !important;"> / Privacy Policy</p>
            </div>
        </div>
    </div>
</div>
<main id="main" style="margin-top:0px !important;">

    <!-- ======= Our Team Section ======= -->
    <!--    <section class="breadcrumbs" style="background-color: black; color: white">-->
    <!--        <div class="container">-->
    <!---->
    <!--            <div class="d-flex justify-content-between align-items-center">-->
    <!--  <h2>Privacy Policy</h2> -->
    <!--                <ol>-->
    <!--                    <li  style="font-size: 20px"><a href="index.php">Home</a></li>-->
    <!--                    <li  style="font-size: 20px">Privacy Policy</li>-->
    <!--                </ol>-->
    <!--            </div>-->
    <!---->
    <!--        </div>-->
    <!--    </section>-->
    <!-- End Our Team Section -->
    <!-- End Team Section -->
    <section class="hero hero-secondary" data-aos="fade-up" style="font-family: 'Georama';padding-top: 10px">
        <h1 class="page-title" style="font-family: 'Georama';border-bottom:none !important;text-align: center !important;">Privacy Policy</h1>
    </section>
    <article class="secondary-content"  style="font-family: 'Georama' !important;" data-aos="fade-up">
        <p>Last updated: January 05, 2022</p>

        <p>This Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your information when You use the Service and tells You about Your privacy rights and how the law protects You.</p>

        <p>
            We use Your Personal data to provide and improve the Service. By using the Service, You agree to the collection and use of information in accordance with this Privacy Policy. This Privacy Policy has been created with the help of the Privacy Policy Template.
        </p>

        <h4>Interpretation and Definitions</h4>
        <h2>Interpretation</h2>
        <p>
            The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.
        </p>
        <h2>Definitions</h2>
        <p>
            For the purposes of this Privacy Policy:
        </p>

        <ul style="font-size: 20px">
            <li  style="font-size: 20px"><b>Account</b> means a unique account created for You to access our Service or parts of our Service.</li>
            <li  style="font-size: 20px">
                <b>Company</b> (referred to as either "the Company", "We", "Us" or "Our" in this Agreement) refers to Koha Gifts PVT LTD, no 1094, 42nd Cross, Kumaraswamy Layout, Bangalore.
            </li>
            <li  style="font-size: 20px">
                <b>Cookies</b> are small files that are placed on Your computer, mobile device or any other device by a website, containing the details of Your browsing history on that website among its many uses.
            </li>
            <li  style="font-size: 20px">
                <b>Country</b> refers to: Karnataka, India
            </li>
            <li  style="font-size: 20px">
                <b>Device</b> means any device that can access the Service such as a computer, a cellphone or a digital tablet.
            </li>
            <li  style="font-size: 20px">
                <b>Personal Data</b> is any information that relates to an identified or identifiable individual.
            </li>
            <li  style="font-size: 20px">
                <b>Service</b> refers to the Website.
            </li>
            <li  style="font-size: 20px">
                <b>Service Provider</b> means any natural or legal person who processes the data on behalf of the Company. It refers to third-party companies or individuals employed by the Company to facilitate the Service, to provide the Service on behalf of the Company, to perform services related to the Service or to assist the Company in analyzing how the Service is used.
            </li>
            <li  style="font-size: 20px">
                <b>Third-party Social Media Service</b> refers to any website or any social network website through which a User can log in or create an account to use the Service.
            </li>
            <li  style="font-size: 20px">
                <b>Usage Data</b> refers to data collected automatically, either generated by the use of the Service or from the Service infrastructure itself (for example, the duration of a page visit).</li>
            <li  style="font-size: 20px">
                <b>Website</b> refers to Koha, accessible from www.thekoha.com
            </li>
            <li  style="font-size: 20px">
                <b>You</b> means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.
            </li>
        </ul>

        <h4>Collecting and Using Your Personal Data</h4>
        <h2>Types of Data Collected</h2>
        <h2>Personal Data</h2>

        <p>
            While using Our Service, We may ask You to provide Us with certain personally identifiable information that can be used to contact or identify You. Personally identifiable information may include, but is not limited to:
        </p>

        <p>
            Other Users. Each Site user is solely responsible for any and all of its
            own User Content. Because we do not control User Content, you
            acknowledge and agree that we are not responsible for any User Content,
            whether provided by you or by others. You agree that Company will not be
            responsible for any loss or damage incurred as the result of any such
            interactions. If there is a dispute between you and any Site user, we
            are under no obligation to become involved.
        </p>
        <ul  style="font-size: 20px">
            <li  style="font-size: 20px">
                Email address
            </li>
            <li  style="font-size: 20px">
                First name and last name
            </li>
            <li  style="font-size: 20px">
                Phone number
            </li>
            <li  style="font-size: 20px">
                Address, State, Province, ZIP/Postal code, City
            </li>
            <li  style="font-size: 20px">
                Usage Data
            </li>
        </ul>
        <h2>Usage Data</h2>
        <p>
            Usage Data is collected automatically when using the Service.
        </p>

        <p>
            Usage Data may include information such as Your Device's Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that You visit, the time and date of Your visit, the time spent on those pages, unique device identifiers and other diagnostic data.
        </p>
        <p>
            When You access the Service by or through a mobile device, We may collect certain information automatically, including, but not limited to, the type of mobile device You use, Your mobile device unique ID, the IP address of Your mobile device, Your mobile operating system, the type of mobile Internet browser You use, unique device identifiers and other diagnostic data.
        </p>
        <p>
            We may also collect information that Your browser sends whenever You visit our Service or when You access the Service by or through a mobile device.
        </p>
        <h2>Information from Third-Party Social Media Services</h2>

        <p>
            The Company allows You to create an account and log in to use the Service through the following Third-party Social Media Services:
        </p>
        <ul  style="font-size: 20px">
            <li  style="font-size: 20px">
                Google
            </li>
            <li  style="font-size: 20px">
                Facebook
            </li>
            <li  style="font-size: 20px">
                Twitter
            </li>
        </ul>
        <p>
            If You decide to register through or otherwise grant us access to a Third-Party Social Media Service, We may collect Personal data that is already associated with Your Third-Party Social Media Service's account, such as Your name, Your email address, Your activities or Your contact list associated with that account.
        </p>
        <p>
            You may also have the option of sharing additional information with the Company through Your Third-Party Social Media Service's account. If You choose to provide such information and Personal Data, during registration or otherwise, You are giving the Company permission to use, share, and store it in a manner consistent with this Privacy Policy.
        </p>
        <h2>Tracking Technologies and Cookies</h2>

        <p>
            We use Cookies and similar tracking technologies to track the activity on Our Service and store certain information. Tracking technologies used are beacons, tags, and scripts to collect and track information and to improve and analyze Our Service. The technologies We use may include:
        </p>
        <ul  style="font-size: 20px">
            <li  style="font-size: 20px">
                <b>Cookies or Browser Cookies.</b> A cookie is a small file placed on Your Device. You can instruct Your browser to refuse all Cookies or to indicate when a Cookie is being sent. However, if You do not accept Cookies, You may not be able to use some parts of our Service. Unless you have adjusted Your browser setting so that it will refuse Cookies, our Service may use Cookies.
            </li>
            <li  style="font-size: 20px">
                <b>Flash Cookies.</b> Certain features of our Service may use local stored objects (or Flash Cookies) to collect and store information about Your preferences or Your activity on our Service. Flash Cookies are not managed by the same browser settings as those used for Browser Cookies. For more information on how You can delete Flash Cookies, please read "Where can I change the settings for disabling, or deleting local shared objects?" available at https://helpx.adobe.com/flash-player/kb/disable-local-shared-objects-flash.html#main_Where_can_I_change
                <br/>_the_settings_for_disabling<br/>__or_deleting_local_shared_objects_
            </li>
            <li  style="font-size: 20px">
                <b>Web Beacons.</b> Certain sections of our Service and our emails may contain small electronic files known as web beacons (also referred to as clear gifs, pixel tags, and single-pixel gifs) that permit the Company, for example, to count users who have visited those pages or opened an email and for other related website statistics (for example, recording the popularity of a certain section and verifying system and server integrity).
            </li>
        </ul>
        <p>
            Cookies can be "Persistent" or "Session" Cookies. Persistent Cookies remain on Your personal computer or mobile device when You go offline, while Session Cookies are deleted as soon as You close Your web browser. Learn more about cookies: Use of Cookies by Free Privacy Policy.
        </p>

        <p>
            We use both Session and Persistent Cookies for the purposes set out below:
        </p>
        <ul  style="font-size: 20px">
            <li  style="font-size: 20px">
                <p><b>Necessary / Essential Cookies</b></p>
                <p>Type: Session Cookies</p>
                <p>Administered by: Us</p>
                <p>Purpose: These Cookies are essential to provide You with services available through the Website and to enable You to use some of its features. They help to authenticate users and prevent fraudulent use of user accounts. Without these Cookies, the services that You have asked for cannot be provided, and We only use these Cookies to provide You with those services.</p>
            </li>
            <li  style="font-size: 20px">
                <p><b>Cookies Policy / Notice Acceptance Cookies</b></p>
                <p>Type: Persistent Cookies</p>
                <p>Administered by: Us</p>
                <p>Purpose: These Cookies identify if users have accepted the use of cookies on the Website.</p>
            </li>
            <li  style="font-size: 20px">
                <p><b>Functionality Cookies</b></p>
                <p>Type: Persistent Cookies</p>
                <p>Administered by: Us</p>
                <p>Purpose: These Cookies allow us to remember choices You make when You use the Website, such as remembering your login details or language preference. The purpose of these Cookies is to provide You with a more personal experience and to avoid You having to re-enter your preferences every time You use the Website.</p>
            </li>
        </ul>
        <p>For more information about the cookies we use and your choices regarding cookies, please visit our Cookies Policy or the Cookies section of our Privacy Policy.</p>
        <h2>Use of Your Personal Data</h2>
        <p>The Company may use Personal Data for the following purposes:</p>
        <ul  style="font-size: 20px">
            <li  style="font-size: 20px">
                <p><b>To provide and maintain our Service</b>, including to monitor the usage of our Service.</p>
            </li>
            <li  style="font-size: 20px">
                <p><b>To manage Your Account:</b> to manage Your registration as a user of the Service. The Personal Data You provide can give You access to different functionalities of the Service that are available to You as a registered user.</p>
            </li>
            <li  style="font-size: 20px">
                <p><b>For the performance of a contract:</b> the development, compliance and undertaking of the purchase contract for the products, items or services You have purchased or of any other contract with Us through the Service.</p>
            </li>
            <li  style="font-size: 20px">
                <p><b>To contact You:</b> To contact You by email, telephone calls, SMS, or other equivalent forms of electronic communication, such as a mobile application's push notifications regarding updates or informative communications related to the functionalities, products or contracted services, including the security updates, when necessary or reasonable for their implementation.</p>
            </li>
            <li  style="font-size: 20px">
                <p><b>To provide You</b> with news, special offers and general information about other goods, services and events which we offer that are similar to those that you have already purchased or enquired about unless You have opted not to receive such information.</p>
            </li>
            <li  style="font-size: 20px">
                <p><b>To manage Your requests:</b> To attend and manage Your requests to Us.</p>
            </li>
            <li  style="font-size: 20px">
                <p><b>For business transfers:</b> We may use Your information to evaluate or conduct a merger, divestiture, restructuring, reorganization, dissolution, or other sale or transfer of some or all of Our assets, whether as a going concern or as part of bankruptcy, liquidation, or similar proceeding, in which Personal Data held by Us about our Service users is among the assets transferred.</p>
            </li>
            <li  style="font-size: 20px">
                <p><b>For other purposes</b>: We may use Your information for other purposes, such as data analysis, identifying usage trends, determining the effectiveness of our promotional campaigns and to evaluate and improve our Service, products, services, marketing and your experience.</p>
            </li>
        </ul>
        <p>We may share Your personal information in the following situations:</p>
        <ul  style="font-size: 20px">
            <li  style="font-size: 20px"><b>With Service Providers:</b> We may share Your personal information with Service Providers to monitor and analyze the use of our Service, to contact You.</li>
            <li  style="font-size: 20px"><b>For business transfers:</b> We may share or transfer Your personal information in connection with, or during negotiations of, any merger, sale of Company assets, financing, or acquisition of all or a portion of Our business to another company.</li>
            <li  style="font-size: 20px"><b>With Affiliates:</b> We may share Your information with Our affiliates, in which case we will require those affiliates to honor this Privacy Policy. Affiliates include Our parent company and any other subsidiaries, joint venture partners or other companies that We control or that are under common control with Us.</li>
            <li  style="font-size: 20px"><b>With business partners:</b> We may share Your information with Our business partners to offer You certain products, services or promotions.</li>
            <li  style="font-size: 20px"><b>With other users:</b> when You share personal information or otherwise interact in the public areas with other users, such information may be viewed by all users and may be publicly distributed outside. If You interact with other users or register through a Third-Party Social Media Service, Your contacts on the Third-Party Social Media Service may see Your name, profile, pictures and description of Your activity. Similarly, other users will be able to view descriptions of Your activity, communicate with You and view Your profile.</li>
            <li  style="font-size: 20px"><b>With Your consent</b>: We may disclose Your personal information for any other purpose with Your consent.</li>
        </ul>
        <h2>Retention of Your Personal Data</h2>
        <p>The Company will retain Your Personal Data only for as long as is necessary for the purposes set out in this Privacy Policy. We will retain and use Your Personal Data to the extent necessary to comply with our legal obligations (for example, if we are required to retain your data to comply with applicable laws), resolve disputes, and enforce our legal agreements and policies.</p>
        <p>The Company will also retain Usage Data for internal analysis purposes. Usage Data is generally retained for a shorter period of time, except when this data is used to strengthen the security or to improve the functionality of Our Service, or We are legally obligated to retain this data for longer time periods.</p>
        <h2>Transfer of Your Personal Data</h2>
        <p>Your information, including Personal Data, is processed at the Company's operating offices and in any other places where the parties involved in the processing are located. It means that this information may be transferred to — and maintained on — computers located outside of Your state, province, country or other governmental jurisdiction where the data protection laws may differ than those from Your jurisdiction.</p>
        <p>Your consent to this Privacy Policy followed by Your submission of such information represents Your agreement to that transfer.</p>
        <p>The Company will take all steps reasonably necessary to ensure that Your data is treated securely and in accordance with this Privacy Policy and no transfer of Your Personal Data will take place to an organization or a country unless there are adequate controls in place including the security of Your data and other personal information.</p>
        <h4>Disclosure of Your Personal Data</h4>
        <h2>Business Transactions</h2>
        <p>If the Company is involved in a merger, acquisition or asset sale, Your Personal Data may be transferred. We will provide notice before Your Personal Data is transferred and becomes subject to a different Privacy Policy.</p>
        <h2>Law enforcement</h2>
        <p>Under certain circumstances, the Company may be required to disclose Your Personal Data if required to do so by law or in response to valid requests by public authorities (e.g. a court or a government agency).</p>
        <h2>Other legal requirements</h2>
        <p>The Company may disclose Your Personal Data in the good faith belief that such action is necessary to:</p>
        <ul  style="font-size: 20px">
            <li  style="font-size: 20px">Comply with a legal obligation</li>
            <li  style="font-size: 20px">Protect and defend the rights or property of the Company</li>
            <li  style="font-size: 20px">Prevent or investigate possible wrongdoing in connection with the Service</li>
            <li  style="font-size: 20px">Protect the personal safety of Users of the Service or the public</li>
            <li  style="font-size: 20px">Protect against legal liability</li>
        </ul>
        <h2>Security of Your Personal Data</h2>
        <p>The security of Your Personal Data is important to Us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While We strive to use commercially acceptable means to protect Your Personal Data, We cannot guarantee its absolute security.</p>
        <h2>Children's Privacy</h2>
        <p>Our Service does not address anyone under the age of 13. We do not knowingly collect personally identifiable information from anyone under the age of 13. If You are a parent or guardian and You are aware that Your child has provided Us with Personal Data, please contact Us. If We become aware that We have collected Personal Data from anyone under the age of 13 without verification of parental consent, We take steps to remove that information from Our servers.</p>
        <p>If We need to rely on consent as a legal basis for processing Your information and Your country requires consent from a parent, We may require Your parent's consent before We collect and use that information.</p>
        <h2>Links to Other Websites</h2>
        <p>Our Service may contain links to other websites that are not operated by Us. If You click on a third party link, You will be directed to that third party's site. We strongly advise You to review the Privacy Policy of every site You visit.</p>
        <p>We have no control over and assume no responsibility for the content, privacy policies or practices of any third party sites or services.</p>
        <h2>Changes to this Privacy Policy</h2>
        <p>We may update Our Privacy Policy from time to time. We will notify You of any changes by posting the new Privacy Policy on this page.</p>
        <p>We will let You know via email and/or a prominent notice on Our Service, prior to the change becoming effective and update the &quot;Last updated&quot; date at the top of this Privacy Policy.</p>
        <p>You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</p>
        <h2>Contact Us</h2>
        <p>If you have any questions about this Privacy Policy, You can contact us:</p>
        <ul  style="font-size: 20px">
            <li  style="font-size: 20px">
                <p>By email: <a href = "mailto: info@thekoha.com" style="text-decoration:none !important;color:#ddb253 !important;">[email&#160;protected]</a></p>
            </li>
            <li  style="font-size: 20px">
                <p>By visiting this page on our website: <a href="contactus.php" style="text-decoration:none !important;color:#ddb253 !important;">www.thekoha.com/contact</a></p>
            </li>
            <li  style="font-size: 20px">
                <p>By phone number: +91-9916299016</p>
            </li>
        </ul><script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    </article>
</main><!-- End #main -->
<br/>
<br/>
<br/>
<br/>

<?php include 'includes_website/footer.php'?>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

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