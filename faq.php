
<?php
include('database.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>KOHA | FAQ</title>
    <meta content="Koha Website based questions related to topics such as About Pixelate, Shipping and Delivery, Privacy and Data Policy, Returns and Refund Policy, Contact Us" name="description">
    <meta content="Koha FAQ, Koha Questions, Koha Website FAQ, Koha Frequently Asked Questions" name="keywords">

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

        /* Medium devices (landscape tablets, 768px and up) */
        @media only screen and (min-width: 768px) {
			#testfaqwp
			{
			font-size: 5vw !important;
			}
				button {
            font-size: 25px !important;
        }
			 .accordion-body{
            font-size: 20px !important;
            text-align: justify !important;
        }
			h1
			{
			font-size: 55px !important;
			}
			#faqbannerimage
{
height: auto;
    width: 100vw;
    object-fit: cover;
    filter: brightness(60%);
    max-height: 60vh;
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
        ul, li{
            list-style: none;
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
        #container{
            width: 60%;
            margin: 30px auto;
            overflow: auto;
            font-family: "Roboto", sans-serif;
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
        @media (min-width: 481px) and (max-width: 767px) {
			#testfaqwp
			{
			font-size: 7.4vw !important;
			}
			button {
            font-size: 23px !important;
        }
			 .accordion-body{
            font-size: 20px !important;
            text-align: left !important;
        }
			h1
			{
			font-size: 35px !important;
			}
			#faqbannerimage
{
height: auto;
    width: 100vw;
    object-fit: cover;
    filter: brightness(60%);
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
        @media (min-width: 320px) and (max-width: 480px) {
			#testfaqwp
			{
			font-size: 7.4vw !important;
			}
			button {
            font-size: 23px !important;
        }
		 .accordion-body{
            font-size: 20px !important;
            text-align: left !important;
        }
			h1
			{
			font-size: 35px !important;
			}
			#faqbannerimage
{
height: auto;
    width: 100vw;
    object-fit: cover;
    filter: brightness(60%);
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

        p {
            font-size: 22px !important;
            text-align: justify !important;
        }
       

        
        body{
            font-family: "Georama", sans-serif !important;
        }
        a, h1, h2, h3, h4, h5, h6,button {
            font-family: 'Georama' !important;
        }
        h1,h2,h3,h4,h5,h6,p {

        }
        .accordion-button{
            /*color: white !important;*/
            background-color: #191c1f !important;
        }
         .collapsed{
            color: white !important;
        }
		.accordion-button:focus
		{
		border-color:none;
		box-shadow:none;
		}
        .accordion-body {
            font-size: 18px;
            background-color: #2c3034;
            color: white;
        }
        .accordion-button::after {
            color: white;
        }
        .accordion-button.collapsed::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
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
            .desktop-nav { visibility: hidden }
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

        a->b{
            text-decoration: none;
            color: white;
        }
        b{
            color: white;
            text-decoration: none;
        }
        b,a {
            color: white;
            text-decoration: none;
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
        h1 {
            font-family: Georama, serif !important;
            
            /*color: #ddb253;*/
        }
        h2,h3,h4,h5,h6 {
            font-family: Georama, serif !important;
            font-size: 30px !important;
        }
        h2 {
            color: #cccccc !important;
        }
                h1 {
            font-family: Georama, serif !important;
            
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
    <!-- =======================================================
    * Template Name: Moderna - v4.8.0
    * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body style="overflow-x:hidden; background-color: black; color: white">

<?php include 'includes_website/main.php'?>
<script type="text/javascript">
    AOS.init();
</script>
<div style="margin: 100px 0 20px 0">
    <div style="background-color: black; color: white">
        <div class="container">
            <div style="display: flex; justify-content: left">
                <p style="text-align:right; text-decoration: none; font-size: 20px !important;"><a style="text-decoration: none; color: #ddb253 !important;" href="index.php">Home&nbsp;</a></p>
                <p style="color: white !important; font-size: 20px !important;"> / FAQ</p>
            </div>
        </div>
    </div>
</div>
<section style="padding-bottom: 0; padding-top: 0px">
    <div class='quotation_div' style="padding-bottom: 0">
    <span class="img-container"> <!-- Inline parent element -->

      <img src="assets/q mark reduced.png" id="faqbannerimage" data-aos="fade-up" data-aos-duration="30000"
            alt="">
        <div class='overlay'>
           <h1 data-aos="fade-up" data-aos-duration="30000" id="testfaqwp" style="font-family: 'Roboto Serif' !important;color:#ddb253 !important;">Question?</h1>
        </div>
    </span>
    </div>
</section>
<main id="main">
    <!-- ======= Contact Section ======= -->
<!--    <section class="breadcrumbs" style="color: white; background-color: black">-->
<!--        <div class="container">-->
<!---->
<!--            <div class="d-flex justify-content-between align-items-center">-->
<!--                <h2>FAQ</h2>-->
<!--                <ol>-->
<!--                    <li><a href="index.php">Home</a></li>-->
<!--                    <li>FAQ</li>-->
<!--                </ol>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--    </section>-->
    <!-- End Contact Section -->
    <!-- ==== About Section Start ==== -->
    <section class="faq-testimonial-sec" style="padding-top: 0px">
        <div class="wrapper">
<!--            <div class="d-flex">-->
                <div class="faq text-center">
                    <h1 style="margin-bottom: 20px">About Pixelate</h1>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header mt-0" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fa fa-question-circle" aria-hidden="true"></i> &nbsp
                                    How big can I go?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    You can add up to 20 plates in the horizontal and vertical direction using our Pixelate Tool. That is pretty big!!! Want to go bigger? <a href="contactus.php" style="text-decoration:none;"><b style="color:#45beff !important;">Contact us</b></a> and we can provide a custom code.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header mt-0" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="fa fa-question-circle" aria-hidden="true"></i> &nbsp
                                    How many colours does the Pixelate Palette have?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    The palette has 50 colours. Most pictures look just as good with 20 colours. You are given the freedom to  add or remove any colours of your choice during customization. Get Creative! Get Artistic! #yourphotoyourway!.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header mt-0" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="fa fa-question-circle" aria-hidden="true"></i> &nbsp
                                    How can I mount it?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    You can get your product framed or buy our custom developed mounts. The instructions for mounting the product using our mounts can be found <a href="howitworks.php" style="text-decoration:none;color:#45beff !important;"><b style="color:#45beff !important;">here</b></a>.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header mt-0" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <i class="fa fa-question-circle" aria-hidden="true"></i> &nbsp
                                    What are the dimensions?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Each plate measures 25.6*25.6 cm. The more plates you add, the larger it gets. Don’t worry! Our tool does the math for you and tells you the dimensions.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header mt-0" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <i class="fa fa-question-circle" aria-hidden="true"></i> &nbsp
                                   How do I select the best image to Pixelate?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Follow our <a href="faq.php" style="text-decoration:none;color:#45beff !important;"><b style="color:#45beff !important;">expert tips and tricks</b></a> to select the best image to pixelate!.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header mt-0" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    <i class="fa fa-question-circle" aria-hidden="true"></i> &nbsp
                                    How can I improve the resolution?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                   The resolution of the image can be improved by increasing the number of base plates. Images with intricate details will appear pixelated in small configurations. Hence we recommend choosing images with fewer details (for example close up image of one’s face) for small configurations and large configurations for images with loads of details. We recommend using our crop tool to give preference to important areas and hence improve the resolution.<br/>Use our preview option to see how your image looks when mounted. Take a step back and enjoy the beauty of your Pixelate.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header mt-0" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    <i class="fa fa-question-circle" aria-hidden="true"></i> &nbsp
                                    Can I use any image?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                   Yes, you can, if it adheres to our <a href="privacypolicy.php" style="text-decoration:none;color:#45beff !important;"><b style="color:#45beff !important;">Terms and Conditions</b></a>. Click <a href="#" style="text-decoration:none;color:#45beff !important;"><b style="color:#45beff !important;">here</b></a> for expert tips to select the best photo.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header mt-0" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    <i class="fa fa-question-circle" aria-hidden="true"></i> &nbsp
                                    Can I build it myself?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                   You sure can. <a href="contactus.php" style="text-decoration:none;color:#45beff !important;"><b style="color:#45beff !important;">Contact us</b></a> and we will get it sorted for you!.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header mt-0" id="headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    <i class="fa fa-question-circle" aria-hidden="true"></i> &nbsp
                                    Are the plates connected to each other?
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    No, they are not.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!--        </div>-->
    </section>
    <section class="faq-testimonial-sec" style="padding-top: 0px">
        <div class="wrapper">
            <div class="d-flex">
                <div class="faq text-center px-10 w-100">
                    <h1 style="margin-bottom: 20px">Shipping and Delivery</h1>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header mt-0" id="headingEleven">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                                    <i class="fa fa-question-circle" aria-hidden="true"></i> &nbsp
                                    How can I track my order?
                                </button>
                            </h2>
                            <div id="collapseEleven" class="accordion-collapse collapse show" aria-labelledby="headingEleven"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We have partnered with ShipRocket for all our deliveries. Use the link below to track your order.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header mt-0" id="headingTwelve">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                    <i class="fa fa-question-circle" aria-hidden="true"></i> &nbsp
                                    How long does it take for my order to arrive?
                                </button>
                            </h2>
                            <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We normally send the order in 1-2 business days from the date of purchase. You can track your order using the link provided below. For more information, please check out our <a href="shippinginfo.php" style="text-decoration:none;color:#45beff !important;"><b style="color:#45beff !important;">shipping information page</b></a>.
</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header mt-0" id="headingThirteen">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThirteen" aria-expanded="true" aria-controls="collapseThirteen">
                                    <i class="fa fa-question-circle" aria-hidden="true"></i> &nbsp
                                    Do we deliver internationally?
                                </button>
                            </h2>
                            <div id="collapseThirteen" class="accordion-collapse collapse show" aria-labelledby="headingThirteen"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, we do. Please contact us for further information.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header mt-0" id="headingFourteen">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFourteen" aria-expanded="true" aria-controls="collapseFourteen">
                                    <i class="fa fa-question-circle" aria-hidden="true"></i> &nbsp
                                    What are the shipping prices?
                                </button>
                            </h2>
                            <div id="collapseFourteen" class="accordion-collapse collapse show" aria-labelledby="headingFourteen"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Tricky question! Shipping rates are subject to change based on the size of your order and delivery location. Don’t worry! This is calculated at the checkout.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="faq-testimonial-sec" style="padding-top: 0px">
        <div class="wrapper">
            <div class="d-flex">
                <div class="faq text-center px-10 w-100">
                    <h1 style="margin-bottom: 20px">Privacy and Data Policy</h1>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header mt-0" id="headingFifteen">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFifteen" aria-expanded="true" aria-controls="collapseFifteen">
                                    <i class="fa fa-question-circle" aria-hidden="true"></i> &nbsp
                                    Are any of my images stored?
                                </button>
                            </h2>
                            <div id="collapseFifteen" class="accordion-collapse collapse show" aria-labelledby="headingFifteen"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    The privacy of our customers is of utmost importance to us. We adhere to our strict data protection policies. We do not store or save any of our customers’ images but the Pixalated image will be stored for a period of 10 days and then deleted.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<section class="faq-testimonial-sec" style="padding-top: 0px">
        <div class="wrapper">
            <div class="d-flex">
                <div class="faq text-center px-10 w-100">
                    <h1  style="margin-bottom: 20px">Returns and Refund Policy</h1>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header mt-0" id="headingSixteen">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSixteen" aria-expanded="true" aria-controls="collapseSixteen">
                                    <i class="fa fa-question-circle" aria-hidden="true"></i> &nbsp
                                    What if I am not satisfied with the product? Can I get a refund?
                                </button>
                            </h2>
                            <div id="collapseSixteen" class="accordion-collapse collapse show" aria-labelledby="headingSixteen"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Excellent Question! Please have a look at our <a href="returnsandrefundspolicy.php" style="text-decoration:none;color:#45beff !important;"><b style="color:#45beff !important;">Refund Policy</b></a>. 
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header mt-0" id="headingSeventeen">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeventeen" aria-expanded="true" aria-controls="collapseSeventeen">
                                    <i class="fa fa-question-circle" aria-hidden="true"></i> &nbsp
                                    What if the product arrives with few missing Pixels or is damaged?
                                </button>
                            </h2>
                            <div id="collapseSeventeen" class="accordion-collapse collapse show" aria-labelledby="headingSeventeen"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<section class="faq-testimonial-sec" style="padding-top: 0px">
        <div class="wrapper">
            <div class="d-flex">
                <div class="faq text-center px-10 w-100">
                    <h1 style="margin-bottom: 20px">Contact us</h1>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header mt-0" id="headingEighteen">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseEighteen" aria-expanded="true" aria-controls="collapseEighteen">
                                    <i class="fa fa-question-circle" aria-hidden="true"></i> &nbsp
                                    How can I get in touch with the team?
                                </button>
                            </h2>
                            <div id="collapseEighteen" class="accordion-collapse collapse show" aria-labelledby="headingEighteen"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    You can contact us using the Contact Us Form or by writing to us at <a href="mailto:info@thekoha.com" style="text-decoration:none !important;color:#45beff !important;"><b style="color:#45beff !important;">info@thekoha.com</b></a> .
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==== Contact Section End ==== -->
</main><!-- End #main -->
<br/>
<br/>
<br/>
<br/>

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="assets/js/script44.js"></script>
<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>



</body>

</html>