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

  <!-- MAIN -->
  <div style="margin: 100px 0 20px 0">
    <div style="background-color: black; color: white">
        <div class="container">
            <div style="display: flex; justify-content: left">
                <p style="text-align:right; text-decoration: none; font-size: 20px !important;"><a style="text-decoration: none; color: #ddb253 !important;" href="index.php">Home&nbsp;</a></p>
                <p style="color: white !important; font-size: 20px !important;"> / Local Stores</p>
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
           style="height: auto;object-fit: cover; width: 100vw; max-height: 60vh; " alt="">
        <div class='overlay'>
            <h1 style="font-size: 5vw !important; font-family: Roboto Serif !important;color: #ddb253 !important;"
                data-aos="fade-up"
                data-aos-duration="30000">Local Stores</h1>
        </div>
    </span>
        </div>
    </section>

  <section style="padding-bottom: 30px ; padding-top:40px"
                    >
                        <div style="margin: 0 0">
                            <h3 style=";text-transform:uppercase;text-align:center; margin: 0px;color:#ffffff !important;">Local Stores</h3>
                        </div>
                    </section>
<br/>
                   <div id="content" data-aos="slide-right"
    data-aos-offset="200"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="false"
    data-aos-anchor-placement="top-bottom"><!-- content Starts -->

<div class="container-fluid" ><!-- container Starts -->






<div class="col-md-12" style="width:100% !important;"><!-- col-md-12 Starts -->

<div class="services row">

<?php

$get_services = "select * from store";

$run_services = mysqli_query($con,$get_services);
while($row_services = mysqli_fetch_array($run_services)) {

$service_id = $row_services['store_id'];

$service_title = $row_services['store_title'];

$service_image = $row_services['store_image'];

$service_desc = $row_services['store_desc'];

$service_button = $row_services['store_button'];

$service_url = $row_services['store_url'];


?>
<div class="col-md-4 col-sm-6 box"  style='background-color: black; color: white !important'>

<div class='product'  style=' background-color: #000000; color: white;border:1px solid #ffffff !important;border-radius:10px !important;' >

<center>

<img src='admin_area/store_images/<?php echo $service_image; ?>' style='padding:20px !important;height:587px !important;' class='img-responsive' >

</center>
<div class='text' >

<center>



</center>


<h2 align="center" id="storename" style="background-color: #000000 !important; color: white !important"><?php echo $service_title; ?></h2>

<p style="background-color: #000000 !important; color: white !important;margin-top:0px !important;"> <?php echo $service_desc; ?></p>

<center>

<a href="<?php echo $service_url; ?>" class="btn btn-primary">
<?php echo $service_button; ?>

</a>

</center>
<br/>
</div>


</div>
</div>

<?php } ?>
</div><!-- services row Ends -->

</div><!-- col-md-12 Ends -->



</div><!-- container Ends -->
</div><!-- content Ends -->

<?php

include("includes/footer.php");

?>
<script>document.title = "KOHA | Local Stores";</script>
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
