<?// ob_start("ob_gzhandler"); ?>
<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");
require_once('customer/JWT.php');


?>

<div style="margin: 100px 0 20px 0">
    <div style="background-color: black; color: white">
        <div class="container">
            <div style="display: flex; justify-content: left">
                <h2 style="text-align:right; font-size: 20px !important;"><a style="color: #ddb253 !important;" href="index.php">Home&nbsp;</a></h2>
                <h2 style="color: white !important; font-size: 20px !important;"> / Get Started</h2>
                <!--<ol>
                  <li><a href="index.html">Home</a></li>
                  <li>Customer Registration</li>
                </ol>-->
            </div>

        </div>
    </div>
</div>

<br/>
<div id="content" data-aos="fade-up"
    data-aos-offset="200"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="false"
    data-aos-anchor-placement="top-bottom"><!-- content Starts -->
<div class=" row"  style=" padding-left: 5%; padding-right: 5%"><!-- container Starts -->




<div class="col-md-12 col-lg-12" ><!-- col-md-12 Starts -->

<?php

if(!isset($_SESSION['customer_email'])){

include("customer/customer_login.php");


}else{



}



?>


</div><!-- col-md-12 Ends -->


</div><!-- container Ends -->
</div><!-- content Ends -->
<br/>
<br/>
<?php

include("includes/footer.php");

?>
<script>document.title = "KOHA | Customer Login";</script>
<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/preloader.js"></script>
<script src="koha.js"></script>
	<script src="js/init-round.js"></script>
	<script src="js/main.js"></script>
	<script src="js/plugin.js"></script>

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>
</body>
</html>
