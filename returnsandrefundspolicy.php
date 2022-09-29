<?php
include('database.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>KOHA | Return Policy</title>
    <meta content="Our refund policy is flexible, user friendly and we try to accommodate our customer requests as much as we can." name="description">
    <meta content="Koha Returns, Koha Return Policy, Koha Return Policy Page" name="keywords">

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/Home.css" rel="stylesheet">
<!--    <link rel="stylesheet" href="css/bootstrap.min.css"/>-->
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ee27b093c2.js" crossorigin="anonymous"></script>
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
 
  
        /* Medium devices (landscape tablets, 768px and up) */
        @media only screen and (min-width: 768px) {
			h1
			{
			 font-size: 45px !important;
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
            color:#000000;
        }

        .secondary-content ul {
            margin: 15px 20px;
        }

        .secondary-content li {
            color: #000000;
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
			h1
			{
			 font-size: 34px !important;
			}
			h2
			{
			font-size:31px !important;
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
        h1,h2,h3,h4,h5{
            text-align: center;
            font-family: 'Georama' !important;
            padding-top: 20px;
            color: #ddb253;
        }
        p {
            font-size: 25px !important;
            
        }

          h3 {
            font-size: 40px !important;
        }
        a,p{
            font-family: 'Georama' !important;
            text-align: center;
            color: white !important;
        }

        @media (max-width: 970px) {
            .mobile-nav { visibility: hidden }
        }

        @media (min-width: 971px) {
            .desktop-nav { visibility: hidden; width: 0 !important; height: 0 !important;}
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
           
        h3,h4,h5,h6 {
            font-family: Georama, serif !important;
            font-size: 30px !important;
        }
        h2 {
            color: #cccccc !important;
        }
        h2 {
            color: #cccccc !important;
        }
        h3,h4,h5,h6 {
            font-family: Georama, serif !important;
            font-size: 40px !important;
        }
        h2 {
            color: #cccccc !important;
        }
        p {
            font-size: 25px !important;
            text-align: justify-all !important;
        }

    </style>
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
                <p style="color: white !important; font-size: 20px !important;"> / Return Policy</p>
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
<!--                 <h2>Return Policy</h2> -->
<!--                <ol>-->
<!--                    <li><a href="index.php">Home</a></li>-->
<!--                    <li>Return Policy</li>-->
<!--                </ol>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--    </section>-->
    <!-- End Our Team Section -->
    <!-- End Team Section -->
    <section class="hero hero-secondary" data-aos="fade-up" style="padding-top: 10px">
        <h1 class="page-title" style="text-align:center;border-bottom:none !important;">Return Policy</h1>
    </section>
    <article class="secondary-content" data-aos="fade-up">

        <h2>Return Policy</h2>
        <p>
            Effective as of January 02, 2022<br/>
            We at Koha ensure that all the products meet our high-quality standards. The orders are examined carefully for any damages, packed with utmost care and shipped off to decorate your walls.<br/>
            If you are unhappy with your purchase, you may be eligible for a refund or exchange. Different policies and guidelines are there based on the nature of your purchase. Please review the below policies. Our refund policy is flexible, user friendly and we try to accommodate our customer requests as much as we can.

        </p>
        <h2>Personalized Products created using the Pixelate Tool</h2>
        <p>
            Due to the customised nature of the product, we cannot offer you a refund if your dissatisfaction with the product(s) is due to a mistake on your part or simply because you have changed your mind.<br/>
            However, if you are not completely satisfied with the product due to a mistake we have made or your product(s) have arrived damaged, you may be eligible for an exchange. To raise an exchange request, contact us by sending an email to <a href="mailto:support@thekoha.com" style="text-decoration:none !important;color:#45beff !important;"><b>support@thekoha.com</b></a> . Please include photographs of the damaged products(s) in the email.

        </p>
        <h2>Products purchased from the Koha Gallery</h2>
        <p>
            If for any reason you are not satisfied with your purchase, you can return the product(s) for a full refund or exchange provided the below conditions are met<br/>
            - Product must be unused and in its original packaging.<br/>
            - Product must not be damaged.<br/>
            - Proof of Purchase must be presented, and return should be within 10 days of purchase.<br/>
            All returns will be inspected to ensure all the above criteria are met.  In the event of the above conditions not being met, we reserve the right not to issue a refund. All return requests should include pictures of the product and a clear description of the issue.
        </p>
        <h2>Shipping Items</h2>
        <p>
            Once we receive your return request, we will get back you within 2-3 days regarding the status of your request. Once your return request is approved, arrangements will be made to pick up the product from your location. It usually takes 2-3 working days to organise a pickup and 4-5 days for the product to arrive at our facility from the day it is picked up. Once the product has arrived at our facility, we will inspect the product and initiate the refund process if all the aforementioned criteria are met.<br/>
            Returns will not be accepted without a valid Return Request Authorization (RRA).<br/>
            You must ensure that the goods are properly packaged so that they will not be damaged during transit. If the product is found damaged or used beyond what it takes for us to reasonably inspect it, then we may reject the refund.
        </p>
        <h2>Back Light Unit</h2>
        <p> </p>
        <h2>Contact Us</h2>
        <p>If you would like to raise any other concerns regarding your purchase, feel free to contact us by sending an email to <a href="mailto:support@thekoha.com" style="text-decoration:none !important;color:#45beff !important;"><b>support@thekoha.com</b></a></p>
        </ul><script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    </article>
</main><!-- End #main -->
<br/>
<br/>
<br/>
<br/>

<!-- ======= Footer ======= -->
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