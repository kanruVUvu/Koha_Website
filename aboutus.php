<?php
include('database.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>KOHA | Our Story</title>
    <meta content="Koha was born in 2021, with the vision to create products that are a blend of art, technology, and with a focus on functionality." name="description">
    <meta content="Koha About Us, Koha Our Story, Koha Stories" name="keywords">

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ee27b093c2.js" crossorigin="anonymous"></script>
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
}
@media only screen and (max-width: 768px) {
#testacp
{
font-size: 7.4vw !important;
}
}
#testddfg
{
font-size:22px !important;
}	
  
@media (min-width: 320px) and (max-width: 480px) {
	#teamcontainer
	{
	padding: 10% 5% 10% 5%;
	height:100% !important;
	}
	.midpara1
	{
font-size: 24px !important;
    text-align: left;
	}
	.textname1
	{
	font-size:38px !important;
	}
	.textheading2
	{
	text-align:left !important;
	font-size:25px !important;
	}
	.textheading1
	{
	text-align:left !important;
	font-size:25px !important;
	}
	p
	{
	text-align:left !important;
	}
	#testsection1
	{
	padding: 0px 5% 30px 5%;
	}
#testpack
{
width:100%;
height:100%;
}
	
}
@media (min-width: 481px) and (max-width: 900px) {
	#teamcontainer
	{
	padding: 0px 5% 0px 5%;
	height:100% !important;
	}
	.midpara1
	{
font-size: 24px !important;
    text-align: left;
	}
	.textname1
	{
	font-size:38px !important;
	position: relative;
    top: 26px;
	}
	.textheading2
	{
	text-align:left !important;
	font-size:25px !important;
	}
	.textheading1
	{
	text-align:left !important;
	font-size:25px !important;
	}
	p
	{
	text-align:left !important;
	}
	#testsection1
	{
	padding: 0px 5% 30px 5%;
	}
	#testpack
{
width:100%;
height:100%;
}
}
@media (min-width: 901px) and (max-width: 1000px) {
	#teamcontainer
	{
	padding: 0px 5% 0px 5%;
	}
	.midpara1
	{
font-size: 25px !important;
    text-align: left !important;
	}
	.textname1
	{
	font-size:55px !important;
	}
	.textheading2
	{
	text-align:justify !important;
	font-size:28px !important;
	}
	.textheading1
	{
	text-align:justify !important;
	font-size:28px !important;
	}
	p
	{
	text-align:justify !important;
	}
	#testsection1
	{
	padding: 0px 20% 30px 20%;
	}
	#testpack
{
height: 100%;
    width: 100%;
    position: relative;
    top: -10px;
}
}
	@media (min-width: 1001px) and (max-width: 1440px) {
		#teamcontainer
	{
	padding: 5% 5% 5% 5%;
	}
		.midpara1
	{
font-size: 25px !important;
    text-align: justify;
	}
		.textname1
	{
	font-size:55px !important;
	}
		.textheading2
	{
	text-align:justify !important;
	font-size:28px !important;
	}
		.textheading1
	{
	text-align:justify !important;
	font-size:28px !important;
	}
		p
	{
	text-align:justify !important;
	}
		#testsection1
	{
	padding: 0px 20% 30px 20%;
	}
		#testpack
{
height: 100%;
    width: 100%;
    position: relative;
    top: -10px;
}
	}
		@media (min-width: 1441px) and (max-width: 2150px) {
			#teamcontainer
	{
	padding: 10% 5% 10% 5%;
	}
			.midpara1
	{
font-size: 26px !important;
    text-align: justify;
	}
			.textname1
	{
	font-size:55px !important;
	}
			.textheading2
	{
	text-align:justify !important;
	font-size:28px !important;
	}
				.textheading1
	{
	text-align:justify !important;
	font-size:28px !important;
	}
			p
	{
	text-align:justify !important;
	}
			#testsection1
	{
	padding: 0px 20% 30px 20%;
	}
	#testpack
{
	height: 83vh;
    width: 100%;
    position: relative;
    top: -10px;
}
		}
		@media (min-width: 2151px) {
			#teamcontainer
	{
	padding: 10% 5% 10% 5%;
	}
			.midpara1
	{
font-size: 30px !important;
    text-align: justify;
	}
			.textname1
	{
	font-size:55px !important;
	}
			.textheading2
	{
	text-align:justify !important;
	font-size:28px !important;
	}
			.textheading1
	{
	text-align:justify !important;
	font-size:28px !important;
	}
			p
	{
	text-align:justify !important;
	}
			#testsection1
	{
	padding: 0px 20% 30px 20%;
	}
	#testpack
{
	height: 78vh;
    width: 100%;
    position: relative;
    top: -10px;
}
		}
		@media (min-width: 320px) and (max-width: 480px) {
#testingpurpose
{
font-size:3rem;
color:#ddb253;
}
	
}
@media (min-width: 481px) and (max-width: 767px) {
	#testingpurpose
{
font-size:2.30rem;
color:#ddb253;
}

}
	@media (min-width: 768px) and (max-width: 1600px) {
		#testingpurpose
{
font-size:3.8rem;
color:#ddb253;
}
	
	
		}
		@media (min-width: 1601px) {
			#testingpurpose
{
font-size: 3.8rem;
    color: #ddb253;
    position: relative;
    right: 675px;

}

		}
        /* Medium devices (landscape tablets, 768px and up) */
        @media only screen and (min-width: 768px) {
			#testden
			{
			height: 100% !important;
			
			}
			#testden2
			{
			height: 700px !important;
			
			}
			#testden3
			{
			height: 750px !important;
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
			#testden
			{
			height: 100% !important;
			}
				#testden2
			{
			height: 100% !important;
			}
			#testden3
			{
			height: 100% !important;
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

        @media (min-width: 300px) and (max-width: 480px) {
			#testden
			{
			height: 100% !important;
			}
			#testden2
			{
			height: 100% !important;
			}
			#testden3
			{
			height: 100% !important;
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

        a, h1, h5, h2, h3, h4 {
            text-align: center;
        }

        p {
            font-size: 25px !important;
            
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

            
        }

        @media (max-width: 700px) {
            
        }

        @media (max-width: 1000px) {
           
        }

        @media (max-width: 700px) {
            
        }

        @font-face {
            font-family: 'Georama';
            font-style: italic;
            font-weight: 100;
            font-stretch: 100%;
            src: url(https://fonts.gstatic.com/s/georama/v4/MCo_zAn438bIEyxFVaIC0ZMQ72G6xnvmodYVPOBB5nuzMdWs0rvF2zEHz_9Abg.woff2) format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }


        h1 {
            color: white !important;
            text-transform: uppercase;
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
            .sec-2 {
                margin-top: 220px;
            }
        }

        @media (min-width: 971px) {
            .sec-2 {
                margin-top: 100px;
            }
        }

        @media (max-width: 970px) {
            .mobile-nav {
                visibility: hidden;
                width: 0;
                height: 0
            }
        }

        @media (min-width: 971px) {
            .desktop-nav {
                visibility: hidden
            }
        }
        blockquote{
            line-height: 20px;

        }
        /*blockquote:before {*/
        /*    content: '“';*/
        /*    font-family: Roboto Serif;*/
        /*    left: -5rem;*/
        /*    top: -2rem;*/
        /*}*/

        /*blockquote:after{*/
        /*    content: '”';*/
        /*    justify-content: right;*/
        /*    text-align: end;*/
        /*    font-family: Roboto Serif;*/
        /*    right: -5rem ;*/
        /*    bottom: 1rem;*/
        /*}*/
        section{
            padding-top: 60px;
        }
        blockquote{
            border-left: 4px solid #858585;
            padding-left: 20px !important;
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
                <p style="color: white !important; font-size: 20px !important;"> / About Us</p>
            </div>
        </div>
    </div>
</div>
<main id="main" style=" background-color: black; color: white; margin-top: 0px">

    <!-- ======= Our Team Section ======= -->
    <!--    <section class="breadcrumbs" style="background-color: black; color: #ddb253">-->
    <!--        <div class="container">-->
    <!---->
    <!--            <div class="d-flex justify-content-between align-items-center">-->
    <!-- <h2>About Us</h2> -->
    <!--                <ol>-->
    <!--                    <li style="font-size: 25px !important;"><a href="index.php">Home</a></li>-->
    <!--                    <li style="font-size: 25px !important;">About Us</li>-->
    <!--                </ol>-->
    <!--            </div>-->
    <!---->
    <!--        </div>-->
    <!--    </section>-->
    <section style="margin-top: 0; padding-top: 0">
        <div class='quotation_div'>
    <span class="img-container" style=""> <!-- Inline parent element -->
      <img src="assets/img/story/moon_bg.jpg" data-aos="fade-up" data-aos-duration="30000"
           style="height: auto;object-fit: cover; width: 100vw; max-height: 60vh;filter: brightness(60%); " alt="">
        <div class='overlay'>
            <h1 id="testacp" style="font-family: Roboto Serif !important;color: #ddb253 !important;"
                data-aos="fade-up"
                data-aos-duration="30000">Our Story</h1>
        </div>
    </span>
        </div>
    </section>

    <!--<section style="text-align: center; padding-top: 0px; padding-bottom: 20px;background-color:rgb(28,29,24) !important;" data-aos="fade-up" data-aos-duration="30000">

       <!-- <h1 style="color:#cccccc !important; margin-bottom: 20px" >The Story behind</h1>
        <!--        <h1 style="color:white;" data-aos="fade-up" data-aos-duration="30000"> behind </h1>-->
       <!-- <div style="margin: 0 0%">
            <img data-aos="zoom-in"
                 data-aos-duration="20000" style="width: 70%;" src="assets/img/story/koha-logo-2.png" alt="">
        </div>
    </section>-->
    <!--    <div style="margin: 0 10%">-->
    <!--        <img style="width: 100%" src="assets/img/story/koha-logo-2.png" alt="">-->
    <!--    </div>-->
    <section style="background-color:rgb(28,29,24) !important; " id="testsection1" data-aos="fade-up" data-aos-duration="30000">
		<br/>
		<br/>
        <p style="margin-bottom: 20px">
            Koha was born in 2021, with the vision to create products that are a blend of art, technology, and with a
            focus on functionality. Koha strives to empower creators and support every step of the creative journey.
        </p>
		 <p style="margin-bottom: 20px">
            The word Koha stands for Gift in Maori (the indigenous language of New Zealand). Koha is an expression of deep gratitude, affection, emotions and an ongoing relationship between giver and receiver. These emotions are embodied in every product designed and developed at Koha.
        </p>
<!--        Koha means gift in Māori, the indigenous language of the Māori people.-->
        <p style="margin-bottom: 20px">
            With sustainability as one of its
            core values, Koha has made a conscious effort towards recycling and minimalizing its impact on the
            environment. Each product is custom-made with an emphasis on Zero Waste Policy and sustainable packaging.
        </p>
        <div >
            <blockquote contenteditable="false" style="font-family: 'Georama'"><h1
                        style="font-family: 'Georama' !important; " class="textheading1"><span style="font-family: Roboto Serif">"</span>We pride ourselves on our ability to create designs that are modern and timeless and will appeal to a broad range of customers.<span style="font-family: Roboto Serif !important;">"</span></h1>
                <!--            <cite>Gautama Buddha</cite>-->
            </blockquote>
        </div>
    </section>

    <!--    <section>-->
    <!--        <h1>Product Story</h1>-->
    <!---->
    <!--        <div style="margin: 0 10%">-->
    <!--            <img style="width: 100%;" src="assets/img/story/pixelate.png" alt="">-->
    <!--        </div>-->
    <!--    </section>-->
    <!--    <section style=" margin: 0 20%; padding-top: 0">-->
    <!--        <p>-->
    <!--            Pixelate is a platform for artists to create a positive impact around the world. We are all about uniting-->
    <!--            people and spreading happiness through art.-->
    <!--        </p>-->
    <!--        <br>-->
    <!--        <br>-->
    <!--        <br>-->
    <!--        <p>-->
    <!--            The name KOHA is inspired by the concept of "koha" in Maori culture, which means giving without expecting-->
    <!--            anything in return. We want to bring this spirit into our platform and let artists tell their stories pixel-->
    <!--            by pixel.-->
    <!--        </p>-->
    <!--    </section>-->

 <!--   <section style="padding-bottom: 0; background-color: rgb(28,29,24)" data-aos="fade-up" data-aos-duration="30000">

        <h1 style="margin-bottom: 60px">Product Story</h1>

        <div class="row" style="padding-bottom: 0" data-aos="fade-up"
             data-aos-duration="30000">

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 order-lg-2 order-md-2">
                <div style="margin: 0 ;">
                    <img style="padding-top: 60px;object-fit: fill;" src="assets/img/story/Pixelate2.png"  alt="">
<!--                    <img style="padding-top: 0px;object-fit: fill;" src="assets/img/story/Pixelate.png"  alt="">-->
            <!--    </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 order-lg-1 order-md-1" style="">
                <section style=" margin: 0px 20% 0 20%; padding-top: 20px">
                    <p style="margin-bottom: 20px">
                        Pixelate is a platform for artists to create a positive impact around the world. We are all
                        about uniting
                        people and spreading happiness through art.
                    </p>
                    <p>
                        The name KOHA is inspired by the concept of "koha" in Maori culture, which means giving without
                        expecting
                        anything in return. We want to bring this spirit into our platform and let artists tell their
                        stories pixel
                        by pixel.
                    </p>
                </section>
            </div>

        </div>

    </section> -->

    <section data-aos="fade-up" data-aos-duration="30000" style="padding-bottom: 60px" >

        <h1 style="margin-bottom: 60px">Our Promise</h1>

        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 max-height">
                <img class="image-col" id="testpack"
                     src="img/our_promise1.jpg" alt="">
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 max-height"
                 style="display: flex; justify-content: center ;text-align: center; overflow-y: scroll; overflow-x: hidden;height:100% !important;" id="testden3">

                <div class="container">
                    <div>
                        <img src="img/noharmfulchemicals.jpg"
                             style="max-width: 300px; max-height: 300px; border-radius: 100%" alt="">
                    </div>
                    <p style="margin-bottom: 20px">
                        We constantly strive to improve the quality of our product while making sure not to compromise on the quality while keeping the environment in mind. 
                    </p>
					<p style="margin-bottom: 20px">
                       The people of Maori have got a spiritual bond with Mother Nature and have strong conservation ethics, which we follow here at Koha.  
                    </p>
                    <div>
                        <blockquote contenteditable="false" style="font-family: 'Georama'"><h1
                                    style="font-family: 'Georama' !important; " class="textheading2"><span style="font-family: Roboto Serif">"</span>WE
                                ARE CONTINUOUSLY IMPROVING OUR PRODUCT TO MINIMISE OUR IMPACT. OUR TOP-NOTCH QUALITY
                                KEEPS OUR PRODUCTS OUT OF LANDFILLS AND OCEANS.<span style="font-family: Roboto Serif">"</span>
                            <!--            <cite>Gautama Buddha</cite>-->
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section style="background-color: rgb(28,29,24);width:100% !important;" data-aos="fade-up"
             data-aos-duration="30000" >
        <h1 style="background-color: rgb(28,29,24); margin-bottom: 0px"> Meet The Team</h1>
        <div class="row" style="background-color: rgb(28,29,24);text-align: center; display: flex; justify-content: center; padding-top: 60px">

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 max-height-about" style="object-fit: cover">
                <img class="image-col" style="max-height: 700px;object-fit: contain;" src="assets/img/story/dummy.JPG" alt="">
					 <a

                            href="https://www.linkedin.com/in/pavan-rajanna-pavanrajanna/"
                            role="button"
                             data-aos="fade-up"
                     data-aos-duration="30000"
                    ><i class="fab fa-linkedin" id="testingpurpose" style="color:#ddb253;"></i
                        ></a>
						<br/>
						<a

                            href = "mailto:pavan.rajanna@thekoha.com"
                            role="button"
                             data-aos="fade-up"
                     data-aos-duration="30000"
                    >
						<i style="color:#ddb253;" id="testingpurpose" class="fa-solid fa-envelope"></i>
						</a>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 max-height-about"
                 style="display: flex; justify-content: center ;text-align: center; overflow-y: scroll; overflow-x: hidden;" id="testden">

                <div class="container" id="teamcontainer">
                    <h1 style="color: white" class="textname1"> Pavan Rajanna</h1>
                    <p style="margin-bottom: 20px" id="testddfg">
                        B.E. Mechanical, MSc. Aerospace Engineering (University of Sydney, Australia)
                    </p>
                    <p style="margin-bottom: 20px" id="testddfg">
                        As an aerospace engineer, I firmly believe in developing products that are an amalgamation of
                        engineering and imagination. During my stint as a research engineer at the University of Sydney,
                        I have stumbled upon numerous such technologies that have more often than not, left me in awe.
                        The creativity, innovation and Engineering behind such products are unparalleled.
                    </p>
                    <div>
                        <blockquote contenteditable="false" style="font-family: 'Georama'"><h1
                                    style="font-family: 'Georama' !important; " class="midpara1">"Most
                                decorated Olympian of all time, Michael Phelps once quoted ‘Think Small to Accomplish
                                Big Things’ and Koha is being built with those lines in mind."
                            <!--            <cite>Gautama Buddha</cite>-->
                        </blockquote>
                    </div>
                    <p id="testddfg">
                        Under the guidance of some of the finest scientists and engineers, we have envisioned Koha to be
                        an innovator in curating exquisite user-focused products with alluring design and mesmerizing
                        functionality.
                    </p>
                </div>
            </div>


        </div>

    </section>
  <section style="background-color: rgb(28,29,24);width:100% !important;" data-aos="fade-up"
             data-aos-duration="30000" >
        <div class="row" style="background-color: rgb(28,29,24);text-align: center; display: flex; justify-content: center; padding-top: 60px">
        
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 max-height-about" style="object-fit: cover">
                <img class="image-col" style="max-height: 700px;object-fit: contain;" src="assets/img/story/dummy.JPG" alt="">
				<a

                            href="https://www.linkedin.com/in/prayag-bellur/"
                            role="button"
                             data-aos="fade-up"
                     data-aos-duration="30000"
                    ><i class="fab fa-linkedin"   id="testingpurpose" style="color:#ddb253;"></i
                        ></a>
						<br/>
						<a

                            href = "mailto:prayag.bellur@thekoha.com"
                            role="button"
                             data-aos="fade-up"
                     data-aos-duration="30000"
                    >
						<i style="color:#ddb253;" id="testingpurpose" class="fa-solid fa-envelope"></i>
						</a>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 max-height-about"
                 style="display: flex; justify-content: center ;text-align: center; overflow-y: scroll; overflow-x: hidden;" id="testden">

                <div class="container" id="teamcontainer">
                    <h1 style="color: white" class="textname1">Prayag Bellur</h1>
                    <p style="margin-bottom: 20px" id="testddfg">
                      B.E. Mechanical, MSc. Production Engineering (Chalmers University, Sweden)  
                    </p>
                    <h2 style="margin-bottom: 20px; font-size: 25px !important; color: white !important;text-align: justify;" id="testddfg">
                        Robert Kiyosaki in his famous book ‘Rich Dad Poor Dad’ quotes,
                        <br><br>
                        <blockquote contenteditable="false" style="font-family: 'Georama'"><h1
                                    style="font-family: 'Georama' !important; " class="midpara1">Starting
                                a business is like jumping out of an airplane without a parachute. In mid-air, the
                                entrepreneur begins building a parachute and hopes it opens before hitting the
                                ground.
                           <!-- <cite>Gautama Buddha</cite> -->
                      </blockquote>
                    </h2>
                    <p style="margin-bottom: 25px" id="testddfg">
                        I could totally relate to this quote but when the two entrepreneurs are passionate engineers,
                        they ‘predict’ that the parachute opens rather than hope. As a production engineer in Sweden, I
                        could assimilate the state of the art manufacturing technologies and convoy KOHA in delivering
                        quintessential products.
                    </p>
                    <p style="margin-bottom: 25px" id="testddfg">
                        KOHA is a long mission and will have an eternal place in the hearts of the people with its creative product line.
                    </p>
                   
                </div>
            </div>


        </div>

    </section>

   <!-- <section style="padding-top: 0;background-color: rgb(28,29,24)">

        <div class="row" style="text-align: center; display: flex; justify-content: center;background-color: rgb(28,29,24)">


            <!--            <div class="visible-sm visible-xs col-sm-12 col-xs-12  max-height-about"-->
            <!--                 style="object-fit: cover; padding-right: 0px">-->
            <!--                <img class="image-col" data-aos="fade-up" data-aos-duration="30000"-->
            <!--                     style="max-height: 700px;object-fit: contain;" src="assets/img/story/dummy.JPG" alt="">-->
            <!--            </div>-->
            <!--            col-xs-push-1 col-sm-push-1-->
       <!--     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 max-height-about "
                 style="display: flex; justify-content: center ;text-align: center; overflow-y: scroll; overflow-x: hidden; " id="testden2">

               <div class="container" id="teamcontainer">

                    <h1 style="color: white;padding-top: 20px" class="textname1">Prayag
                        Bellur</h1>
                    <p style="margin-bottom: 20px">
                        B.E. Mechanical, MSc. Production Engineering (Chalmers University, Sweden)
                    </p>
                    <h2 style="margin-bottom: 20px; font-size: 25px !important; color: white;text-align: justify;" >
                        Robert Kiyosaki in his famous book ‘Rich Dad Poor Dad’ quotes,
                        <br><br>
                        <blockquote contenteditable="false" style="font-family: 'Georama'"><h1
                                    style="font-family: 'Georama' !important; " class="midpara1">Starting
                                a business is like jumping out of an airplane without a parachute. In mid-air, the
                                entrepreneur begins building a parachute and hopes it opens before hitting the
                                ground.
                            <!--            <cite>Gautama Buddha</cite>-->
                     <!--   </blockquote>
                    </h2>
                    <p style="margin-bottom: 25px">
                        I could totally relate to this quote but when the two entrepreneurs are passionate engineers,
                        they ‘predict’ that the parachute opens rather than hope. As a production engineer in Sweden, I
                        could assimilate the state of the art manufacturing technologies and convoy KOHA in delivering
                        quintessential products.
                    </p>
                    <p style="margin-bottom: 25px">
                        KOHA is a long mission and will have an eternal place in the hearts of the people with its creative product line.
                    </p>
                </div>
            </div>
            <!--            col-xs-push-0 col-sm-push-0-->
          <!--  <div class="col-lg-6 col-md-6 visible-lg visible-md max-height-about"
                 style="object-fit: cover; padding-right: 0px">
                <img class="image-col" data-aos="fade-up" data-aos-duration="30000"
                     style="max-height: 700px;object-fit: contain;" src="assets/img/story/dummy.JPG" alt="">
					<a

                            href="https://www.linkedin.com/in/prayag-bellur/"
                            role="button"
                             data-aos="fade-up"
                     data-aos-duration="30000"
                    ><i class="fab fa-linkedin"   id="testingpurpose" style="color:#ddb253;"></i
                        ></a>

            </div>

        </div>

    </section> -->
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

</body>

</html>