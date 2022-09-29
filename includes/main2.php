<style>

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


    body{
        font-family: "Georama", sans-serif !important;
    }
    a, h1, h2, h3, h4, h5, h6,button {
        font-family: 'Georama' !important;
    }
    th, tr{
        color: white;
    }

    .text-muted{
        color:white;
    }

    .box{
        background-color: black;
        color: white;
    }
    .img-container {
        text-align: center;
        display: block;
        position: relative;
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

    .quotation_div {
        position: relative;
        display: table;
    }

    @media (max-width: 970px) {
        .sec-2 { margin-top: 220px; }
    }

    @media (min-width: 971px) {
        .sec-2 { margin-top: 100px; }
    }

    /*@media (max-width: 970px) {*/
    /*    .mobile-nav { visibility: hidden }*/
    /*}*/

    /*@media (min-width: 971px) {*/
    /*    .desktop-nav { visibility: hidden }*/
    /*}*/
    @media (max-width: 970px) {
        .mobile-nav { visibility: hidden;  width: 0 !important; height: 0 !important;}
    }

    @media (min-width: 971px) {
        .desktop-nav { visibility: hidden;  width: 0 !important; height: 0 !important; }
    }
    .text-muted {
        color: white !important;
    }
    a{
        text-decoration: none;
    }
    h1 {
        font-family: Georama, serif !important;
        font-size: 55px !important;
        color: #ddb253;
    }
    h2,h3,h4,h5,h6 {
        font-family: Georama, serif !important;
        font-size: 30px !important;
    }
    h2 {
        color: #cccccc !important;
    }
    p{
        font-size: 25px !important;
    }
    @media only screen and (min-width: 50px) and (max-width: 599px) {
        #headerlogotest
        {
            max-width:160px;
        }
    }
    @media only screen and (min-width: 600px) and (max-width: 767px) {
        #headerlogotest
        {
            max-width:185px;
        }
    }
    @media only screen and (min-width: 768px) and (max-width: 991px) {
        #headerlogotest
        {
            max-width:185px;
        }
    }
    @media only screen and (min-width: 992px) {
        #headerlogotest
        {
            max-width:185px;
        }

    }
    .box{
        border: 0px;
    }

</style> </head>

<body id="testbody" style="color: white; background-color: black; width: 100vw">

<!--====== Header Section Start ======-->



<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-black navbar-static-top" style="position:fixed;width:100%;margin-top: 0; background-color: black !important; color: white; padding: 20px 1%">
    <div class="container-fluid navbar-mini d-flex justify-content-between" style=" display: flex">
        <a href="index.php" style="margin-right: auto">
            <img style="height:45px" id="headerlogotest" src="img/koha-logo-2.png" alt=""><!-- Logo -->
        </a>
        <div>
            <a class="desktop-nav nav-item" style="" href="cart.php"><img src="assets/shoppingcarticon.png" style="width:30px !important;height:30px !important;"><span class="badge badge-secondary" style="position:relative; top: -15px;left: -15px; color: black; background-color: white;border-radius: 50%; "></span></a>
            <a class="desktop-nav nav-item" style="padding-right: 5px" href="customer/my_account.php"><img src="assets/myaccounticon.png" style="width:30px !important;height:30px !important;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" style="background-color: grey; aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div
    <div class="d-flex justify-content-end" >
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background-color: black !important;">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="background-color: black !important;">
                <li class="nav-item" style="border-radius: 20px; width:100px">
                    <a class="nav-link" style="background-color: black !important;font-family: Roboto Serif !important; border-radius: 20px" aria-current="page" href="aboutus.php">Our Story</a>
                </li>
                <li class="nav-item" style="border-radius: 20px; width:130px">
                    <a class="nav-link" style="background-color: black !important;font-family: Roboto Serif !important; border-radius: 20px" href="howitworks.php">How it Works</a>
                </li>
                <li class="nav-item" style="border-radius: 20px; width:70px">
                    <a class="nav-link" style="background-color: black !important;font-family: Roboto Serif !important; border-radius: 20px" href="shop.php">Gallery</a>
                </li>
                <li class="nav-item" style="border-radius: 20px; width:110px; padding-right: 10px">
                    <a class="nav-link" style="background-color: black !important;font-family: Roboto Serif !important; border-radius: 20px ; width:110px" href="accessories.php">Accessories</a>
                </li>
                <li class="nav-item" style="border-radius: 20px; width:50px; padding-right: 10px">
                    <a class="nav-link" style="background-color: black !important;font-family: Roboto Serif !important; border-radius: 20px ; width:50px" href="faq.php">FAQ</a>
                </li>
                <li class="nav-item" style="border-radius: 20px;padding-right: 10px">
                    <a class="nav-link" style="background-color: black !important;font-family: Roboto Serif !important; border-radius: 20px ; width:103px" href="contactus.php">Contact Us</a>
                </li>
                <li class="mobile-nav nav-item" style="border-radius: 20px; width:60px;margin: auto ">
                    <a style="margin: auto" href="cart.php"><img src="assets/shoppingcarticon.png" style="width:27px !important;height:35px !important;">&nbsp;<span class="badge badge-secondary" style="position:relative; top: -15px;left: -15px; color: black; background-color: white;border-radius: 50%; "></span></a>
                </li>
                <li class="mobile-nav nav-item" style="border-radius: 20px; width:50px;margin: auto">
                    <a style="margin:auto" href="customer/my_account.php"><img src="assets/myaccounticon.png" style="width:27px !important;height:35px !important;"></a>
                </li>
                <li class="nav-item" >
                    <button class="lets-pixelate lets-pixelate2" style="background-color: black !important;font-family: Roboto Serif !important; left:0; text-align: center; vertical-align: middle ;height:35px !important; width:155px;">
                        <?php
                        if(isset($_SESSION['customer_email'])) {
                            $customer_email = $_SESSION['customer_email'];
                            $get_token = "select token from jwt_auth where email='$customer_email'; ";
                            $result = mysqli_query($con, $get_token);
                            $row = mysqli_fetch_assoc($result);
                            $token = $row['token'];
                            echo "<a href='https://create.thekoha.com/?token=$token' class='d-flex lets-pixelate2'
                   style='font-family: Roboto Serif !important;position:relative; border-radius: 10px ; background-color: transparent !important; height:30px !important; width: 145px; font-size: 17px; font-weight: bold; padding-top: 2px';>
                    <i class='fa fa-cubes'></i>Click to Create
                </a>";
                        }
                        else
                        {
                            echo "<a href='checkout.php' class='d-flex lets-pixelate2'
                   style='position:relative;font-family: Roboto Serif !important; height:30px !important; width: 145px; font-size: 17px; font-weight: bold'>
                    <i class='fa fa-cubes'></i>Click to Create
                </a>";
                        }
                        ?>
                    </button>
                </li>
            </ul>
        </div>

    </div>
</nav>
<script type="text/javascript">
    AOS.init();
</script>

