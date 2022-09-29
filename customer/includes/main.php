<?php
$customer_email = $_SESSION['customer_email'];
$cart_item_count = "SELECT count(*) as 'count' from cart where cust_email = '$customer_email' ";
$result2 = mysqli_query($con, $cart_item_count);
$result1 = mysqli_fetch_array($result2);
$count = $result1['count'];
//                echo "<script>alert('$count')</script>";
?>
<style> 
@media only screen and (min-width: 50px) and (max-width: 767px) {
#testyynana
{
}
}
@media only screen and (min-width: 768px) and (max-width: 992px) {
#testyynana
{
display: flex;
justify-content: center;
}
}
@media only screen and (min-width: 992px) {
#testyynana
{
}
}
@media only screen and (min-width: 50px) and (max-width: 992px) {
#testrx
{
width:103px;
}
}
@media only screen and (min-width: 993px)  {
#testrx
{

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
    }
    p,a, h1, h2, h3, h4, h5, h6,button {
        font-family: 'Georama' !important;
    }
    td{
        background-color: #191c1f;
        color: white;
    }
    @media (max-width: 970px) {
        .mobile-nav { visibility: hidden; color: white }
    }

    @media (min-width: 971px) {
        .desktop-nav { visibility: hidden;color: white; width: 0; height: 0 }
    }
    @media (max-width: 970px) {
        .sec-2 { margin-top: 220px; }
    }

    @media (min-width: 971px) {
        .sec-2 { margin-top: 0px; }
    }

    th{
        color: ghostwhite;
    }
    p{
        color: white;
    }
@media only screen and (min-width: 50px) and (max-width: 599px) {
	
		#amex
		{
		width:100%;
		}
	#headerlogotest
	{
	 max-width:130px;
	 height:35px;
	}
 }
 @media only screen and (min-width: 599px) and (max-width: 767px) {
	 
		#amex
		{
		width:100%;
		}
	 #headerlogotest
	{
	 max-width:160px;
	 height:40px;
	}
 }
 @media only screen and (min-width: 767px) and (max-width: 991px) {
	 
		#amex
		{
		width:100%;
		}
	 #headerlogotest
	{
	 max-width:185px;
	 height:45px;
	} 
 }
 @media only screen and (min-width: 991px) {
	 
		#amex
		{
		
		}
	  #headerlogotest
	{
	 max-width:185px;
	  height:45px;
	}
	 
 }
 @media (max-width: 970px) {
        .mobile-nav { 
		visibility: hidden;  
		width: 0 !important; 
		height: 0 !important;}
    }

    @media (min-width: 971px) {
        .desktop-nav { 
		visibility: hidden;  
		width: 0 !important; 
		height: 0 !important; }
    } 
</style></head>

<body id="testbody" style="overflow-x: hidden;color: white !important; background-color: black !important; font-family: Roboto Serif !important;">

	
	<!--====== Header Section Start ======-->


    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-black navbar-static-top" style="position:fixed;width:100%;margin-top: 0; background-color: black !important; color: white; padding: 20px 1%">
        <div class="container-fluid navbar-mini d-flex justify-content-between" style=" display: flex">
            <div style="float: left;"> <a href="../index.php" style="cursor: inherit !important;">
                    <img id="headerlogotest" style="cursor: inherit !important;" src="img/koha-logo-2.png" alt=""><!-- Logo -->
                </a>
            </div>
            <div style="float: right; margin-left: auto">
                <a class="desktop-nav nav-item" style="" href="../cart.php"><img src="../assets/shoppingcarticon.png" style="width:30px !important;height:30px !important;"><span class="badge badge-secondary" style="position:relative; top: -15px;left: -15px; color: black; background-color: white;border-radius: 50%;padding: 0.35em 0.60em !important; "><?php echo "$count";?></span></a>
                <a class="desktop-nav nav-item" style="padding-right: 5px" href="../customer/my_account.php"><img src="../assets/myaccounticon.png" style="width:30px !important;height:30px !important;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" style="background-color: grey; aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
        <div class="d-flex justify-content-end" id="amex">
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background-color: black !important;">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="background-color: black !important;display: flex;
    align-items: center;">
                    <li class="nav-item" style="border-radius: 20px; width:100px">
                        <a class="nav-link" style="background-color: black !important; color:white !important;font-family: Roboto Serif !important; border-radius: 20px" aria-current="page" href="../aboutus.php">Our Story</a>
                    </li>
                    <li class="nav-item" style="border-radius: 20px; width:130px">
                        <a class="nav-link" style="background-color: black !important; color:white !important;font-family: Roboto Serif !important; border-radius: 20px" href="../howitworks.php">How it Works</a>
                    </li>
                    <li class="nav-item" style="border-radius: 20px; width:70px">
                        <a class="nav-link" style="background-color: black !important; color:white !important;font-family: Roboto Serif !important; border-radius: 20px" href="../shop.php">Gallery</a>
                    </li>
                    <li class="nav-item" style="border-radius: 20px; width:110px; padding-right: 10px">
                        <a class="nav-link" style="background-color: black !important; color:white !important;font-family: Roboto Serif !important; border-radius: 20px ; width:110px" href="../accessories.php">Accessories</a>
                    </li>
                    <li class="nav-item" style="border-radius: 20px; width:50px; padding-right: 10px">
                        <a class="nav-link" style="background-color: black !important; color:white !important;font-family: Roboto Serif !important; border-radius: 20px ; width:50px" href="../faq.php">FAQ</a>
                    </li>
						 <li class="nav-item" style="border-radius: 20px; padding-right: 10px;" id="testrx">
                    <a class="nav-link" style="background-color: black !important;color:white;font-family: Roboto Serif !important; border-radius: 20px ; width:103px" href="../contactus.php">Contact Us</a>
                </li>
                    <li class="mobile-nav nav-item" style="border-radius: 20px; width:60px;margin: auto ">
                        <a style="margin: auto; color: black" href="../cart.php"><img src="../assets/shoppingcarticon.png" style="width:27px !important;height:35px !important;"><span class="badge badge-secondary" style="position:relative; top: -15px;left: -15px; color: black; background-color: white;border-radius: 50%;padding: 0.35em 0.60em !important; "><?php echo "$count";?></span></a>
                    </li>
                    <li class="mobile-nav nav-item" style="border-radius: 20px; width:50px;margin: auto">
                        <a style="margin:auto; color: white" href="../customer/my_account.php"><img src="../assets/myaccounticon.png" style="width:27px !important;height:35px !important;"></a>
                    </li>
                    <li class="nav-item" >
                    <button class="lets-pixelate lets-pixelate2" style="background-color: black !important;font-family: Roboto Serif !important; left:0; text-align: center; vertical-align: middle ;height:35px !important; width: 155px; overflow: hidden;padding: 0;">
                        <?php
                        if(isset($_SESSION['customer_email'])) {
                            $customer_email = $_SESSION['customer_email'];
                            $get_token = "select token from jwt_auth where email='$customer_email'; ";
                            $result = mysqli_query($con, $get_token);
                            $row = mysqli_fetch_assoc($result);
                            $token = $row['token'];
                            echo "<a href='https://create.thekoha.com/?token=$token' class='d-flex lets-pixelate2'
                   style='font-family: Roboto Serif !important;position:relative;justify-content: center; border-radius: 10px ; background-color: transparent !important; height:30px !important; width: 145px; font-size: 17px; font-weight: bold; padding-top: 2px;'>
                    <i class='fa fa-cubes'></i>&nbsp;&nbsp;Start Here
                </a>";
                        }
                        else
                        {
                            echo "<a href='checkout.php' class='d-flex lets-pixelate2'
                   style='font-family: Roboto Serif !important;position:relative;justify-content: center; border-radius: 10px ; background-color: transparent !important; height:30px !important; width: 145px; font-size: 17px; font-weight: bold; padding-top: 2px;'>
                    <i class='fa fa-cubes'></i>&nbsp;&nbsp;Start Here
                </a>";
                        }
                        ?>
                    </button>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
    <div class="sec-2" style="margin-top:100px !important;">

    </div>
	<script type="text/javascript">
  AOS.init();
</script>


  