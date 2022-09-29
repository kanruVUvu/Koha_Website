
<?php
include('database.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>KOHA | How It Works</title>
    <meta content="Upload a picture of your choice. Have fun exploring the various options and customise your picture with our pixelate software. After ordering you can sit back and relax as we take it from here." name="description">
    <meta content="Koha How It Works, Koha Working Webpage, Koha Instructions Page" name="keywords">

    <!-- Favicons -->
    <link href="kohafavicon.jpeg" rel="shortcut icon"/>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ee27b093c2.js" crossorigin="anonymous"></script>

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/home.css" rel="stylesheet">
<!--    <link rel="stylesheet" href="css/bootstrap.min.css"/>-->
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/owl.carousel.css"/>
    <link rel="stylesheet" href="css/magnific-popup.css"/>
    <link rel="stylesheet" href="css/animate.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <!-- =======================================================
    * Template Name: Moderna - v4.8.0
    * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
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
@media only screen and (min-width: 768px) {
#testacp
{
font-size: 5vw !important;
}
#testacpunit
{
font-size: 3vw !important;
}
}
@media only screen and (max-width: 768px) {
#testacp
{
font-size: 7.4vw !important;
}
#testacpunit
{
font-size: 4.8vw !important;
}
}
 
        /* Medium devices (landscape tablets, 768px and up) */
        @media only screen and (min-width: 768px) {
			.hiw1
			{
			font-size:55px !important;
			}
			.hiw2
			{
			text-align:left !important;
			}
			.hiw3
			{
			text-align:left !important;
			}
			.hiw4
			{
			text-align:left !important;
			}
			.hiw5
			{
font-size:55px !important;
			}
			.hiw6
			{
			font-size:55px !important;
			}
			#howitworksbannerimage
			{
				height: auto;
    width: 100vw;
	max-height:60vh;
    object-fit: cover;
    filter: brightness(60%);
			}
            .test1 {
                position: relative;
                right: 174px;
            }

            .images {
                height: 26vw;
                width: 49vw;
            }

            .test2 {
                position: relative;
                right: 105px;
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

        .p {
            color: white
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
            background: #000 url("logo1.jpeg") no-repeat center center;
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

        p {
            font-family: 'Georama' !important;
            color: white !important;
        }

        h4, h3, h2, h1 {
            font-family: 'Georama' !important;
            margin-bottom: 17px;
            color: #ddb253;
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

        .team h1 {
            text-align: center;
            margin-top: 25px;
            font-family: 'Georama' !important;
            /*font-style: italic;*/
            font-size: 58px;
        }

        @media (min-width: 481px) and (max-width: 767px) {
			.hiw1
			{
			font-size:35px !important;
			}
			.hiw2
			{
			text-align:left !important;
			}
			.hiw3
			{
			text-align:left !important;
			}
			.hiw4
			{
			text-align:left !important;
			}
			.hiw5
			{
font-size:35px !important;
			}
			.hiw6
			{
			font-size:35px !important;
			}
			#howitworksbannerimage
			{
			height: auto;
    width: 100vw;
	max-height:60vh;
    object-fit: cover;
    filter: brightness(60%);
			}
            .test1 {
                position: relative;
                right: 30px;
            }

            .images {
                height: auto;
                width: 47vw;
            }

            .test2 {
                position: relative;
                right: 30px;
            }
        }

        @media (min-width: 50px) and (max-width: 480px) {
			.hiw1
			{
			font-size:35px !important;
			}
			.hiw2
			{
			text-align:left !important;
			}
			.hiw3
			{
			text-align:left !important;
			}
			.hiw4
			{
			text-align:left !important;
			}
			.hiw5
			{
font-size:35px !important;
			}
			.hiw6
			{
			font-size:35px !important;
			}
			#howitworksbannerimage
			{
			height: auto;
    width: 100vw;
	max-height:60vh;
    object-fit: cover;
    filter: brightness(60%);
			}
            .test1 {
                position: relative;
                right: 30px;
            }

            .images {
                height: auto;
                width: 47vw;
            }

            .test2 {
                position: relative;
                right: 30px;
            }
        }

        a, h5, h1, h2, h3, h4 {
            text-align: center;
        }

        p {
            font-size: 25px !important;
            text-align: justify !important;
        }

        h1, h2, h3 {
            font-size: 45px !important;
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

        .img-container {
            text-align: center;
            display: block;
            position: relative;
        }

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

        .quotation_div {
            position: relative;
            display: table;
        }


        blockquote {
            font-size: 3rem;
        }

        cite {
            display: block;
            text-align: right;
            font-family: Verdana, Arial, sans-serif;
            margin-top: 1rem;
            font-size: .9rem;
            color: #aaa;
            font-style: normal;
        }

        blockquote q {
            font-family: Georgia, serif;
            font-style: italic;
            letter-spacing: .1rem;
        }

        blockquote q span {
            will-change: opacity, filter;
            opacity: 0;
            filter: blur(0px);
        }

        q {
            quotes: "“" "”" "‘" "’";
        }

        q:before {
            content: open-quote;
            margin-right: .8rem;
        }

        q:after {
            content: close-quote;
        }

        q:before, q:after {
            color: #ccc;
            font-size: 4rem;
        }

        div::-webkit-scrollbar { /* WebKit */
            width: 0;
            height: 0;
        }

        @media (max-width: 1000px) {
            .image-col {
                max-height: 700px;
                width: 100%;
            }

            .max-height {
                max-height: 800px;
            }
        }

        @media (max-width: 700px) {
            .max-height {
                max-height: 700px;
            }
        }

        @media (max-width: 1000px) {
            .max-height-about {
                max-height: 700px;
            }
        }

        @media (max-width: 700px) {
            .max-height-about {
                max-height: 700px;
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

        @media (max-width: 970px) {
            .sec-2 { margin-top: 220px; }
        }
        @media (min-width: 970px) {
            .hidden-text { visibility: hidden }
			.hide-after { display:none ; height: 0; padding: 0}
        }
        @media (max-width: 970px) {
            .hide-before { display:none ; height: 0; padding: 0}
        }
        @media (max-width: 970px) {
            .hidden-text { visibility: visible }
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
        h1 {
            font-family: Georama, serif !important;
            font-size: 55px !important;
            color: #ddb253;
        }
        h2h2,h3,h4,h5,h6 {
            font-family: Georama, serif !important;
            font-size: 30px !important;
        }
        h2 {
            color: #cccccc !important;
        }
                h1 {
            font-family: Georama, serif !important;
            font-size: 55px !important;
            /*color: #ddb253;*/
        }
        h2,h3,h4,h5,h6 {
            font-family: Georama, serif !important;
            font-size: 30px !important;
        }
        h2 {
            color: #cccccc !important;
        }

    </style>
</head>

<body style="overflow-x:hidden; background-color: black !important; font-family: 'Georama' ;color: #ddb253">
<?php include 'includes_website/main.php' ?>

<script type="text/javascript">
    AOS.init();
</script>

<div style="margin: 100px 0 20px 0">
    <div style="background-color: black; color: white">
        <div class="container">
            <div style="display: flex; justify-content: left">
                <p style="text-align:right; text-decoration: none; font-size: 20px !important;"><a style="text-decoration: none; color: #ddb253 !important;" href="index.php">Home&nbsp;</a></p>
                <p style="color: white !important; font-size: 20px !important;"> / How It Works?</p>
            </div>
        </div>
    </div>
</div>
<section style="padding-top: 0px"  data-aos="fade-up" data-aos-duration="30000">
    <div class='quotation_div'>
    <span class="img-container"> <!-- Inline parent element -->

      <img src="img/gear.jpg" id="howitworksbannerimage"
            alt="">
        <div class='overlay'>
            <h1
			id="testacp"
                style="font-family: 'Roboto Serif' !important; text-align: center; color: #ddb253 !important;">HOW DOES IT WORK?</h1>
			 <h2 id="testacpunit" class=""
                style="text-align: center !important;">INSTRUCTIONS SIMPLIFIED</h2>
        </div>
    </span>
    </div>
</section>
<section class="how-it-works-banner-sec text-center">
         <h1 style="color:white;" data-aos="fade-up" data-aos-duration="30000" class="hiw1">How to Pixelate</h1>
        <div class="steps-div d-flex mx-auto">
            <div class="row">
			 <br/>
		 <br/>
		 <br/>
		 <br/>
                <div class="col-lg-4 col-md-6 col-sm-12 hide-before">
                    <h2 class="hide-before" style="color:white;" data-aos="fade-up" data-aos-duration="30000">Upload</h2>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 hide-before">
                    <h2 style="color:white;" class="hide-before" data-aos="fade-up" data-aos-duration="30000">Customize</h2>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 hide-before">
                    <h2 style="color:white;" data-aos="fade-up" class="hide-before" data-aos-duration="30000">Order</h2>
                </div>
                <img data-aos="fade-up" data-aos-duration="30000" class="hide-before" src="customer/img/Banner.png" alt="">
                <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="how-it-steps">
                    <h2 style="color:white;" class="hidden-text" data-aos="fade-up" data-aos-duration="30000">Upload</h2>
				<img data-aos="fade-up" data-aos-duration="30000" class="hide-after" src="customer/img/Upload.png" alt="">	
<!--				 <h1 style="color:white;" data-aos="fade-up" data-aos-duration="30000">Upload</h1>-->
<!--                <img src="./assets/Upload.png" alt="" data-aos="fade-up" data-aos-duration="30000">-->
                <!--<p data-aos="fade-up" class="hiw2">Once you hit Click to Create button at the top of the page,you will be taken to a page where you can upload your photos or select photos from our gallery.Once you upload your photo, click next for the customization,or change to reupload your photo.</p>-->
            <p data-aos="fade-up" class="hiw2" style="text-align:center !important;">A picture of your choice.</p>
			 <br/>
			 <br/>
			</div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="how-it-steps">
                    <h2 style="color:white;" class="hidden-text" data-aos="fade-up" data-aos-duration="30000">Customize</h2>
					<img data-aos="fade-up" data-aos-duration="30000" class="hide-after" src="customer/img/Create.png" alt="">	
<!--				<h1 style="color:white;" data-aos="fade-up" data-aos-duration="30000">Customize</h1>-->
<!--                <img src="./assets/Create.png" alt="" data-aos="fade-up" data-aos-duration="30000">-->
                <!--<p data-aos="fade-up" class="hiw3">Using our Pixelate Software you can customize everything starting from the size to colours too much more. Use our crop option to zoom in to relevant areas of your photos to create focal points.</p>-->
            <p data-aos="fade-up" class="hiw2" style="text-align:center !important;">Have fun exploring the various options and customise your picture with our pixelate software</p>
			 <br/>
			 <br/>
			</div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="how-it-steps">
                    <h2 style="color:white;" class="hidden-text" data-aos="fade-up" data-aos-duration="30000">Order</h2>
					<img data-aos="fade-up" data-aos-duration="30000" class="hide-after" src="customer/img/Order.png" alt="">	
<!--				  <h1 style="color:white;" data-aos="fade-up" data-aos-duration="30000">Order</h1>-->
<!--                <img src="./assets/Order.png" alt="" data-aos="fade-up" data-aos-duration="30000">-->
                <!--<p data-aos="fade-up" class="hiw4">Once you are happy with the customization of the photo, you can preview the photo and make any last-minute changes before placing the order. Once ordered, now sit back and relax. We will take it from here.</p>-->
            <p data-aos="fade-up" class="hiw2" style="text-align:center !important;">Sit back and relax as we take it from here.</p>
			</div>
                </div>
            </div>
        </div>
    </section>
	<section>


     <div style="color:white !important; display: block; text-align: center" data-aos="fade-up"
         data-aos-duration="30000">
        <h1 style="display: inline;color:white !important;" class="hiw5">How&nbsp;</h1>
        <h3 style="display: inline;color:white !important; font-max-size: 30px !important; filter: brightness(60%)"> To&nbsp;Wall
            &nbsp;</h3>
        <h1 style="display: inline;color:white !important; font-max-size: 55px !important;">Mount?</h1></div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 max-height">
           
        </div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 max-height"
             style="display: flex; justify-content: center ;text-align: center; overflow-y: scroll; overflow-x: hidden; height: 710px; ">
<img class="image-col" data-aos="fade-up" data-aos-duration="30000" style="height: 100vh;width: 100%" src="img/dummywhite.jpg" alt="">
            <div class="container">
            </div>
        </div>
    </div>
</section>

<section>


    <h1 style="color:white;" data-aos="fade-up" data-aos-duration="30000" class="hiw6">How To Setup Backlight?</h1>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 max-height">
            <img class="image-col" data-aos="fade-up" data-aos-duration="30000" style="height: 100vh;width: 100%" src="img/dummywhite.jpg" alt="">
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 max-height"
             style="display: flex; justify-content: center ;text-align: center; overflow-y: scroll; overflow-x: hidden; height: 710px; ">

            <div class="container">
            </div>
        </div>
    </div>
</section>
<br/>
<br/>
<br/>
<br/>



    <?php include 'includes_website/footer.php' ?>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
<!--    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>-->
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

<!--<script>-->
<!--    (function(d, m){-->
<!--        var kommunicateSettings =-->
<!--            {"appId":"28697f7e85fe0fdff7aad97521eeac9c1","popupWidget":true,"automaticChatOpenOnNavigation":true};-->
<!--        var s = document.createElement("script"); s.type = "text/javascript"; s.async = true;-->
<!--        s.src = "https://widget.kommunicate.io/v2/kommunicate.app";-->
<!--        var h = document.getElementsByTagName("head")[0]; h.appendChild(s);-->
<!--        window.kommunicate = m; m._globals = kommunicateSettings;-->
<!--    })(document, window.kommunicate || {});-->
<!--</script>-->

</body>

</html>