<?php
include('database.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>KOHA | Shipping Information</title>
    <meta content="Koha Shipping Information Content related to topics such as Fulfillment and Processing Times, Shipping Rates & Delivery Times, Damages, Prices, Customs, Duties and Taxes" name="description">
    <meta content="Koha Shipping Information, Koha Shipping Info, Koha Shipping" name="keywords">

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ee27b093c2.js" crossorigin="anonymous"></script>
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

  
        /* Medium devices (landscape tablets, 768px and up) */
        @media only screen and (min-width: 768px) {
			h1
			{
			 font-size: 45px !important;
			}
			h3
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
			color:#cccccc !important;
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
			h3
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
			h3
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
        a,p{
            font-family: 'Georama' !important;
            text-align: center;
            color: white !important;
        }
        p{
            font-size: 25px !important;
            
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
        h1 {
            font-family: Georama, serif !important;
           
            color: #ddb253;
        }
      
        h2 {
            color: #cccccc !important;
        }
        h4,h5,h6 {
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

<body style="overflow-x:hidden; background-color: black; color: white">

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
                <p style="color: white !important; font-size: 20px !important;"> / Shipping</p>
            </div>
        </div>
    </div>
</div>
<main id="main" style="margin-top:0px !important;">

    <!-- ======= Our Team Section ======= -->
<!--    <section class="breadcrumbs" style="background-color: black">-->
<!--        <div class="container">-->
<!---->
<!--            <div class="d-flex justify-content-between align-items-center">-->
<!--                <h2>Shipping Information</h2>-->
<!--                <ol>-->
<!--                    <li style="font-size: 25px !important;"><a href="index.php">Home</a></li>-->
<!--                    <li style="font-size: 25px !important;"><a href="">Shipping Information</a></li>-->
<!--                </ol>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--    </section>-->
    <!-- End Our Team Section -->
    <!-- End Team Section -->
<!--    <br/>-->
<!--    <br/>-->
    <section class="hero hero-secondary" data-aos="fade-up" style="padding-top: 10px">
        <h1 class="page-title" style="text-align:center;border-bottom:none !important;">Shipping Information</h1>
    </section>
    <article class="secondary-content" data-aos="fade-up">

        <h3>Fulfillment and Processing Times</h3>
        <p>
            All orders are dispatched from our head office in Bangalore, India. <br/>
            Orders are processed within 1-2 business days. Orders are not dispatched on weekends or holidays.<br/>
            If we are experiencing a high volume of orders, shipments may be delayed by a few days and we are sorry for any inconvenience caused due to the same.<br/>
            Please allow additional days in transit for delivery. In the event of a significant delay in the shipment, we will contact you via email or telephone. Delays in delivery are  occasionally expected to occur.

        </p>
        <h3>Shipping Rates & Delivery Times</h3>
        <p>
            Shipping charges for your order will be calculated and displayed at checkout.<br/>
            We ship via ShipRocket for both domestic and international orders. In some cases, for international orders can be shipped via other shipping solutions. <br/>
            You will receive a shipment confirmation email containing your tracking number(s) once order has been shipped. Please track the progress of your orders using the tracking number.
        </p>
        <h3>Damages</h3>
        <p>
            At Koha, products are packed and dispatched with utmost care and love. All the products are closely inspected for defects and damages before it leaves our facility. We adhere to our strict quality control practices. Koha is not liable for product damages or if the product is lost during shipping. If you receive the product damaged, please get intouch with us by sending an email to <a href="mailto:support@thekoha.com" style="text-decoration:none !important;color:#45beff !important;"><b>support@thekoha.com</b></a> and include photos of the damaged product. We will file it with the shipping company and keep you updated via email or telephone.
        </p>
        <h3>Prices, Customs, Duties and Taxes</h3>
        <p>
            All prices on the website are in Indian Rupees and are inclusive of GST where applicable. Prices are subject to change without notice.<br/>
            We are not responsible for any customs and taxes applied to your order. All fees imposed during or after shipping are the responsibility of the customer (tariffs, taxes, etc.).

        </p>
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