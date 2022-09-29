<?php
include('database.php');
session_start();
?>
<?php

if(!isset($_SESSION['customer_email'])){
    echo "<script>window.open('checkout.php','_self')</script>";
}
?>
<?php


include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>

<!--  <main>
    <!-- HERO -->
  <!--  <div class="nero" data-aos="slide-right"
    data-aos-offset="200"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="false"
    data-aos-anchor-placement="top-bottom">
      <div class="nero__heading">
        <span class="nero__bold">Forgot</span> password
      </div>
      <p class="nero__text">
      </p>
    </div>
  </main>-->

<div style="margin: 100px 0 20px 0">
    <div style="background-color: black; color: white">
        <div class="container">
            <div style="display: flex; justify-content: left">
                <h2 style="text-align:right; font-size: 20px !important;"><a style="color: #ddb253 !important;" href="index.php">Home&nbsp;</a></h2>
                <h2 style="color: white !important; font-size: 20px !important;"> / Transaction Cancellation</h2>
                <!--<ol>
                  <li><a href="index.html">Home</a></li>
                  <li>Customer Registration</li>
                </ol>-->
            </div>

        </div>
    </div>
</div>
<!-- <main id="main">-->
<!-- <section class="breadcrumbs" style="background-color: black; color: white;">-->
<!--      <div class="container">-->
<!---->
<!--        <div class="d-flex justify-content-between align-items-center">-->
<!--          <h2 class="textmove" style="text-align:right;"><a href="index.php">Home</a> / Forgot Password</h2>-->
<!--          <ol>-->
<!--            <li><a href="index.html">Home</a></li>-->
<!--            <li>Customer Registration</li>-->
<!--          </ol>-->
<!--        </div>-->
<!---->
<!--      </div>-->
<!--    </section>-->
<!--</main>-->
  
<br/>
<div id="content" data-aos="slide-right"
    data-aos-offset="200"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="false"
    data-aos-anchor-placement="top-bottom"><!-- content Starts -->
    <div class=" row" style="padding-right: 5%; padding-left: 5%;" ><!-- container Starts -->

<div class="col-md-12" ><!--- col-md-12 Starts -->
<!---->
<!--<ul class="breadcrumb" style="background-color: black; color: white">breadcrumb Starts -->

<!--<li>-->
<!--<a href="index.php">Home</a>-->
<!--</li>-->
<!---->
<!--<li>Register</li>-->
<!---->
<!--</ul>-->



</div><!--- col-md-12 Ends -->


<div class="col-md-12" ><!-- col-md-12 Starts -->

<div class="box"><!-- box Starts -->

<div class="box-header" style="background-color: #191c1f; color: white"><!-- box-header Starts -->

<center>
<img src="assets/cancel.png" alt="cancel image" style="width:100px !important;height:80px !important;">
</center>

</div><!-- box-header Ends -->

<div align="center"><!-- center div Starts -->

<h3 style="font-size:22px !important;font-style:bold;">Your transaction has been cancelled or failed! </h3>

</div><!-- center div Ends -->

</div><!-- box Ends -->

</div><!-- col-md-12 Ends -->


</div><!-- container Ends -->
</div><!-- content Ends -->
<br/>
<br/>
<br/>
<br/>
<?php

include("includes/footer.php");

?>
<script>document.title = "KOHA | Transaction Cancellation";</script>
<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/preloader.js"></script>	
<script src="koha.js"></script>
	<script src="js/init-round.js"></script>
	<script src="js/main.js"></script>
	<script src="js/plugin.js"></script>
<!--<script type="text/javascript">
    (function(d, m){
        var kommunicateSettings = 
            {"appId":"28697f7e85fe0fdff7aad97521eeac9c1","popupWidget":true,"automaticChatOpenOnNavigation":true};
        var s = document.createElement("script"); s.type = "text/javascript"; s.async = true;
        s.src = "https://widget.kommunicate.io/v2/kommunicate.app";
        var h = document.getElementsByTagName("head")[0]; h.appendChild(s);
        window.kommunicate = m; m._globals = kommunicateSettings;
    })(document, window.kommunicate || {});
/* NOTE : Use web server to view HTML files as real-time update will not work if you directly open the HTML file in the browser. */
</script>-->
<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>
<!--Start of Tawk.to Script-->

<!--End of Tawk.to Script-->
</body>
</html>

