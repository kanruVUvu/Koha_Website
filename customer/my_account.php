<?php

session_start();

if(!isset($_SESSION['customer_email'])){

echo "<script>window.open('../checkout.php','_self')</script>";


}else {

include("includes/db.php");
include("../includes/header.php");
include("functions/functions.php");
include("includes/main.php");


?>
 <!-- <main>
    <!-- HERO -->
   <!-- <div class="nero">
      <div class="nero__heading" data-aos="slide-right"
    data-aos-offset="200"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="false"
    data-aos-anchor-placement="top-bottom">
        <span class="nero__bold">My Account</span>
      </div>
      <p class="nero__text">
      </p>
    </div>
  </main>-->
    <div style="margin: 100px 0 20px 0">
        <div style="background-color: black; color: white">
            <div class="container">
                <div style="display: flex; justify-content: left">
                    <p style="text-align:right; text-decoration: none; font-size: 20px !important;"><a style="text-decoration: none; color: #ddb253 !important;" href="index.php">Home&nbsp;</a></p>
                    <p style="color: white !important; font-size: 20px !important;"> / My Account</p>
                </div>
            </div>
        </div>
    </div>
  <main id="main">
<!-- <section class="breadcrumbs"style=" background-color: black; color: white">-->
<!--      <div class="container">-->
<!---->
<!--        <div class="d-flex justify-content-between align-items-center">-->
<!--          <h2 class="textmove" style="text-align:right;"><a href="../index.php">Home</a> / My Account</h2>-->
<!--          <ol>-->
<!--            <li><a href="index.html">Home</a></li>-->
<!--            <li>Customer Registration</li>-->
<!--          </ol>-->
<!--        </div>-->
<!---->
<!--      </div>-->
<!--    </section>-->
</main>
<br/>
<br/>
<div id="content" data-aos="slide-right"
    data-aos-offset="200"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="false"
    data-aos-anchor-placement="top-bottom"><!-- content Starts -->
<div class="container row" ><!-- container Starts -->



<div class="col-md-12"><!-- col-md-12 Starts -->

<?php

$c_email = $_SESSION['customer_email'];

$get_customer = "select * from customers where customer_email='$c_email'";

$run_customer = mysqli_query($con,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_confirm_code = $row_customer['customer_confirm_code'];

$c_name = $row_customer['customer_name'];

if(!empty($customer_confirm_code)){

?>

<!-- alert alert-danger Ends -->

<?php } ?>

</div><!-- col-md-12 Ends -->
<div class="row">
<div class="col-md-12 col-lg-3 col-sm-12 col-xs-12 "><!-- col-md-3 Starts -->

<?php include("includes/sidebar.php"); ?>

</div><!-- col-md-3 Ends -->


<div class="col-md-9 col-lg-9 col-sm-12 col-xs-12" ><!--- col-md-9 Starts -->

<div class="box" id="testbox2"><!-- box Starts -->

<?php

if(isset($_GET[$customer_confirm_code])){

$update_customer = "update customers set customer_confirm_code='' where customer_confirm_code='$customer_confirm_code'";

$run_confirm = mysqli_query($con,$update_customer);

echo "<script>alert('Your Email Has Been Confirmed')</script>";

echo "<script>window.open('my_account.php?my_orders','_self')</script>";

}

if(isset($_GET['send_email'])){

$subject = "Email Confirmation Message";

$from = "pavan.rajanna93@gmail.com";

$message = "

<h2>
Email Confirmation By Koha Website $c_name
</h2>

<a href='http://www.thekoha.com/customer/my_account.php?$customer_confirm_code'>

Click Here To Confirm Email

</a>

";

$headers = "From: $from \r\n";

$headers .= "Content-type: text/html\r\n";

mail($c_email,$subject,$message,$headers);

echo "<script>alert('Your Confirmation Email Has Been sent to you, check your inbox')</script>";

echo "<script>window.open('my_account.php?my_orders','_self')</script>";

}



if(isset($_GET['my_orders'])){

include("my_orders.php");

}

if(isset($_GET['pay_offline'])) {

include("pay_offline.php");

}

if(isset($_GET['edit_account'])) {

include("edit_account.php");

}

if(isset($_GET['change_pass'])){

include("change_pass.php");

}

if(isset($_GET['delete_account'])){

include("delete_account.php");

}

if(isset($_GET['my_wishlist'])){

include("my_wishlist.php");

}

if(isset($_GET['delete_wishlist'])){

include("delete_wishlist.php");

}

?>

</div><!-- box Ends -->

</div><!--- col-md-9 Ends -->

</div>
</div><!-- container Ends -->
</div><!-- content Ends -->
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<!--    --><?php
//    $customer_email = $_SESSION['customer_email'];
//    $get_token = "select token from jwt_auth where email='$customer_email'; ";
//    $token = mysqli_query($con, $get_token);
//    ?>


<!--    <section style="height: 200px">-->
<!---->
<!--        <a href="https://create.thekoha.com/?token=--><?php //echo $token; ?><!--"><h1>Click here</h1></a>-->
<!--    </section>-->


<?php

include("includes/footer.php");

?>

<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/preloader.js"></script>	
<script src="koha.js"></script>
	<script src="js/init-round.js"></script>
	<script src="js/main.js"></script>
	<script src="js/plugin.js"></script>

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>
    <script>document.title = "KOHA | My Account";</script>
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
</div>
</body>
</html>
<?php } ?>
