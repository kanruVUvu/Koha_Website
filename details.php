<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>
<?php
include('database.php');
//session_start();
?>
<?php

if(!isset($_SESSION['customer_email'])){
    echo "<script>window.open('checkout.php','_self')</script>";
}

$em = $_SESSION['customer_email'];

/*echo "<script>alert('<?php echo $em; ?>')</script>"*/

?>



<?php

$product_id = @$_GET['pro_id'];

$get_product = "select * from products where product_url='$product_id'";

$run_product = mysqli_query($con,$get_product);

$check_product = mysqli_num_rows($run_product);

if($check_product == 0){

    echo "<script> window.open('index.php','_self') </script>";

}
else{

$row_product = mysqli_fetch_array($run_product);

$p_cat_id = $row_product['p_cat_id'];

$pro_id = $row_product['product_id'];

$pro_type = $row_product['product_type'];

$pro_title = $row_product['product_title'];

$pro_vb = $row_product['v_size'];

$pro_hb = $row_product['h_size'];

$pro_price = $row_product['product_price'];

$pro_desc = $row_product['product_desc'];

$pro_img1 = $row_product['product_img1'];

$pro_img2 = $row_product['product_img2'];

$pro_img3 = $row_product['product_img3'];

$pro_label = $row_product['product_label'];

$pro_psp_price = $row_product['product_psp_price'];

$pro_features = $row_product['product_features'];

$pro_video = $row_product['product_video'];

$status = $row_product['status'];

$pro_url = $row_product['product_url'];

if($pro_label == ""){


}
else{

    $product_label = "";

}

$get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";

$run_p_cat = mysqli_query($con,$get_p_cat);

$row_p_cat = mysqli_fetch_array($run_p_cat);

$p_cat_title = $row_p_cat['p_cat_title'];




?>
<style>
@media only screen and (max-width: 768px) {
#testffy
{
display:flex !important;
justify-content:center !important;
align-items:center !important;
}
}
@media only screen and (min-width: 768px) {
#testffy
{

}
}
</style>
<!-- <main>
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
      <span class="nero__bold">Product </span>View
    </div>
    <p class="nero__text">
    </p>
  </div>
</main>-->
<main id="main">

    <div style="margin: 100px 0 20px 0">
        <div style="background-color: black; color: white">
            <div class="container">
                <div style="display: flex; justify-content: left">
                    <h2 style="text-align:right; font-size: 16px !important;"><a style="color: #ddb253 !important;" href="index.php">Home&nbsp;</a></h2>
                    <h2 style="color: white !important; font-size: 16px !important;"> / Product Details</h2>
                    <!--<ol>
                      <li><a href="index.html">Home</a></li>
                      <li>Customer Registration</li>
                    </ol>-->
                </div>

            </div>
        </div>
    </div>
    <!-- <section class="breadcrumbs" style="background-color: black; color: white">-->
    <!--      <div class="container">-->
    <!---->
    <!--        <div class="d-flex justify-content-between align-items-center">-->
    <!--          <h2 style="text-align:right;"><a href="index.php">Home</a> / Product Details</h2>-->
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
    <div class="container" ><!-- container Starts -->


        <div class="row">


            <div class="col-md-12" ><!-- col-md-12 Starts -->

                <div class="row" id="productMain" style="padding-bottom: 30px"><!-- row Starts -->

                    <div class="col-sm-6"><!-- col-sm-6 Starts -->
                      
                        <div id="mainImage" style="max-width: 480px; max-height: 480px"><!-- mainImage Starts -->
						<?php


                            if($pro_url == 'rudra-image'){
								?>
                            <div id="img-small">
                                <img intrinsicsize="3236*3236" src="admin_area/product_images/<?php echo $pro_img1; ?>" class="img-responsive" style="padding: 20px;
    background-color: #000000;
    color: white;
    border: 1px solid #ffffff !important;
    border-radius: 10px !important;width:480px !important;height:483px !important;">
                            </div>
                            <div id="img-medium">
                                <img intrinsicsize="3236*3236" src="admin_area/product_images/<?php echo $pro_img2; ?>" class="img-responsive" style="padding: 20px;
    background-color: #000000;
    color: white;
    border: 1px solid #ffffff !important;
    border-radius: 10px !important;width:480px !important;height:483px !important;">
                            </div>
                            <div id="img-large">
                                <img intrinsicsize="3236*3236" src="admin_area/product_images/<?php echo $pro_img3; ?>" class="img-responsive" style="padding: 20px;
    background-color: #000000;
    color: white;
    border: 1px solid #ffffff !important;
    border-radius: 10px !important;width:480px !important;height:476.47px !important;">
                            </div>
							<?php } else if($pro_url == 'mandala-image') {?>
							 <div id="img-small">
                                <img intrinsicsize="3236*3236" src="admin_area/product_images/<?php echo $pro_img1; ?>" class="img-responsive" style="padding: 20px;
    background-color: #000000;
    color: white;
    border: 1px solid #ffffff !important;
    border-radius: 10px !important;width:480px !important;height:483px !important;">
                            </div>
                            <div id="img-medium">
                                <img intrinsicsize="3236*3236" src="admin_area/product_images/<?php echo $pro_img2; ?>" class="img-responsive" style="padding: 20px;
    background-color: #000000;
    color: white;
    border: 1px solid #ffffff !important;
    border-radius: 10px !important;width:480px !important;height:483px !important;">
                            </div>
                            <div id="img-large">
                                <img intrinsicsize="3236*3236" src="admin_area/product_images/<?php echo $pro_img3; ?>" class="img-responsive" style="padding: 20px;
    background-color: #000000;
    color: white;
    border: 1px solid #ffffff !important;
    border-radius: 10px !important;width:480px !important;height:476.47px !important;">
                            </div>
							<?php } else if($pro_url == 'precious-pooch') {?>
							 <div id="img-small">
                                <img intrinsicsize="3236*3236" src="admin_area/product_images/<?php echo $pro_img1; ?>" class="img-responsive" style="padding: 20px;
    background-color: #000000;
    color: white;
    border: 1px solid #ffffff !important;
    border-radius: 10px !important;width:480px !important;height:483px !important;">
                            </div>
                            <div id="img-medium">
                                <img intrinsicsize="3236*3236" src="admin_area/product_images/<?php echo $pro_img2; ?>" class="img-responsive" style="padding: 20px;
    background-color: #000000;
    color: white;
    border: 1px solid #ffffff !important;
    border-radius: 10px !important;width:480px !important;height:483px !important;">
                            </div>
                            <div id="img-large">
                                <img intrinsicsize="3236*3236" src="admin_area/product_images/<?php echo $pro_img3; ?>" class="img-responsive" style="padding: 20px;
    background-color: #000000;
    color: white;
    border: 1px solid #ffffff !important;
    border-radius: 10px !important;width:480px !important;height:476.47px !important;">
                            </div>
							<?php } else if($pro_url == 'ojos-image') {?>
							 <div id="img-small">
                                <img intrinsicsize="3236*3236" src="admin_area/product_images/<?php echo $pro_img1; ?>" class="img-responsive" style="padding: 20px;
    background-color: #000000;
    color: white;
    border: 1px solid #ffffff !important;
    border-radius: 10px !important;width:480px !important;height:483px !important;">
                            </div>
                            <div id="img-medium">
                                <img intrinsicsize="3236*3236" src="admin_area/product_images/<?php echo $pro_img2; ?>" class="img-responsive" style="padding: 20px;
    background-color: #000000;
    color: white;
    border: 1px solid #ffffff !important;
    border-radius: 10px !important;width:480px !important;height:483px !important;">
                            </div>
                            <div id="img-large">
                                <img intrinsicsize="3236*3236" src="admin_area/product_images/<?php echo $pro_img3; ?>" class="img-responsive" style="padding: 20px;
    background-color: #000000;
    color: white;
    border: 1px solid #ffffff !important;
    border-radius: 10px !important;width:480px !important;height:476.47px !important;">
                            </div>
							<?php } else {?>
							
							<div id="img-small">
                                <img intrinsicsize="3236*3236" src="admin_area/product_images/<?php echo $pro_img1; ?>" class="img-responsive" style="padding: 20px;
    background-color: #000000;
    color: white;
    border: 1px solid #ffffff !important;
    border-radius: 10px !important;">
                            </div>
                            <div id="img-medium">
                                <img intrinsicsize="3236*3236" src="admin_area/product_images/<?php echo $pro_img2; ?>" class="img-responsive" style="padding: 20px;
    background-color: #000000;
    color: white;
    border: 1px solid #ffffff !important;
    border-radius: 10px !important;">
                            </div>
                            <div id="img-large">
                                <img intrinsicsize="3236*3236" src="admin_area/product_images/<?php echo $pro_img3; ?>" class="img-responsive" style="padding: 20px;
    background-color: #000000;
    color: white;
    border: 1px solid #ffffff !important;
    border-radius: 10px !important;">
                            </div>
							<?php } ?>
                        </div>
                        <!-- mainImage Ends -->

                        <?php echo $product_label; ?>

                    </div><!-- col-sm-6 Ends -->


                    <div class="col-sm-6" ><!-- col-sm-6 Starts -->

                        <div class="box" style="padding-top: 0"><!-- box Starts -->
                         <?php


                            if($pro_url == 'rudra-image'){
								?>   
                            <h1 class="text-center" style="padding-bottom: 20px;" id="testingphase" ><?php echo $pro_title; ?></h1>
					        <p class="text-center" style="padding-bottom: 20px;color:#FFFFFF;">A colourful representation of the supreme lord capturing him with vibrant hues with a background of designs to showcase a serene side of the deity. Add a touch of divinity to art and make the spiritual journey truly yours.</p>
                         <?php } else if($pro_url == 'iron-man'){ ?>
						 <h1 class="text-center" style="padding-bottom: 20px;" id="testingphase" ><?php echo $pro_title; ?></h1>
					        <p class="text-center" style="color:#FFFFFF;padding-bottom: 20px;">Showcasing the vibrant hues of the one who saved the world with his technology and a snap of his finger. Add spin to your Marvel merchandise with Koha, making it specially for you.</p>
                         <?php } else if($pro_url == 'the-joker'){ ?>
						 <h1 class="text-center" style="padding-bottom: 20px;" id="testingphase" ><?php echo $pro_title; ?></h1>
					        <p class="text-center" style="color:#FFFFFF;padding-bottom: 20px;">Highlighting the various shades of the man who inspired revolution through laughter. Bringing out a different version of the menacing villain who is a favourite among DC fans. Make merchandise unique with Koha.</p>
                         <?php } else if($pro_url == 'king-of-the-jungle'){ ?>
						 <h1 class="text-center" style="padding-bottom: 20px;" id="testingphase" ><?php echo $pro_title; ?></h1>
					        <p class="text-center" style="color:#FFFFFF;padding-bottom: 20px;">Capturing the majestic side of the King of the Jungle and expressing a sophisticated side to the animal. Narrow in on the finest of details that make your piece captivating</p>
                         <?php } else if($pro_url == 'gowthama-image'){ ?>
						 <h1 class="text-center" style="padding-bottom: 20px;" id="testingphase" ><?php echo $pro_title; ?></h1>
					        <p class="text-center" style="color:#FFFFFF;padding-bottom: 20px;">Showcasing the enlightened one through the various hues of blue to reflect the calmness of the deity. Add a touch of tranquility to your home to create your very own meditation space.</p>
                         <?php } else if($pro_url == 'eye-of-the-storm'){ ?>
						 <h1 class="text-center" style="padding-bottom: 20px;" id="testingphase" ><?php echo $pro_title; ?></h1>
					        <p class="text-center" style="color:#FFFFFF;padding-bottom: 20px;">An expressive representation of a woman amidst a flurry of colours. This beautiful piece of art represents someone caught in a fast-paced world.</p>
                         <?php } else if($pro_url == 'mans-best-friend'){ ?>
						 <h1 class="text-center" style="padding-bottom: 20px;" id="testingphase" ><?php echo $pro_title; ?></h1>
					        <p class="text-center" style="color:#FFFFFF;padding-bottom: 20px;">A representation of the fluffy ears and fur that we all fall in love with, adding a rich use of colour to highlight the various textures. Make every picture of your furbaby uniquely yours by adding colours and accentuating their various features.</p>
                         <?php } else if($pro_url == 'mandala-image'){ ?>
						 <h1 class="text-center" style="padding-bottom: 20px;" id="testingphase" ><?php echo $pro_title; ?></h1>
					        <p class="text-center" style="color:#FFFFFF;padding-bottom: 20px;">Bringing to you the designs of ancient India and reviving them with a touch of the 21st Century. Create an artistic look to stylise your space with Indian influenced art.</p>
                         <?php } else if($pro_url == 'abstract-wheel'){ ?>
						  <h1 class="text-center" style="padding-bottom: 20px;" id="testingphase" ><?php echo $pro_title; ?></h1>
					        <p class="text-center" style="color:#FFFFFF;padding-bottom: 20px;">Showcasing the geometrical designs using various colours of the palette to show the modern take on art. Get creative and experiment with modern art to add a stylish touch to your space.</p>
                           <?php } else if($pro_url == 'precious-pooch'){ ?>
						  <h1 class="text-center" style="padding-bottom: 20px;" id="testingphase" ><?php echo $pro_title; ?></h1>
					        <p class="text-center" style="color:#FFFFFF;padding-bottom: 20px;">Lets get your pooch’s best of pictures on the wall Highlighting those captivating ‘puppy eyes’ with vivid colours and geometrical lines to highlight its beautiful features. Make your photos of your loved ones unique by adding various designs and colours.</p> 
							 <?php } else if($pro_url == 'ojos-image'){ ?>
						  <h1 class="text-center" style="padding-bottom: 20px;" id="testingphase" ><?php echo $pro_title; ?></h1>
					        <p class="text-center" style="color:#FFFFFF;padding-bottom: 20px;">The word simply means eye in Spanish. Open your eyes to a palette of colours. Catch the smallest of details and highlight what one would miss out on. Bring out the beauty of the finest of details with our pixelation software.</p> 
							 <?php } else if($pro_url == 'leo-image'){ ?>
						  <h1 class="text-center" style="padding-bottom: 20px;" id="testingphase" ><?php echo $pro_title; ?></h1>
					        <p class="text-center" style="color:#FFFFFF;padding-bottom: 20px;">Showing the various textures of the lion through a vivid portrayal using various colours of a palette. Make every picture unique by highlighting various features to create a distinctive look to every photo.</p> 
							 <?php } else if($pro_url == 'koi-image'){ ?>
						  <h1 class="text-center" style="padding-bottom: 20px;" id="testingphase" ><?php echo $pro_title; ?></h1>
					        <p class="text-center" style="color:#FFFFFF;padding-bottom: 20px;">Artistic representation of the aquatic animal symbolises growth, good fortune and success in many Asian countries. Bring in the good luck this fish represents to your homes.</p> 
							 <?php } else if($pro_url == 'marilyn-monroe'){ ?>
						  <h1 class="text-center" style="padding-bottom: 20px;" id="testingphase" ><?php echo $pro_title; ?></h1>
					        <p class="text-center" style="color:#FFFFFF;padding-bottom: 20px;">Depicting the unapologetic beauty and aura of the iconic Marilyn Monroe in a simple yet striking monochrome. A wise girl knows her limits, a smart girl knows she has none” - Marilyn Monroe</p> 
							<?php } else { ?>
						  <h1 class="text-center" style="padding-bottom: 20px;" id="testingphase" ><?php echo $pro_title; ?></h1>
					        <?php } ?>
							<?php


                            if(isset($_POST['add_cart'])){

                                $ip_add = getRealUserIp();

                                $p_id = $pro_id;

                                $p_type = $pro_type;

                                $product_qty = $_POST['product_qty'];

                                $product_size = $_POST['product_size'];

                                $check_product = "select * from cart where cust_email='$em' AND p_id='$p_id'";

                                $run_check = mysqli_query($con,$check_product);

                                
                              

                                    $get_price = "select * from products where product_id='$p_id'";

                                    $run_price = mysqli_query($con,$get_price);

                                    $row_price = mysqli_fetch_array($run_price);

                                    $pro_price = $row_price['product_price'];

                                    $pro_psp_price = $row_price['product_psp_price'];

                                    $pro_label = $row_price['product_label'];
                                    $pro_url = $row_price['product_url'];
									$pro_id = $row_price['product_id'];
									
									$pro_vb = $row_price['v_size'];

$pro_hb = $row_price['h_size'];
                                    if($pro_label == "Sale" or $pro_label == "Gift"){

                                        $product_price = $pro_psp_price;

                                    }
                                    else{

                                        $product_price = $pro_price;
                                        $u_price = 0;

                                    }
                                    if($pro_type == 'Marketplace' && $pro_url == 'gowthama-image'){
                                        if ($product_size == 'Large') {
                                            $x = 999;
                                            $y = 12;
                                            $z = $x*$y;
                                            $product_price= $product_qty * $z;
                                            $u_price = $z;
											$pro_titletest = "Gowthama1";
//        echo "<script>alert('Large: '+ $x*$y)";
                                        }
                                        if ($product_size == 'Medium') {
                                            $x = 999;
                                            $y = 6;
                                            $z = $x*$y;
                                            $product_price=$product_qty * $z;
                                            $u_price =  $z;
											$pro_titletest = "Gowthama2";
//        echo "<script>alert('Medium: '+ $x*$y)";
                                        }
                                        if ($product_size == 'Small') {
                                            $x = 999;
                                            $y = 4;
                                            $z = $x*$y;
                                            $product_price= $product_qty * $z;
                                            $u_price = $z;
											$pro_titletest = "Gowthama3";
//        echo "<script>alert('Small: '+ $x*$y)";
                                        }
                                    }
									else if($pro_type == 'Marketplace' && $pro_url == 'koi-image'){
                                        if ($product_size == 'Large') {
                                            $x = 999;
                                            $y = 20;
                                            $z = $x*$y;
                                            $product_price= $product_qty * $z;
                                            $u_price = $z;
											$pro_titletest = "Koi1";
//        echo "<script>alert('Large: '+ $x*$y)";
                                        }
                                        if ($product_size == 'Medium') {
                                            $x = 999;
                                            $y = 12;
                                            $z = $x*$y;
                                            $product_price=$product_qty * $z;
                                            $u_price =  $z;
											$pro_titletest = "Koi2";
//        echo "<script>alert('Medium: '+ $x*$y)";
                                        }
                                        if ($product_size == 'Small') {
                                            $x = 999;
                                            $y = 6;
                                            $z = $x*$y;
                                            $product_price= $product_qty * $z;
                                            $u_price = $z;
											$pro_titletest = "Koi3";
//        echo "<script>alert('Small: '+ $x*$y)";
                                        }
                                    }
									else if($pro_type == 'Marketplace' && $pro_url == 'ojos-image'){
                                        if ($product_size == 'Large') {
                                            $x = 999;
                                            $y = 12;
                                            $z = $x*$y;
                                            $product_price= $product_qty * $z;
                                            $u_price = $z;
											$pro_titletest = "Ojos1";
//        echo "<script>alert('Large: '+ $x*$y)";
                                        }
                                        if ($product_size == 'Medium') {
                                            $x = 999;
                                            $y = 9;
                                            $z = $x*$y;
                                            $product_price=$product_qty * $z;
                                            $u_price =  $z;
											$pro_titletest = "Ojos2";
//        echo "<script>alert('Medium: '+ $x*$y)";
                                        }
                                       
                                    }
									else if($pro_type == 'Marketplace' && $pro_url == 'leo-image'){
                                        if ($product_size == 'Large') {
                                            $x = 999;
                                            $y = 12;
                                            $z = $x*$y;
                                            $product_price= $product_qty * $z;
                                            $u_price = $z;
											$pro_titletest = "Leo1";
//        echo "<script>alert('Large: '+ $x*$y)";
                                        }
                                        if ($product_size == 'Medium') {
                                            $x = 999;
                                            $y = 6;
                                            $z = $x*$y;
                                            $product_price=$product_qty * $z;
                                            $u_price =  $z;
											$pro_titletest = "Leo2";
//        echo "<script>alert('Medium: '+ $x*$y)";
                                        }
                                      
                                    }
									else if($pro_type == 'Marketplace' && $pro_url == 'king-of-the-jungle'){
                                        if ($product_size == 'Large') {
                                            $x = 999;
                                            $y = 12;
                                            $z = $x*$y;
                                            $product_price= $product_qty * $z;
                                            $u_price = $z;
											$pro_titletest = "KJ1";
//        echo "<script>alert('Large: '+ $x*$y)";
                                        }
                                        if ($product_size == 'Medium') {
                                            $x = 999;
                                            $y = 6;
                                            $z = $x*$y;
                                            $product_price=$product_qty * $z;
                                            $u_price =  $z;
											$pro_titletest = "KJ2";
//        echo "<script>alert('Medium: '+ $x*$y)";
                                        }
                                        if ($product_size == 'Small') {
                                            $x = 999;
                                            $y = 4;
                                            $z = $x*$y;
                                            $product_price= $product_qty * $z;
                                            $u_price = $z;
											$pro_titletest = "KJ3";
//        echo "<script>alert('Small: '+ $x*$y)";
                                        }
                                    }
									else if($pro_type == 'Marketplace' && $pro_url == 'abstract-wheel'){
                                        if ($product_size == 'Large') {
                                            $x = 999;
                                            $y = 16;
                                            $z = $x*$y;
                                            $product_price= $product_qty * $z;
                                            $u_price = $z;
											$pro_titletest = "AW1";
//        echo "<script>alert('Large: '+ $x*$y)";
                                        }
                                        if ($product_size == 'Medium') {
                                            $x = 999;
                                            $y = 6;
                                            $z = $x*$y;
                                            $product_price=$product_qty * $z;
                                            $u_price =  $z;
											$pro_titletest = "AW2";
//        echo "<script>alert('Medium: '+ $x*$y)";
                                        }
                                        if ($product_size == 'Small') {
                                            $x = 999;
                                            $y = 4;
                                            $z = $x*$y;
                                            $product_price= $product_qty * $z;
                                            $u_price = $z;
											$pro_titletest = "AW3";
//        echo "<script>alert('Small: '+ $x*$y)";
                                        }
                                    }
										else if($pro_type == 'Marketplace' && $pro_url == 'iron-man'){
                                        if ($product_size == 'Large') {
                                            $x = 999;
                                            $y = 12;
                                            $z = $x*$y;
                                            $product_price= $product_qty * $z;
                                            $u_price = $z;
											$pro_titletest = "IM1";
//        echo "<script>alert('Large: '+ $x*$y)";
                                        }
                                        if ($product_size == 'Medium') {
                                            $x = 999;
                                            $y = 6;
                                            $z = $x*$y;
                                            $product_price=$product_qty * $z;
                                            $u_price =  $z;
											$pro_titletest = "IM2";
//        echo "<script>alert('Medium: '+ $x*$y)";
                                        }
                                       
                                    }
										else if($pro_type == 'Marketplace' && $pro_url == 'the-joker'){
                                        if ($product_size == 'Large') {
                                            $x = 999;
                                            $y = 12;
                                            $z = $x*$y;
                                            $product_price= $product_qty * $z;
                                            $u_price = $z;
											$pro_titletest = "TJ1";
//        echo "<script>alert('Large: '+ $x*$y)";
                                        }
                                        if ($product_size == 'Medium') {
                                            $x = 999;
                                            $y = 6;
                                            $z = $x*$y;
                                            $product_price=$product_qty * $z;
                                            $u_price =  $z;
											$pro_titletest = "TJ2";
//        echo "<script>alert('Medium: '+ $x*$y)";
                                        }
                                      
                                    }
										else if($pro_type == 'Marketplace' && $pro_url == 'eye-of-the-storm'){
                                        if ($product_size == 'Large') {
                                            $x = 999;
                                            $y = 12;
                                            $z = $x*$y;
                                            $product_price= $product_qty * $z;
                                            $u_price = $z;
											$pro_titletest = "ES1";
//        echo "<script>alert('Large: '+ $x*$y)";
                                        }
                                        if ($product_size == 'Medium') {
                                            $x = 999;
                                            $y = 6;
                                            $z = $x*$y;
                                            $product_price=$product_qty * $z;
                                            $u_price =  $z;
											$pro_titletest = "ES2";
//        echo "<script>alert('Medium: '+ $x*$y)";
                                        }
                                     
                                    }
										else if($pro_type == 'Marketplace' && $pro_url == 'mans-best-friend'){
                                        if ($product_size == 'Large') {
                                            $x = 999;
                                            $y = 9;
                                            $z = $x*$y;
                                            $product_price= $product_qty * $z;
                                            $u_price = $z;
											$pro_titletest = "MBB1";
//        echo "<script>alert('Large: '+ $x*$y)";
                                        }
                                        if ($product_size == 'Medium') {
                                            $x = 999;
                                            $y = 6;
                                            $z = $x*$y;
                                            $product_price=$product_qty * $z;
                                            $u_price =  $z;
											$pro_titletest = "MBB2";
//        echo "<script>alert('Medium: '+ $x*$y)";
                                        }
                                        if ($product_size == 'Small') {
                                            $x = 999;
                                            $y = 4;
                                            $z = $x*$y;
                                            $product_price= $product_qty * $z;
                                            $u_price = $z;
											$pro_titletest = "MBB3";
//        echo "<script>alert('Small: '+ $x*$y)";
                                        }
                                    }
									else if($pro_type == 'Marketplace' && $pro_url == 'precious-pooch'){
                                        if ($product_size == 'Large') {
                                            $x = 999;
                                            $y = 9;
                                            $z = $x*$y;
                                            $product_price= $product_qty * $z;
                                            $u_price = $z;
											$pro_titletest = "PP1";
//        echo "<script>alert('Large: '+ $x*$y)";
                                        }
                                        if ($product_size == 'Medium') {
                                            $x = 999;
                                            $y = 6;
                                            $z = $x*$y;
                                            $product_price=$product_qty * $z;
                                            $u_price =  $z;
											$pro_titletest = "PP2";
//        echo "<script>alert('Medium: '+ $x*$y)";
                                        }
                                        if ($product_size == 'Small') {
                                            $x = 999;
                                            $y = 4;
                                            $z = $x*$y;
                                            $product_price= $product_qty * $z;
                                            $u_price = $z;
											$pro_titletest = "PP3";
//        echo "<script>alert('Small: '+ $x*$y)";
                                        }
                                    }
									else if($pro_type == 'Marketplace' && $pro_url == 'mandala-image'){
                                        if ($product_size == 'Large') {
                                            $x = 999;
                                            $y = 64;
                                            $z = $x*$y;
                                            $product_price= $product_qty * $z;
                                            $u_price = $z;
											$pro_titletest = "MI1";
//        echo "<script>alert('Large: '+ $x*$y)";
                                        }
                                        if ($product_size == 'Medium') {
                                            $x = 999;
                                            $y = 16;
                                            $z = $x*$y;
                                            $product_price=$product_qty * $z;
                                            $u_price =  $z;
											$pro_titletest = "MI2";
//        echo "<script>alert('Medium: '+ $x*$y)";
                                        }
                                       
                                    }
									else if($pro_type == 'Marketplace' && $pro_url == 'rudra-image'){
                                        if ($product_size == 'Large') {
                                            $x = 999;
                                            $y = 16;
                                            $z = $x*$y;
                                            $product_price= $product_qty * $z;
                                            $u_price = $z;
											$pro_titletest = "MM1";
//        echo "<script>alert('Large: '+ $x*$y)";
                                        }
                                        if ($product_size == 'Medium') {
                                            $x = 999;
                                            $y = 12;
                                            $z = $x*$y;
                                            $product_price=$product_qty * $z;
                                            $u_price =  $z;
											$pro_titletest = "MM2";
//        echo "<script>alert('Medium: '+ $x*$y)";
                                        }
                                        if ($product_size == 'Small') {
                                            $x = 999;
                                            $y = 4;
                                            $z = $x*$y;
                                            $product_price= $product_qty * $z;
                                            $u_price = $z;
											$pro_titletest = "MM3";
//        echo "<script>alert('Small: '+ $x*$y)";
                                        }
                                    }
									else if($pro_type == 'Marketplace' && $pro_url == 'marilyn-monroe'){
                                        if ($product_size == 'Large') {
                                            $x = 999;
                                            $y = 12;
                                            $z = $x*$y;
                                            $product_price= $product_qty * $z;
                                            $u_price = $z;
											$pro_titletest = "FJ1";
//        echo "<script>alert('Large: '+ $x*$y)";
                                        }
                                        if ($product_size == 'Medium') {
                                            $x = 999;
                                            $y = 6;
                                            $z = $x*$y;
                                            $product_price=$product_qty * $z;
                                            $u_price =  $z;
											$pro_titletest = "FJ2";
//        echo "<script>alert('Medium: '+ $x*$y)";
                                        }
                                        
                                    }
                                    else if($pro_type == 'Accessories'){
                                        if ($product_size == 'WallMount') {
                                            $x = 99;
                                            $product_price= (int)$product_qty * $x;
                                            $u_price = $x;
											$pro_titletest = "WM1";
//        echo "<script>alert('wall: '+ $x)";
                                        }
                                        if ($product_size == 'LED Backlight') {
                                            $x = 499;
                                            $product_price=(int)$product_qty * $x;
                                            $u_price =  $x;
											$pro_titletest = "LB1";
//        echo "<script>alert('led: '+ $x)";
                                        }
                                    }


                                    $email_add = $_SESSION['customer_email'];
                                    //echo "<script> alert($email_add)</script>";
                                    $na = 'NA';

                                    $query = "insert into cart (cust_email, p_id,p_type,p_title, image,ip_add,qty,p_price,u_price,size,uploaded_image,bg_1,bg_2,bg_3,bg_4,bg_5,bg_6,color_code,csv,lego,lego_gap,output_images) values ('$em','$p_id','$pro_type','$pro_title','Marketplace','$ip_add','$product_qty','$product_price','$u_price','$product_size','$pro_titletest','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA','NA')";

                                    $run_query = mysqli_query($db,$query);
									 echo "<script> alert('Your Product has been successfully added to the Cart') </script>";

                                                echo "<script>window.open('$pro_url','_self')</script>";
                                

                            }


                            ?>

                            <form action="" method="post" class="form-horizontal" ><!-- form-horizontal Starts -->

                                <?php

                                if(($status == "product") && (($pro_title == "Man’s best friend") || ($pro_title == "Gowthama") || ($pro_title == "Koi") || ($pro_title == "King of the Jungle") || ($pro_title == "Precious Pooch"))){

                                    ?>

                                    <div class="form-group"><!-- form-group Starts -->
                                        <div class="row">
                                            <label class="col-md-5 control-label" style="font-size: 25px;text-align:center !important;" >Product Quantity </label>

                                            <div class="col-md-7" id="testffy"><!-- col-md-7 Starts -->

                                                <select name="product_qty" style="color:white ; background-color: #2c3034; max-width: 50%" id="product_quantity_select" onchange="changeProdValue()" class="form-control">

                                                    <!--<option style="color: white; background-color: #2c3034 !important;">Select quantity</option>-->
                                                    <option  style="color: white; background-color: #2c3034">1</option>
                                                    <option  style="color: white; background-color: #2c3034">2</option>
                                                    <option  style="color: white; background-color: #2c3034">3</option>
                                                    <option  style="color: white; background-color: #2c3034">4</option>
                                                    <option  style="color: white; background-color: #2c3034">5</option>


                                                </select></div>

                                        </div><!-- col-md-7 Ends -->

                                    </div><!-- form-group Ends -->

                                    <div class="form-group" ><!-- form-group Starts -->
                                        <div class="row" style="padding-top: 20px">
                                            <label class="col-md-5 control-label" id="p_size_label"style="font-size: 25px;text-align:center !important;" >Product Size</label>

                                            <div class="col-md-7" id="testffy"><!-- col-md-7 Starts -->

                                                <select  style="color: white; background-color: #2c3034;  max-width: 50%" name="product_size" class="form-control" id="product_size" onchange="size_change()">

                                                    <!-- <option>Select a Size</option> -->
													 <option value="Medium" style="color: white; background-color: #2c3034">Medium</option>
													  <option value="Large" style="color: white; background-color: #2c3034">Large</option>
                                                    <option value="Small" style="color: white; background-color: #2c3034">Small</option>
                                         


                                                </select>
                                            </div>
                                        </div><!-- col-md-7 Ends -->


                                    </div><!-- form-group Ends -->
 <?php
								}
                                else if(($status == "product") && (($pro_title == "Abstract wheel"))){

                                    ?>

                                    <div class="form-group"><!-- form-group Starts -->
                                        <div class="row">
                                            <label class="col-md-5 control-label" style="font-size: 25px;text-align:center !important;" >Product Quantity </label>

                                            <div class="col-md-7" id="testffy"><!-- col-md-7 Starts -->

                                                <select name="product_qty" style="color:white ; background-color: #2c3034; max-width: 50%" id="product_quantity_select" onchange="changeProdValue()" class="form-control">

                                                    <!--<option style="color: white; background-color: #2c3034 !important;">Select quantity</option>-->
                                                    <option  style="color: white; background-color: #2c3034">1</option>
                                                    <option  style="color: white; background-color: #2c3034">2</option>
                                                    <option  style="color: white; background-color: #2c3034">3</option>
                                                    <option  style="color: white; background-color: #2c3034">4</option>
                                                    <option  style="color: white; background-color: #2c3034">5</option>


                                                </select></div>

                                        </div><!-- col-md-7 Ends -->

                                    </div><!-- form-group Ends -->

                                    <div class="form-group" ><!-- form-group Starts -->
                                        <div class="row" style="padding-top: 20px">
                                            <label class="col-md-5 control-label" id="p_size_label"style="font-size: 25px;text-align:center !important;" >Product Size</label>

                                            <div class="col-md-7" id="testffy"><!-- col-md-7 Starts -->

                                                <select  style="color: white; background-color: #2c3034;  max-width: 50%" name="product_size" class="form-control" id="product_size" onchange="size_change()">

                                                    <!-- <option>Select a Size</option> -->
													<option value="Large" style="color: white; background-color: #2c3034">Large</option>
													 <option value="Medium" style="color: white; background-color: #2c3034">Medium</option>
													  <option value="Small" style="color: white; background-color: #2c3034">Small</option>
                                         


                                                </select>
                                            </div>
                                        </div><!-- col-md-7 Ends -->


                                    </div><!-- form-group Ends -->
                                <?php } else if(($status == "product") && (($pro_title == "Leo") || ($pro_title == "Mandala") || ($pro_title == "The Joker") || ($pro_title == "Ironman") || ($pro_title == "Eye of the Storm") || ($pro_title == "Ojos") || ($pro_title == "Marilyn Monroe"))){
									
									?>

                                    <div class="form-group"><!-- form-group Starts -->
                                        <div class="row">
                                            <label class="col-md-5 control-label" style="font-size: 25px;text-align:center !important;" >Product Quantity </label>

                                            <div class="col-md-7" id="testffy"><!-- col-md-7 Starts -->

                                                <select name="product_qty" style="color:white ; background-color: #2c3034; max-width: 50%" id="product_quantity_select" onchange="changeProdValue()" class="form-control">

                                                    <!--<option style="color: white; background-color: #2c3034 !important;">Select quantity</option>-->
                                                    <option  style="color: white; background-color: #2c3034">1</option>
                                                    <option  style="color: white; background-color: #2c3034">2</option>
                                                    <option  style="color: white; background-color: #2c3034">3</option>
                                                    <option  style="color: white; background-color: #2c3034">4</option>
                                                    <option  style="color: white; background-color: #2c3034">5</option>


                                                </select></div>

                                        </div><!-- col-md-7 Ends -->

                                    </div><!-- form-group Ends -->

                                    <div class="form-group" ><!-- form-group Starts -->
                                        <div class="row" style="padding-top: 20px">
                                            <label class="col-md-5 control-label" id="p_size_label"style="font-size: 25px;text-align:center !important;" >Product Size</label>

                                            <div class="col-md-7" id="testffy"><!-- col-md-7 Starts -->

                                                <select  style="color: white; background-color: #2c3034;  max-width: 50%" name="product_size" class="form-control" id="product_size" onchange="size_change()">

                                                    <!-- <option>Select a Size</option> -->
													 <option value="Medium" style="color: white; background-color: #2c3034">Medium</option>
													  <option value="Large" style="color: white; background-color: #2c3034">Large</option>
                                                   
                                         


                                                </select>
                                            </div>
                                        </div><!-- col-md-7 Ends -->


                                    </div><!-- form-group Ends -->
  <?php } else if(($status == "product") && ($pro_title == "Rudra")){
									
									?>

                                    <div class="form-group"><!-- form-group Starts -->
                                        <div class="row">
                                            <label class="col-md-5 control-label" style="font-size: 25px;text-align:center !important;" >Product Quantity </label>

                                            <div class="col-md-7" id="testffy"><!-- col-md-7 Starts -->

                                                <select name="product_qty" style="color:white ; background-color: #2c3034; max-width: 50%" id="product_quantity_select" onchange="changeProdValue()" class="form-control">

                                                    <!--<option style="color: white; background-color: #2c3034 !important;">Select quantity</option>-->
                                                    <option  style="color: white; background-color: #2c3034">1</option>
                                                    <option  style="color: white; background-color: #2c3034">2</option>
                                                    <option  style="color: white; background-color: #2c3034">3</option>
                                                    <option  style="color: white; background-color: #2c3034">4</option>
                                                    <option  style="color: white; background-color: #2c3034">5</option>


                                                </select></div>

                                        </div><!-- col-md-7 Ends -->

                                    </div><!-- form-group Ends -->

                                    <div class="form-group" ><!-- form-group Starts -->
                                        <div class="row" style="padding-top: 20px">
                                            <label class="col-md-5 control-label" id="p_size_label"style="font-size: 25px;text-align:center !important;" >Product Size</label>

                                            <div class="col-md-7" id="testffy"><!-- col-md-7 Starts -->

                                                <select  style="color: white; background-color: #2c3034;  max-width: 50%" name="product_size" class="form-control" id="product_size" onchange="size_change()">

                                                    <!-- <option>Select a Size</option> -->
													<option value="Large" style="color: white; background-color: #2c3034">Large</option>
													 <option value="Medium" style="color: white; background-color: #2c3034">Medium</option>
													  
                                                   
                                         


                                                </select>
                                            </div>
                                        </div><!-- col-md-7 Ends -->


                                    </div><!-- form-group Ends -->
                             <?php

                                } else if(($status == "product") && (($pro_title == "WallMount") || ($pro_title == "LED Backlight")))
								
								{

                                    ?>

                                    <div class="form-group"><!-- form-group Starts -->
                                        <div class="row">
                                            <label class="col-md-5 control-label" style="font-size: 25px;text-align:center !important;" >Product Quantity </label>

                                            <div class="col-md-7" id="testffy"><!-- col-md-7 Starts -->

                                                <select name="product_qty" style="color:white ; background-color: #2c3034; max-width: 50%" id="product_quantity_select" onchange="changeProdValue()" class="form-control">

                                                    <!--<option style="color: white; background-color: #2c3034 !important;">Select quantity</option>-->
                                                    <option  style="color: white; background-color: #2c3034">1</option>
                                                    <option  style="color: white; background-color: #2c3034">2</option>
                                                    <option  style="color: white; background-color: #2c3034">3</option>
                                                    <option  style="color: white; background-color: #2c3034">4</option>
                                                    <option  style="color: white; background-color: #2c3034">5</option>


                                                </select></div>

                                        </div><!-- col-md-7 Ends -->

                                    </div><!-- form-group Ends -->

                                    <div class="form-group" ><!-- form-group Starts -->
                                        <div class="row" style="padding-top: 20px">
                                            <label class="col-md-5 control-label" id="p_size_label"style="font-size: 25px;text-align:center !important;" >Product Size</label>

                                            <div class="col-md-7" id="testffy"><!-- col-md-7 Starts -->

                                                <select  style="color: white; background-color: #2c3034;  max-width: 50%" name="product_size" class="form-control" id="product_size" onchange="size_change()">

                                                    <!-- <option>Select a Size</option> -->
													 <option value="Medium" style="color: white; background-color: #2c3034">Medium</option>
													  <option value="Large" style="color: white; background-color: #2c3034">Large</option>
                                                    <option value="Small" style="color: white; background-color: #2c3034">Small</option>
                                         


                                                </select>
                                            </div>
                                        </div><!-- col-md-7 Ends -->


                                    </div><!-- form-group Ends -->
								<?php } else { ?>

                                    <div class="form-group"><!-- form-group Starts -->
                                      <div class="row">
                                        <label class="col-md-5 control-label" style="font-size: 25px;text-align:center !important;">Bundle Quantity </label>
 <div class="col-md-7" id="testffy"><!-- col-md-7 Starts -->

                                                <select name="product_qty" style="color:white ; background-color: #2c3034; max-width: 50%" id="product_quantity_select" onchange="changeProdValue()" class="form-control">

                                                    <!--<option style="color: white; background-color: #2c3034 !important;">Select quantity</option>-->
                                                    <option  style="color: white; background-color: #2c3034">1</option>
                                                   <!-- <option  style="color: white; background-color: #2c3034">2</option>
                                                    <option  style="color: white; background-color: #2c3034">3</option>
                                                    <option  style="color: white; background-color: #2c3034">4</option>
                                                    <option  style="color: white; background-color: #2c3034">5</option> -->


                                                </select></div>
                                        </div>

                                    </div><!-- form-group Ends -->

                                    


                                <?php } ?>


                                <?php

                                if($status == "product"){




                                    if($pro_label == "Sale" or $pro_label == "Gift"){

                                        echo "

<p class='price' id='product_p' name='product_p'  >

Product Price : <del>&#X20B9; $pro_price </del><br>

Product sale Price : &#X20B9; $pro_psp_price

</p>

";

                                    }
                                    else{

                                        echo "

<p class='price' id='product_p' name='product_p'   style='color: white'>

Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> $pro_price

</p>

";

                                    }

                                }
                                else{


                                    if($pro_label == "Sale" or $pro_label == "Gift"){

                                        echo "

<p class='price' id='product_p' name='product_p' >

Bundle Price : <del> &#X20B9; $pro_price </del><br>

Bundle sale Price : &#X20B9; $pro_psp_price

</p>

";

                                    }
                                    else{

                                        echo "

<p class='price' id='product_p' name='product_p' style='color: white'>

Bundle Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> $pro_price

</p>

";

                                    }


                                }

                                ?>
                                <h5 style="font-size: 16px !important; padding-top: 10px; text-align: center"><a href="/shippinginfo.php" style="color: white;">Shipping</a> calculated at checkout. </h5>
                                <div style="padding-top: 10px">
                                    <p class="text-center buttons" ><!-- text-center buttons Starts -->

                                        <button class="btn btn-primary" type="submit" name="add_cart" style=" background-color: #2c3034; border-color: #2c3034">

                                            <i class="fa fa-shopping-cart" ></i> Add to Cart

                                        </button>

                                        <button class="btn btn-primary" type="submit" name="add_wishlist">

                                            <i class="fa fa-heart" ></i> Add to Wishlist

                                        </button>

                                        <!--<button class="btn btn-primary" style="width:99px !important;height:38px !important;" name="customize" style="width: fit-content">-->
                                        <!--    --><?php
                                        //    if(isset($_SESSION['customer_email'])) {
                                        //        $customer_email = $_SESSION['customer_email'];
                                        //        $get_token = "select token from jwt_auth where email='$customer_email'; ";
                                        //        $result = mysqli_query($con, $get_token);
                                        //        $row = mysqli_fetch_assoc($result);
                                        //        $token = $row['token'];
                                        //        echo "<a href='https://create.thekoha.com/?token=$token' class='d-flex'
                                        //                   style='position:relative;  color: white !important; font-size: 14px; font-weight: normal'>
                                        //                    <i class='fa fa-cubes' style='padding-top: 3px'></i>&nbsp;Customize
                                        //                </a>";
                                        //    }
                                        //    else
                                        //    {
                                        //        echo "<a href='checkout.php' class='d-flex'
                                        //                   style='position:relative; color: white !important; font-size: 14px; font-weight: normal'>
                                        //                    <i class='fa fa-cubes' style='padding-top: 3px'></i>&nbsp;Customize
                                        //                </a>";
                                        //    }
                                        //    ?>
                                        <!--</button>-->
                                </div>
								 <?php

                                if(($status == "product") && (($pro_title == "Man’s best friend") || ($pro_title == "Rudra") || ($pro_title == "Gowthama") || ($pro_title == "Koi") || ($pro_title == "Abstract wheel") || ($pro_title == "King of the Jungle") || ($pro_title == "Precious Pooch") || ($pro_title == "Leo") || ($pro_title == "Mandala") || ($pro_title == "The Joker") || ($pro_title == "Ironman") || ($pro_title == "Eye of the Storm") || ($pro_title == "Ojos") || ($pro_title == "Marilyn Monroe"))){

                                    ?>
                               <div style="display: flex; margin: 0 auto; justify-content: space-between;padding-top: 20px  ">
                                    <div style="display: flex; margin: 0 auto; justify-content: center">
                                        <img style="height: 26px; width:22px" src="assets/size.png"
                                             alt=""> &nbsp
                                        <div >
                                            <label id="t_size" class="form-label"
                                                   style="font-size:20px;">Size : <?php echo round($pro_vb*25.6).' '.'cm'.' '.'x'.' '.round($pro_hb*25.6).' '.'cm' ?></label>
                                        </div>
                                    </div>
                                    <div style="display: flex; margin: 0 auto; justify-content: center">
                                        <img style="height: 26px; width:22px" src="assets/nop.png"
                                             alt=""> &nbsp
                                        <div>
                                            <label id="pieces" class="form-label"
                                                   style="font-size:20px;">Pieces : <?php echo round($pro_vb*$pro_hb*1024) ?></label>
                                        </div>
                                    </div>
                                </div>
								<?php } else {?>
								<?php } ?>
                                <!--                                    <div  id="hidewallmount" style="padding-top:0px; display: flex;-->
                                <!--  justify-content: center;">-->



                                <!--
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <?php

                                  if(isset($_POST['add_wishlist'])){

                                    if(!isset($_SESSION['customer_email'])){

                                        echo "<script>alert('You Must Login To Add Product In Wishlist')</script>";

                                        echo "<script>window.open('checkout.php','_self')</script>";

                                    }
                                    else{

                                        $customer_session = $_SESSION['customer_email'];

                                        $get_customer = "select * from customers where customer_email='$customer_session'";

                                        $run_customer = mysqli_query($con,$get_customer);

                                        $row_customer = mysqli_fetch_array($run_customer);

                                        $customer_id = $row_customer['customer_id'];

                                        $select_wishlist = "select * from wishlist where customer_id='$customer_id' AND product_id='$pro_id'";

                                        $run_wishlist = mysqli_query($con,$select_wishlist);

                                        $check_wishlist = mysqli_num_rows($run_wishlist);

                                        if($check_wishlist == 1){

                                            echo "<script>alert('This Product Has Been already Added In Wishlist')</script>";

                                            echo "<script>window.open('$pro_url','_self')</script>";

                                        }
                                        else{

                                            $insert_wishlist = "insert into wishlist (customer_id,product_id) values ('$customer_id','$pro_id')";

                                            $run_wishlist = mysqli_query($con,$insert_wishlist);

                                            if($run_wishlist){

                                                echo "<script> alert('Product Has Inserted Into Wishlist') </script>";

                                                echo "<script>window.open('$pro_url','_self')</script>";

                                            }

                                        }

                                    }

                                }
                                ?>

                                    </p><!-- text-center buttons Ends -->

                            </form><!-- form-horizontal Ends -->

                        </div><!-- box Ends -->
						<br/>
                             <div  id="hidewallmount" style="padding-top:0px; display: flex;">
<p style="color: white; font-size: 16px !important;position:relative !important;top:-35px !important;">&nbsp;&nbsp;&nbsp;&nbsp;How do I Wall Mount it? <a href="howitworks.php" style="color: white;text-decoration:none !important;">Click here</a></p>
</div>
                        <div class="accordion  bg-dark" style="width: 100% ; background-color: black; color: white; border: grey 3px solid; border-radius: 10px" id="accordionExample">
                           <!-- <div class="accordion-item" style=" ; background-color: black; color: white">
                                <h2 class="accordion-header" style=" ; background-color: black; color: white" id="headingOne">
                                    <button class="accordion-button" style=" ; background-color: black; color: white;font-size:1.35rem;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Description
                                    </button>
                                </h2>
                                 <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body" style=" ; background-color: #2c3034; color: white">
                                                       <p></p>
                                                    </div>
                                                </div> 
                            </div> -->
                            <div class="accordion-item" style=" ; background-color: black; color: white">
                                <h2 class="accordion-header" id="headingTwo" style=" ; background-color: black; color: white">
                                    <button class="accordion-button collapsed" style=" ; background-color: black; color: white;font-size:1.35rem;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Ask a Question
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body" style="  background-color: #2c3034; color: white">
                                        <div class="container">
                                            <!--                                                            <div class="card " style="color: white; background-color: black">-->
                                            <div class="row" style="display: flex; justify-content: center">
                                                <div style="padding: 10px">
                                                    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
                                                        
                                                        <form action="detailsform.php" method="POST" id="contact-form" class="php-email-form" enctype="multipart/form-data">
                                                            <div class="row">
                                                                <div class="col-md-6 form-group">
                                                                    <input style="background-color: #2c3034; color: white;font-weight:bold !important;" type="text" name="testname5" class="form-control" id="name" placeholder="Name" required>
                                                                </div>
                                                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                                                    <input style="background-color: #2c3034;font-weight:bold !important; color: white" type="email" class="form-control" name="testemail5" id="email" placeholder="Email" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group mt-3">
                                                                <textarea style="background-color: #2c3034; color: white;font-weight:bold !important;" class="form-control" name="testmessage5" rows="5" placeholder="Message" required></textarea>
                                                            </div>
                                                            <div class="form-group mt-3">
                                                                <input style="background-color: #2c3034; color: white" type="hidden" name="hellotestcontact5" value="hellotestconnect5">
                                                            </div>

                                                            <div class="form-group mt-3">
                                                                <div class="text-center" style="text-align:left !important;">
                                                                    <button class="btn btn-primary submit-button" onclick="form_submit()"  style="padding:10px 15px !important;font-family: 'Georama' !important; background-color: #2c3034; border-color: #2c3034; font-size:15px;background-color:grey !important;color:#ffffff !important;">
                                                                        Send
                                                                    </button>
                                                                </div>
                                                        </form>
                                                    </section>
                                                    <script type="text/javascript">
                                                        function form_submit() {
                                                            document.getElementById("contact-form").submit();
                                                        }
                                                    </script>
                                                </div>
                                            </div>
                                        </div>


                                    </div>


                                    <div class="row" id="thumbs" style="display: none; justify-content: center;"><!-- row Starts -->

                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" id="thumb-small"><!-- col-xs-4 Starts -->

                                            <a href="#" class="thumb">

                                                <img intrinsicsize="3236*3236" src="admin_area/product_images/<?php echo $pro_img1; ?>" class="img-responsive" >

                                            </a>

                                        </div><!-- col-xs-4 Ends -->

                                        <div class="col-xs-4" id="thumb-medium"><!-- col-xs-4 Starts -->

                                            <a href="#" class="thumb">

                                                <img intrinsicsize="3236*3236" src="admin_area/product_images/<?php echo $pro_img2; ?>" class="img-responsive" >

                                            </a>

                                        </div><!-- col-xs-4 Ends -->

                                        <div class="col-xs-4" id="thumb-large"><!-- col-xs-4 Starts -->

                                            <a href="#" class="thumb">

                                                <img intrinsicsize="3236*3236" src="admin_area/product_images/<?php echo $pro_img3; ?>" class="img-responsive" >

                                            </a>

                                        </div><!-- col-xs-4 Ends -->


                                    </div><!-- row Ends -->


                                </div><!-- col-sm-6 Ends -->


                            </div><!-- row Ends -->

                            <!--<div class="box" id="details" style="background-color: black !important;"><!-- box Starts -->
                            <!---->
                            <!--<a class="btn btn-primary tab" style="margin-bottom:10px; color: white" href="#description" data-toggle="tab"><!-- btn btn-primary tab Starts -->
                            <!---->
                            <?php
                            //
                            //if($status == "product"){
                            //
                            //echo "Product Description";
                            //
                            //}
                            //else{
                            //
                            //echo "Bundle Description";
                            //
                            //}
                            //
                            //?>

                            </a><!-- btn btn-primary tab Ends -->

                            <!--<a class="btn btn-primary tab" style="margin-bottom:10px;" href="#features" data-toggle="tab"><!-- btn btn-primary tab Starts -->

                            <!--Features-->

                            <!--</a><!-- btn btn-primary tab Ends -->

                            <!--<a class="btn btn-primary tab" style="margin-bottom:10px;" href="#video" data-toggle="tab"><!-- btn btn-primary tab Starts -->

                            <!--Sounds and Videos-->

                            <!--</a><!-- btn btn-primary tab Ends -->

                            <!--<hr style="margin-top:0px;">-->

                            <!--<div class="tab-content"><!-- tab-content Starts -->
                            <!---->
                            <!--<div id="description" class="tab-pane fade in active" style="margin-top:7px; color: white !important; height: 50px" ><!-- description tab-pane fade in active Starts -->
                            <!---->
                            <?php // echo $pro_desc; ?>
                            <!---->
                            <!--</div><!-- description tab-pane fade in active Ends -->
                            <!---->
                            <!--<div id="features" class="tab-pane fade in" style="margin-top:7px;" ><!-- features tab-pane fade in  Starts -->
                            <!---->
                            <?php //echo $pro_features; ?>
                            <!---->
                            <!--</div><!-- features tab-pane fade in  Ends -->
                            <!---->
                            <!--<div id="video" class="tab-pane fade in" style="margin-top:7px;" ><!-- video tab-pane fade in Starts -->
                            <!---->
                            <?php //echo $pro_video; ?>
                            <!---->
                            <!--</div><!-- video tab-pane fade in  Ends -->
                            <!---->
                            <!--</div><!-- tab-content Ends -->
                        </div><!-- box Ends -->


                    </div>
                    <!--            <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">-->
                    <!--                <h5 style="font-family: Roboto Serif !important;">Ask a question</h5>-->
                    <!--                <form action="reaction.php" method="POST" id="contact-form" class="php-email-form" enctype="multipart/form-data">-->
                    <!--                    <div class="row">-->
                    <!--                        <div class="col-md-6 form-group">-->
                    <!--                            <input style="background-color: #2c3034; color: white" type="text" name="testname5" class="form-control" id="name" placeholder="Your Name" required>-->
                    <!--                        </div>-->
                    <!--                        <div class="col-md-6 form-group mt-3 mt-md-0">-->
                    <!--                            <input style="background-color: #2c3034; color: white" type="email" class="form-control" name="testemail5" id="email" placeholder="Your Email" required>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                    <div class="form-group mt-3">-->
                    <!--                        <textarea style="background-color: #2c3034; color: white" class="form-control" name="testmessage5" rows="5" placeholder="Message" required></textarea>-->
                    <!--                    </div>-->
                    <!--                    <div class="form-group mt-3">-->
                    <!--                        <input style="background-color: #2c3034; color: white" type="hidden" name="hellotestcontact5" value="hellotestconnect5">-->
                    <!--                    </div>-->
                    <!---->
                    <!--                    <div class="form-group mt-3">-->
                    <!--                        <div class="text-center" style="text-align:left !important;">-->
                    <!--                            <button class="btn btn-primary submit-button" onclick="form_submit()"  style="padding:10px 15px !important;font-family: 'Georama' !important; background-color: #2c3034; border-color: #2c3034; font-size:15px;background-color:grey !important;color:#ffffff !important;">-->
                    <!--                                Send-->
                    <!--                            </button>-->
                    <!--                        </div>-->
                    <!--                </form>-->
                    <!--            </section>-->
                    <!--            <script type="text/javascript">-->
                    <!--                function form_submit() {-->
                    <!--                    document.getElementById("contact-form").submit();-->
                    <!--                }-->
                    <!--            </script>-->
                    <section style="padding-bottom: 30px ; padding-top:40px"
                    >
                        <div style="margin: 0 0">
                            <h3 style=";text-transform:uppercase;text-align:center; margin: 0px;color:#ffffff !important;">Recommended Products</h3>
                        </div>
                    </section>
                    <br/>
                    <div id="row same-height-row" class="row"><!-- row same-height-row Starts -->
                        <?php

                        if($status == "product"){



                            ?>

                            <!--<div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Starts -->

                            <!--<div class="box same-height headline" style="background-color:#000000 !important;border:1px solid #ffffff"><!-- box same-height headline Starts -->

                            <!--<h3 class="text-center">Recommended Products</h3>

                            </div><!-- box same-height headline Ends -->

                            <!--</div><!-- col-md-3 col-sm-6 Ends -->

                            <?php

                            $get_products = "select * from products ORDER BY rand() limit 0,3";

                            $run_products = mysqli_query($con,$get_products);

                            while($row_products = mysqli_fetch_array($run_products)) {

                                $pro_id = $row_products['product_id'];

                                $pro_title = $row_products['product_title'];

                                $pro_price = $row_products['product_price'];

                                $pro_img1 = $row_products['product_img2'];
								 $pro_img2 = $row_products['product_img3'];

                                $pro_label = $row_products['product_label'];
                                $pro_vb = $row_products['v_size'];

$pro_hb = $row_products['h_size'];
                                $manufacturer_id = $row_products['manufacturer_id'];

                                $get_manufacturer = "select * from manufacturers where manufacturer_id='$manufacturer_id'";

                                $run_manufacturer = mysqli_query($db,$get_manufacturer);

                                $row_manufacturer = mysqli_fetch_array($run_manufacturer);

                                $manufacturer_name = $row_manufacturer['manufacturer_title'];

                                $pro_psp_price = $row_products['product_psp_price'];

                                $pro_url = $row_products['product_url'];


                                if($pro_label == "Sale" or $pro_label == "Gift"){

                                    $product_price = "<del> &#X20B9; $pro_price </del>";

                                    $product_psp_price = "| &#X20B9; $pro_psp_price";

                                }
                                else{

                                    $product_psp_price = "";

                                    $product_price = "&#X20B9; $pro_price";

                                }


                                if($pro_label == ""){


                                }
                                else{

                                    $product_label = "";

                                }

//    <p class='btn btn-primary' id='man_name'> $manufacturer_name </p>

//    <hr>
if ($pro_title == "Koi")
{
                                echo "

<div class='card center-responsive col-md-4 col-sm-4'  style=' background-color: black; color: white'>

<div class='product'  style=' background-color: #000000; color: white;border:1px solid #ffffff !important;border-radius:10px !important;' >

<a href='$pro_url' >

<img src='admin_area/product_images/$pro_img1' style='padding:20px !important;width:470px !important;' class='img-responsive' >

</a>

<div class='text' >

<center>



</center>


<h3><a style=' background-color: #000000; color: white' href='$pro_url' id='p_tit'>$pro_title</a></h3>

<p  style=' background-color: #000000; color: white;margin-top:0px !important;' class='price' > $product_price $product_psp_price </p>

<p class='buttons' >

<a href='$pro_url' class='btn btn-secondary' >View details</a>


</p>

</div>

$product_label


</div>

</div>

";
}

else if((($pro_title == "Man’s best friend") || ($pro_title == "Marilyn Monroe") || ($pro_title == "Gowthama") || ($pro_title == "King of the Jungle") || ($pro_title == "Precious Pooch") || ($pro_title == "Leo") || ($pro_title == "Mandala") || ($pro_title == "The Joker") || ($pro_title == "Ironman") || ($pro_title == "Eye of the Storm") || ($pro_title == "Ojos") || ($pro_title == "WallMount") || ($pro_title == "LED Backlight")))
{
                                echo "

<div class='card center-responsive col-md-4 col-sm-4'  style=' background-color: black; color: white'>

<div class='product'  style=' background-color: #000000; color: white;border:1px solid #ffffff !important;border-radius:10px !important;' >

<a href='$pro_url' >

<img src='admin_area/product_images/$pro_img1' style='padding:20px !important;' class='img-responsive' >

</a>

<div class='text' >

<center>



</center>


<h3><a style=' background-color: #000000; color: white' href='$pro_url' id='p_tit'>$pro_title</a></h3>

<p  style=' background-color: #000000; color: white;margin-top:0px !important;' class='price' > $product_price $product_psp_price </p>

<p class='buttons' >

<a href='$pro_url' class='btn btn-secondary' >View details</a>


</p>

</div>

$product_label


</div>

</div>

";
}
else if(($pro_title == "Abstract wheel") || ($pro_title == "Rudra"))
{
                                echo "

<div class='card center-responsive col-md-4 col-sm-4'  style=' background-color: black; color: white'>

<div class='product'  style=' background-color: #000000; color: white;border:1px solid #ffffff !important;border-radius:10px !important;' >

<a href='$pro_url' >

<img src='admin_area/product_images/$pro_img2' style='padding:20px !important;' class='img-responsive' >

</a>

<div class='text' >

<center>



</center>


<h3><a style=' background-color: #000000; color: white' href='$pro_url' id='p_tit'>$pro_title</a></h3>

<p  style=' background-color: #000000; color: white;margin-top:0px !important;' class='price' > $product_price $product_psp_price </p>

<p class='buttons' >

<a href='$pro_url' class='btn btn-secondary' >View details</a>


</p>

</div>

$product_label


</div>

</div>

";
}

                            }


                            ?>

                        <?php }else{ ?>

                            <div class="box same-height"><!-- box same-height Starts -->

                                <h3 class="text-center;color:#ffffff !important;"> Bundle Products </h3>

                            </div><!-- box same-height Ends -->

                            <?php

                            $get_bundle_product_relation = "select * from bundle_product_relation where bundle_id='$pro_id'";

                            $run_bundle_product_relation = mysqli_query($con,$get_bundle_product_relation);

                            while($row_bundle_product_relation = mysqli_fetch_array($run_bundle_product_relation)){

                                $bundle_product_relation_product_id = $row_bundle_product_relation['product_id'];

                                $get_products = "select * from products where product_id='$bundle_product_relation_product_id'";


                                $run_products = mysqli_query($con,$get_products);

                                while($row_products = mysqli_fetch_array($run_products)){
                                    $pro_id = $row_products['product_id'];

                                    $pro_title = $row_products['product_title'];

                                    $pro_price = $row_products['product_price'];

                                    $pro_img1 = $row_products['product_img2'];
$pro_img2 = $row_products['product_img3'];
                                    $pro_label = $row_products['product_label'];
$pro_vb = $row_products['v_size'];

$pro_hb = $row_products['h_size'];
                                    $manufacturer_id = $row_products['manufacturer_id'];

                                    $get_manufacturer = "select * from manufacturers where manufacturer_id='$manufacturer_id'";

                                    $run_manufacturer = mysqli_query($db,$get_manufacturer);

                                    $row_manufacturer = mysqli_fetch_array($run_manufacturer);

                                    $manufacturer_name = $row_manufacturer['manufacturer_title'];

                                    $pro_psp_price = $row_products['product_psp_price'];

                                    $pro_url = $row_products['product_url'];


                                    if($pro_label == "Sale" or $pro_label == "Gift"){

                                        $product_price = "<del> &#X20B9; $pro_price </del>";

                                        $product_psp_price = "| &#X20B9; $pro_psp_price";

                                    }
                                    else{

                                        $product_psp_price = "";

                                        $product_price = "&#X20B9; $pro_price";

                                    }


                                    if($pro_label == ""){


                                    }
                                    else{

                                        $product_label = "";

                                    }
if(($pro_title == "Abstract wheel") || ($pro_title == "Rudra"))
{
                                    echo "

<div class='card center-responsive col-md-4 col-sm-4'  style=' background-color: black; color: white'>

<div class='product'  style=' background-color: #000000; color: white;border:1px solid #ffffff !important;border-radius:10px !important;' >

<a href='$pro_url' >

<img src='admin_area/product_images/$pro_img2' style='padding:20px !important;' class='img-responsive' >

</a>

<div class='text' >

<center>



</center>


<h3><a style=' background-color: #000000; color: white' href='$pro_url' id='p_tit'>$pro_title</a></h3>

<p  style=' background-color: #000000; color: white;margin-top:0px !important;' class='price' > $product_price $product_psp_price </p>

<p class='buttons' >

<a href='$pro_url' class='btn btn-secondary' >View details</a>


</p>

</div>

$product_label


</div>

</div>

";
}
else
{
                                    echo "

<div class='card center-responsive col-md-4 col-sm-4'  style=' background-color: black; color: white'>

<div class='product'  style=' background-color: #000000; color: white;border:1px solid #ffffff !important;border-radius:10px !important;' >

<a href='$pro_url' >

<img src='admin_area/product_images/$pro_img1' style='padding:20px !important;' class='img-responsive' >

</a>

<div class='text' >

<center>



</center>


<h3><a style=' background-color: #000000; color: white' href='$pro_url' id='p_tit'>$pro_title</a></h3>

<p  style=' background-color: #000000; color: white;margin-top:0px !important;' class='price' > $product_price $product_psp_price </p>

<p class='buttons' >

<a href='$pro_url' class='btn btn-secondary' >View details</a>


</p>

</div>

$product_label


</div>

</div>

";
}

                                }


                            }



                            ?>


                        <?php } ?>

                    </div><!-- row same-height-row Ends -->

                </div><!-- col-md-12 Ends -->
            </div>

        </div><!-- container Ends -->
    </div><!-- content Ends -->
    <br/>
    <br/>
    <br/>
    <br/>

</div>
    <?php

    include("includes/footer.php");

    ?>

<script>document.title = "KOHA | Product Details";</script>
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/preloader.js"></script>
    <script src="koha.js"></script>
    <script src="js/init-round.js"></script>
    <script src="js/main.js"></script>
    <script src="js/plugin.js"></script>

    <script src="js/jquery.min.js"> </script>

    <script src="js/bootstrap.min.js"></script>
    <script>
	var p_title = document.getElementById('testingphase').innerText;
	    if (p_title == 'Rudra') {
        document.getElementById('img-small').style.display = "none";
        document.getElementById('img-medium').style.display = "none";
        document.getElementById('img-large').style.display = "block";
        document.getElementById('thumb-small').style.display = "none";
        document.getElementById('thumb-medium').style.display = "none";
        document.getElementById('thumb-large').style.display = "block";
		}
		else
		{
		document.getElementById('img-small').style.display = "none";
        document.getElementById('img-medium').style.display = "block";
        document.getElementById('img-large').style.display = "none";
        document.getElementById('thumb-small').style.display = "none";
        document.getElementById('thumb-medium').style.display = "block";
        document.getElementById('thumb-large').style.display = "none";
		}
        // var title = document.getElementById('product_title').innerText;

        var p_type = '<?php echo $pro_type ?>';
        var p_title = document.getElementById('testingphase').innerText;
        // console.log(p_type);
        console.log(p_title);
        if(p_type == 'Accessories'){
            if (p_title == 'WallMount') {
                var product_size = document.getElementById('product_size');
                product_size.options[product_size.selectedIndex].value = "WallMount";
                var o = new Option("WallMount", "WallMount");
                $(o).html("WallMount");
                $("#product_size").append(o);
                document.getElementById('product_size').options[3].selected = 'selected';
                document.getElementById('product_size').disabled = "disabled";
                document.getElementById('hidewallmount').style.display = "none";

            } else if (p_title == 'LED Backlight'){
                var product_size = document.getElementById('product_size');
                product_size.options[product_size.selectedIndex].value = "LED Backlight";
                var o = new Option("LED Backlight", "LED Backlight");
                $(o).html("LED Backlight");
                $("#product_size").append(o);
                document.getElementById('product_size').options[3].selected = 'selected';
                document.getElementById('product_size').disabled = "disabled";

            }
        }

        function size_change() {
            var product_size = document.getElementById('product_size');
			 var p_title = document.getElementById('testingphase').innerText;
            var value = product_size.options[product_size.selectedIndex].value;
            var product_quantity = document.getElementById('product_quantity_select');
            var quantity = product_quantity.options[product_quantity.selectedIndex].value;

            // console.log(value)
			if (p_title == 'Gowthama')
			{
            if (value == 'Small'){
                var x = quantity * 3996 ;
                var t_size = document.getElementById("t_size");
                var pieces = document.getElementById("pieces");
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
                document.getElementById('img-small').style.display = "block";
                document.getElementById('img-medium').style.display = "none";
                document.getElementById('img-large').style.display = "none";
                document.getElementById('thumb-small').style.display = "block";
                document.getElementById('thumb-medium').style.display = "none";
                document.getElementById('thumb-large').style.display = "none";
                t_size.innerHTML = "Size : " + (2*25.6).toFixed() + " cm x " + (2*25.6).toFixed()+ " cm";
                pieces.innerHTML = "Pieces : "+4*1024;
                console.log("IN SMALL")
            }
            if (value == 'Medium'){
                var x = quantity * 5994 ;
                var t_size = document.getElementById("t_size");
                var pieces = document.getElementById("pieces");
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
                document.getElementById('img-small').style.display = "none";
                document.getElementById('img-medium').style.display = "block";
                document.getElementById('img-large').style.display = "none";
                document.getElementById('thumb-small').style.display = "none";
                document.getElementById('thumb-medium').style.display = "block";
                document.getElementById('thumb-large').style.display = "none";
                t_size.innerHTML = "Size : " + (3*25.6).toFixed() + " cm x " + (2*25.6).toFixed()+ " cm";
                pieces.innerHTML = "Pieces : "+6*1024;
                console.log("IN MEDIUM")
            }
            if (value == 'Large'){
                var x = quantity * 11988 ;
                var t_size = document.getElementById("t_size");
                var pieces = document.getElementById("pieces");
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
                document.getElementById('img-small').style.display = "none";
                document.getElementById('img-medium').style.display = "none";
                document.getElementById('img-large').style.display = "block";
                document.getElementById('thumb-small').style.display = "none";
                document.getElementById('thumb-medium').style.display = "none";
                document.getElementById('thumb-large').style.display = "block";
                t_size.innerHTML = "Size : " + (4*25.6).toFixed() + " cm x " + (3*25.6).toFixed()+ " cm";
                pieces.innerHTML = "Pieces : "+12*1024;
                console.log("IN LARGE")
            }
			}
			else if (p_title == 'Koi')
			{
            if (value == 'Small'){
                var x = quantity * 5994 ;
                var t_size = document.getElementById("t_size");
                var pieces = document.getElementById("pieces");
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
                document.getElementById('img-small').style.display = "block";
                document.getElementById('img-medium').style.display = "none";
                document.getElementById('img-large').style.display = "none";
                document.getElementById('thumb-small').style.display = "block";
                document.getElementById('thumb-medium').style.display = "none";
                document.getElementById('thumb-large').style.display = "none";
                t_size.innerHTML = "Size : " + (3*25.6).toFixed() + " cm x " + (2*25.6).toFixed()+ " cm";
                pieces.innerHTML = "Pieces : "+6*1024;
                console.log("IN SMALL")
            }
            if (value == 'Medium'){
                var x = quantity * 11988 ;
                var t_size = document.getElementById("t_size");
                var pieces = document.getElementById("pieces");
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
                document.getElementById('img-small').style.display = "none";
                document.getElementById('img-medium').style.display = "block";
                document.getElementById('img-large').style.display = "none";
                document.getElementById('thumb-small').style.display = "none";
                document.getElementById('thumb-medium').style.display = "block";
                document.getElementById('thumb-large').style.display = "none";
                t_size.innerHTML = "Size : " + (4*25.6).toFixed() + " cm x " + (3*25.6).toFixed()+ " cm";
                pieces.innerHTML = "Pieces : "+12*1024;
                console.log("IN MEDIUM")
            }
            if (value == 'Large'){
                var x = quantity * 19980 ;
                var t_size = document.getElementById("t_size");
                var pieces = document.getElementById("pieces");
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
                document.getElementById('img-small').style.display = "none";
                document.getElementById('img-medium').style.display = "none";
                document.getElementById('img-large').style.display = "block";
                document.getElementById('thumb-small').style.display = "none";
                document.getElementById('thumb-medium').style.display = "none";
                document.getElementById('thumb-large').style.display = "block";
                t_size.innerHTML = "Size : " + (5*25.6).toFixed() + " cm x " + (4*25.6).toFixed()+ " cm";
                pieces.innerHTML = "Pieces : "+20*1024;
                console.log("IN LARGE")
            }
			}
			else if (p_title == 'Ojos')
			{
         
            if (value == 'Medium'){
                var x = quantity * 8991 ;
                var t_size = document.getElementById("t_size");
                var pieces = document.getElementById("pieces");
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
                document.getElementById('img-small').style.display = "none";
                document.getElementById('img-medium').style.display = "block";
                document.getElementById('img-large').style.display = "none";
                document.getElementById('thumb-small').style.display = "none";
                document.getElementById('thumb-medium').style.display = "block";
                document.getElementById('thumb-large').style.display = "none";
                t_size.innerHTML = "Size : " + (3*25.6).toFixed() + " cm x " + (3*25.6).toFixed()+ " cm";
                pieces.innerHTML = "Pieces : "+9*1024;
                console.log("IN MEDIUM")
            }
            if (value == 'Large'){
                var x = quantity * 11988 ;
                var t_size = document.getElementById("t_size");
                var pieces = document.getElementById("pieces");
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
                document.getElementById('img-small').style.display = "none";
                document.getElementById('img-medium').style.display = "none";
                document.getElementById('img-large').style.display = "block";
                document.getElementById('thumb-small').style.display = "none";
                document.getElementById('thumb-medium').style.display = "none";
                document.getElementById('thumb-large').style.display = "block";
                t_size.innerHTML = "Size : " + (3*25.6).toFixed() + " cm x " + (4*25.6).toFixed()+ " cm";
                pieces.innerHTML = "Pieces : "+12*1024;
                console.log("IN LARGE")
            }
			}
			else if (p_title == 'Leo')
			{
          
            if (value == 'Medium'){
                var x = quantity * 5994 ;
                var t_size = document.getElementById("t_size");
                var pieces = document.getElementById("pieces");
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
                document.getElementById('img-small').style.display = "none";
                document.getElementById('img-medium').style.display = "block";
                document.getElementById('img-large').style.display = "none";
                document.getElementById('thumb-small').style.display = "none";
                document.getElementById('thumb-medium').style.display = "block";
                document.getElementById('thumb-large').style.display = "none";
                t_size.innerHTML = "Size : " + (3*25.6).toFixed() + " cm x " + (2*25.6).toFixed()+ " cm";
                pieces.innerHTML = "Pieces : "+6*1024;
                console.log("IN MEDIUM")
            }
            if (value == 'Large'){
                var x = quantity * 11988 ;
                var t_size = document.getElementById("t_size");
                var pieces = document.getElementById("pieces");
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
                document.getElementById('img-small').style.display = "none";
                document.getElementById('img-medium').style.display = "none";
                document.getElementById('img-large').style.display = "block";
                document.getElementById('thumb-small').style.display = "none";
                document.getElementById('thumb-medium').style.display = "none";
                document.getElementById('thumb-large').style.display = "block";
                t_size.innerHTML = "Size : " + (4*25.6).toFixed() + " cm x " + (3*25.6).toFixed()+ " cm";
                pieces.innerHTML = "Pieces : "+12*1024;
                console.log("IN LARGE")
            }
			}
			else if (p_title == 'King of the Jungle')
			{
            if (value == 'Small'){
                var x = quantity * 3996 ;
                var t_size = document.getElementById("t_size");
                var pieces = document.getElementById("pieces");
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
                document.getElementById('img-small').style.display = "block";
                document.getElementById('img-medium').style.display = "none";
                document.getElementById('img-large').style.display = "none";
                document.getElementById('thumb-small').style.display = "block";
                document.getElementById('thumb-medium').style.display = "none";
                document.getElementById('thumb-large').style.display = "none";
                t_size.innerHTML = "Size : " + (2*25.6).toFixed() + " cm x " + (2*25.6).toFixed()+ " cm";
                pieces.innerHTML = "Pieces : "+4*1024;
                console.log("IN SMALL")
            }
            if (value == 'Medium'){
                var x = quantity * 5994 ;
                var t_size = document.getElementById("t_size");
                var pieces = document.getElementById("pieces");
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
                document.getElementById('img-small').style.display = "none";
                document.getElementById('img-medium').style.display = "block";
                document.getElementById('img-large').style.display = "none";
                document.getElementById('thumb-small').style.display = "none";
                document.getElementById('thumb-medium').style.display = "block";
                document.getElementById('thumb-large').style.display = "none";
                t_size.innerHTML = "Size : " + (3*25.6).toFixed() + " cm x " + (2*25.6).toFixed()+ " cm";
                pieces.innerHTML = "Pieces : "+6*1024;
                console.log("IN MEDIUM")
            }
            if (value == 'Large'){
                var x = quantity * 11988 ;
                var t_size = document.getElementById("t_size");
                var pieces = document.getElementById("pieces");
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
                document.getElementById('img-small').style.display = "none";
                document.getElementById('img-medium').style.display = "none";
                document.getElementById('img-large').style.display = "block";
                document.getElementById('thumb-small').style.display = "none";
                document.getElementById('thumb-medium').style.display = "none";
                document.getElementById('thumb-large').style.display = "block";
                t_size.innerHTML = "Size : " + (4*25.6).toFixed() + " cm x " + (3*25.6).toFixed()+ " cm";
                pieces.innerHTML = "Pieces : "+12*1024;
                console.log("IN LARGE")
            }
			}
			else if (p_title == 'Abstract wheel')
			{
            if (value == 'Small'){
                var x = quantity * 3996 ;
                var t_size = document.getElementById("t_size");
                var pieces = document.getElementById("pieces");
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
                document.getElementById('img-small').style.display = "block";
                document.getElementById('img-medium').style.display = "none";
                document.getElementById('img-large').style.display = "none";
                document.getElementById('thumb-small').style.display = "block";
                document.getElementById('thumb-medium').style.display = "none";
                document.getElementById('thumb-large').style.display = "none";
                t_size.innerHTML = "Size : " + (2*25.6).toFixed() + " cm x " + (2*25.6).toFixed()+ " cm";
                pieces.innerHTML = "Pieces : "+4*1024;
                console.log("IN SMALL")
            }
            if (value == 'Medium'){
                var x = quantity * 5994 ;
                var t_size = document.getElementById("t_size");
                var pieces = document.getElementById("pieces");
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
                document.getElementById('img-small').style.display = "none";
                document.getElementById('img-medium').style.display = "block";
                document.getElementById('img-large').style.display = "none";
                document.getElementById('thumb-small').style.display = "none";
                document.getElementById('thumb-medium').style.display = "block";
                document.getElementById('thumb-large').style.display = "none";
                t_size.innerHTML = "Size : " + (3*25.6).toFixed() + " cm x " + (2*25.6).toFixed()+ " cm";
                pieces.innerHTML = "Pieces : "+6*1024;
                console.log("IN MEDIUM")
            }
            if (value == 'Large'){
                var x = quantity * 15984 ;
                var t_size = document.getElementById("t_size");
                var pieces = document.getElementById("pieces");
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
                document.getElementById('img-small').style.display = "none";
                document.getElementById('img-medium').style.display = "none";
                document.getElementById('img-large').style.display = "block";
                document.getElementById('thumb-small').style.display = "none";
                document.getElementById('thumb-medium').style.display = "none";
                document.getElementById('thumb-large').style.display = "block";
                t_size.innerHTML = "Size : " + (4*25.6).toFixed() + " cm x " + (4*25.6).toFixed()+ " cm";
                pieces.innerHTML = "Pieces : "+16*1024;
                console.log("IN LARGE")
            }
			}
				else if (p_title == 'Ironman')
			{
           
            if (value == 'Medium'){
                var x = quantity * 5994 ;
                var t_size = document.getElementById("t_size");
                var pieces = document.getElementById("pieces");
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
                document.getElementById('img-small').style.display = "none";
                document.getElementById('img-medium').style.display = "block";
                document.getElementById('img-large').style.display = "none";
                document.getElementById('thumb-small').style.display = "none";
                document.getElementById('thumb-medium').style.display = "block";
                document.getElementById('thumb-large').style.display = "none";
                t_size.innerHTML = "Size : " + (3*25.6).toFixed() + " cm x " + (2*25.6).toFixed()+ " cm";
                pieces.innerHTML = "Pieces : "+6*1024;
                console.log("IN MEDIUM")
            }
            if (value == 'Large'){
                var x = quantity * 11988 ;
                var t_size = document.getElementById("t_size");
                var pieces = document.getElementById("pieces");
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
                document.getElementById('img-small').style.display = "none";
                document.getElementById('img-medium').style.display = "none";
                document.getElementById('img-large').style.display = "block";
                document.getElementById('thumb-small').style.display = "none";
                document.getElementById('thumb-medium').style.display = "none";
                document.getElementById('thumb-large').style.display = "block";
                t_size.innerHTML = "Size : " + (4*25.6).toFixed() + " cm x " + (3*25.6).toFixed()+ " cm";
                pieces.innerHTML = "Pieces : "+12*1024;
                console.log("IN LARGE")
            }
			}
				else if (p_title == 'The Joker')
			{
           
            if (value == 'Medium'){
                var x = quantity * 5994 ;
                var t_size = document.getElementById("t_size");
                var pieces = document.getElementById("pieces");
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
                document.getElementById('img-small').style.display = "none";
                document.getElementById('img-medium').style.display = "block";
                document.getElementById('img-large').style.display = "none";
                document.getElementById('thumb-small').style.display = "none";
                document.getElementById('thumb-medium').style.display = "block";
                document.getElementById('thumb-large').style.display = "none";
                t_size.innerHTML = "Size : " + (3*25.6).toFixed() + " cm x " + (2*25.6).toFixed()+ " cm";
                pieces.innerHTML = "Pieces : "+6*1024;
                console.log("IN MEDIUM")
            }
            if (value == 'Large'){
                var x = quantity * 11988 ;
                var t_size = document.getElementById("t_size");
                var pieces = document.getElementById("pieces");
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
                document.getElementById('img-small').style.display = "none";
                document.getElementById('img-medium').style.display = "none";
                document.getElementById('img-large').style.display = "block";
                document.getElementById('thumb-small').style.display = "none";
                document.getElementById('thumb-medium').style.display = "none";
                document.getElementById('thumb-large').style.display = "block";
                t_size.innerHTML = "Size : " + (4*25.6).toFixed() + " cm x " + (3*25.6).toFixed()+ " cm";
                pieces.innerHTML = "Pieces : "+12*1024;
                console.log("IN LARGE")
            }
			}
				else if (p_title == 'Eye of the Storm')
			{
           
            if (value == 'Medium'){
                var x = quantity * 5994 ;
                var t_size = document.getElementById("t_size");
                var pieces = document.getElementById("pieces");
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
                document.getElementById('img-small').style.display = "none";
                document.getElementById('img-medium').style.display = "block";
                document.getElementById('img-large').style.display = "none";
                document.getElementById('thumb-small').style.display = "none";
                document.getElementById('thumb-medium').style.display = "block";
                document.getElementById('thumb-large').style.display = "none";
                t_size.innerHTML = "Size : " + (3*25.6).toFixed() + " cm x " + (2*25.6).toFixed()+ " cm";
                pieces.innerHTML = "Pieces : "+6*1024;
                console.log("IN MEDIUM")
            }
            if (value == 'Large'){
                var x = quantity * 11988 ;
                var t_size = document.getElementById("t_size");
                var pieces = document.getElementById("pieces");
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
                document.getElementById('img-small').style.display = "none";
                document.getElementById('img-medium').style.display = "none";
                document.getElementById('img-large').style.display = "block";
                document.getElementById('thumb-small').style.display = "none";
                document.getElementById('thumb-medium').style.display = "none";
                document.getElementById('thumb-large').style.display = "block";
                t_size.innerHTML = "Size : " + (4*25.6).toFixed() + " cm x " + (3*25.6).toFixed()+ " cm";
                pieces.innerHTML = "Pieces : "+12*1024;
                console.log("IN LARGE")
            }
			}
				else if (p_title == 'Man’s best friend')
			{
            if (value == 'Small'){
                var x = quantity * 3996 ;
                var t_size = document.getElementById("t_size");
                var pieces = document.getElementById("pieces");
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
                document.getElementById('img-small').style.display = "block";
                document.getElementById('img-medium').style.display = "none";
                document.getElementById('img-large').style.display = "none";
                document.getElementById('thumb-small').style.display = "block";
                document.getElementById('thumb-medium').style.display = "none";
                document.getElementById('thumb-large').style.display = "none";
                t_size.innerHTML = "Size : " + (2*25.6).toFixed() + " cm x " + (2*25.6).toFixed()+ " cm";
                pieces.innerHTML = "Pieces : "+4*1024;
                console.log("IN SMALL")
            }
            if (value == 'Medium'){
                var x = quantity * 5994 ;
                var t_size = document.getElementById("t_size");
                var pieces = document.getElementById("pieces");
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
                document.getElementById('img-small').style.display = "none";
                document.getElementById('img-medium').style.display = "block";
                document.getElementById('img-large').style.display = "none";
                document.getElementById('thumb-small').style.display = "none";
                document.getElementById('thumb-medium').style.display = "block";
                document.getElementById('thumb-large').style.display = "none";
                t_size.innerHTML = "Size : " + (3*25.6).toFixed() + " cm x " + (2*25.6).toFixed()+ " cm";
                pieces.innerHTML = "Pieces : "+6*1024;
                console.log("IN MEDIUM")
            }
            if (value == 'Large'){
                var x = quantity * 8991 ;
                var t_size = document.getElementById("t_size");
                var pieces = document.getElementById("pieces");
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
                document.getElementById('img-small').style.display = "none";
                document.getElementById('img-medium').style.display = "none";
                document.getElementById('img-large').style.display = "block";
                document.getElementById('thumb-small').style.display = "none";
                document.getElementById('thumb-medium').style.display = "none";
                document.getElementById('thumb-large').style.display = "block";
                t_size.innerHTML = "Size : " + (3*25.6).toFixed() + " cm x " + (3*25.6).toFixed()+ " cm";
                pieces.innerHTML = "Pieces : "+9*1024;
                console.log("IN LARGE")
            }
			}
			else if (p_title == 'Precious Pooch')
			{
            if (value == 'Small'){
                var x = quantity * 3996 ;
                var t_size = document.getElementById("t_size");
                var pieces = document.getElementById("pieces");
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
                document.getElementById('img-small').style.display = "block";
                document.getElementById('img-medium').style.display = "none";
                document.getElementById('img-large').style.display = "none";
                document.getElementById('thumb-small').style.display = "block";
                document.getElementById('thumb-medium').style.display = "none";
                document.getElementById('thumb-large').style.display = "none";
                t_size.innerHTML = "Size : " + (2*25.6).toFixed() + " cm x " + (2*25.6).toFixed()+ " cm";
                pieces.innerHTML = "Pieces : "+4*1024;
                console.log("IN SMALL")
            }
            if (value == 'Medium'){
                var x = quantity * 5994 ;
                var t_size = document.getElementById("t_size");
                var pieces = document.getElementById("pieces");
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
                document.getElementById('img-small').style.display = "none";
                document.getElementById('img-medium').style.display = "block";
                document.getElementById('img-large').style.display = "none";
                document.getElementById('thumb-small').style.display = "none";
                document.getElementById('thumb-medium').style.display = "block";
                document.getElementById('thumb-large').style.display = "none";
                t_size.innerHTML = "Size : " + (2*25.6).toFixed() + " cm x " + (3*25.6).toFixed()+ " cm";
                pieces.innerHTML = "Pieces : "+6*1024;
                console.log("IN MEDIUM")
            }
            if (value == 'Large'){
                var x = quantity * 8991 ;
                var t_size = document.getElementById("t_size");
                var pieces = document.getElementById("pieces");
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
                document.getElementById('img-small').style.display = "none";
                document.getElementById('img-medium').style.display = "none";
                document.getElementById('img-large').style.display = "block";
                document.getElementById('thumb-small').style.display = "none";
                document.getElementById('thumb-medium').style.display = "none";
                document.getElementById('thumb-large').style.display = "block";
                t_size.innerHTML = "Size : " + (3*25.6).toFixed() + " cm x " + (3*25.6).toFixed()+ " cm";
                pieces.innerHTML = "Pieces : "+9*1024;
                console.log("IN LARGE")
            }
			}
			else if (p_title == 'Mandala')
			{
          
            if (value == 'Medium'){
                var x = quantity * 15984 ;
                var t_size = document.getElementById("t_size");
                var pieces = document.getElementById("pieces");
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
                document.getElementById('img-small').style.display = "none";
                document.getElementById('img-medium').style.display = "block";
                document.getElementById('img-large').style.display = "none";
                document.getElementById('thumb-small').style.display = "none";
                document.getElementById('thumb-medium').style.display = "block";
                document.getElementById('thumb-large').style.display = "none";
                t_size.innerHTML = "Size : " + (4*25.6).toFixed() + " cm x " + (4*25.6).toFixed()+ " cm";
                pieces.innerHTML = "Pieces : "+16*1024;
                console.log("IN MEDIUM")
            }
            if (value == 'Large'){
                var x = quantity * 63936 ;
                var t_size = document.getElementById("t_size");
                var pieces = document.getElementById("pieces");
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
                document.getElementById('img-small').style.display = "none";
                document.getElementById('img-medium').style.display = "none";
                document.getElementById('img-large').style.display = "block";
                document.getElementById('thumb-small').style.display = "none";
                document.getElementById('thumb-medium').style.display = "none";
                document.getElementById('thumb-large').style.display = "block";
                t_size.innerHTML = "Size : " + (8*25.6).toFixed() + " cm x " + (8*25.6).toFixed()+ " cm";
                pieces.innerHTML = "Pieces : "+64*1024;
                console.log("IN LARGE")
            }
			}
			else if (p_title == 'Rudra')
			{
            if (value == 'Small'){
                var x = quantity * 3996 ;
                var t_size = document.getElementById("t_size");
                var pieces = document.getElementById("pieces");
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
                document.getElementById('img-small').style.display = "block";
                document.getElementById('img-medium').style.display = "none";
                document.getElementById('img-large').style.display = "none";
                document.getElementById('thumb-small').style.display = "block";
                document.getElementById('thumb-medium').style.display = "none";
                document.getElementById('thumb-large').style.display = "none";
                t_size.innerHTML = "Size : " + (2*25.6).toFixed() + " cm x " + (2*25.6).toFixed()+ " cm";
                pieces.innerHTML = "Pieces : "+4*1024;
                console.log("IN SMALL")
            }
            if (value == 'Medium'){
                var x = quantity * 11988 ;
                var t_size = document.getElementById("t_size");
                var pieces = document.getElementById("pieces");
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
                document.getElementById('img-small').style.display = "none";
                document.getElementById('img-medium').style.display = "block";
                document.getElementById('img-large').style.display = "none";
                document.getElementById('thumb-small').style.display = "none";
                document.getElementById('thumb-medium').style.display = "block";
                document.getElementById('thumb-large').style.display = "none";
                t_size.innerHTML = "Size : " + (3*25.6).toFixed() + " cm x " + (4*25.6).toFixed()+ " cm";
                pieces.innerHTML = "Pieces : "+12*1024;
                console.log("IN MEDIUM")
            }
            if (value == 'Large'){
                var x = quantity * 15984 ;
                var t_size = document.getElementById("t_size");
                var pieces = document.getElementById("pieces");
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
                document.getElementById('img-small').style.display = "none";
                document.getElementById('img-medium').style.display = "none";
                document.getElementById('img-large').style.display = "block";
                document.getElementById('thumb-small').style.display = "none";
                document.getElementById('thumb-medium').style.display = "none";
                document.getElementById('thumb-large').style.display = "block";
                t_size.innerHTML = "Size : " + (4*25.6).toFixed() + " cm x " + (4*25.6).toFixed()+ " cm";
                pieces.innerHTML = "Pieces : "+16*1024;
                console.log("IN LARGE")
            }
			}
			else if (p_title == 'Marilyn Monroe')
			{
            if (value == 'Medium'){
                var x = quantity * 5994 ;
                var t_size = document.getElementById("t_size");
                var pieces = document.getElementById("pieces");
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
                document.getElementById('img-small').style.display = "none";
                document.getElementById('img-medium').style.display = "block";
                document.getElementById('img-large').style.display = "none";
                document.getElementById('thumb-small').style.display = "none";
                document.getElementById('thumb-medium').style.display = "block";
                document.getElementById('thumb-large').style.display = "none";
                t_size.innerHTML = "Size : " + (3*25.6).toFixed() + " cm x " + (2*25.6).toFixed()+ " cm";
                pieces.innerHTML = "Pieces : "+6*1024;
                console.log("IN MEDIUM")
            }
            if (value == 'Large'){
                var x = quantity * 11988 ;
                var t_size = document.getElementById("t_size");
                var pieces = document.getElementById("pieces");
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
                document.getElementById('img-small').style.display = "none";
                document.getElementById('img-medium').style.display = "none";
                document.getElementById('img-large').style.display = "block";
                document.getElementById('thumb-small').style.display = "none";
                document.getElementById('thumb-medium').style.display = "none";
                document.getElementById('thumb-large').style.display = "block";
                t_size.innerHTML = "Size : " + (4*25.6).toFixed() + " cm x " + (3*25.6).toFixed()+ " cm";
                pieces.innerHTML = "Pieces : "+12*1024;
                console.log("IN LARGE")
            }
			}
			
			
        }
        function changeProdValue(){
            var product_size = document.getElementById('product_size');
			 var p_title = document.getElementById('testingphase').innerText;
            var value = product_size.options[product_size.selectedIndex].value;
            var product_quantity = document.getElementById('product_quantity_select');
            var quantity = product_quantity.options[product_quantity.selectedIndex].value;
			if (p_title == 'Gowthama')
			{
            if (value == 'Small'){
                var x = quantity * 3996 ;
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
            }
            if (value == 'Medium'){
                var x = quantity * 5994 ;
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
            }
            if (value == 'Large'){
                var x = quantity * 11988 ;
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
            }
			}
			else if (p_title == 'Koi')
			{
            if (value == 'Small'){
                var x = quantity * 5994 ;
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
            }
            if (value == 'Medium'){
                var x = quantity * 11988 ;
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
            }
            if (value == 'Large'){
                var x = quantity * 19980 ;
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
            }
			}
			else if (p_title == 'Ojos')
			{
            
            if (value == 'Medium'){
                var x = quantity * 8991 ;
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
            }
            if (value == 'Large'){
                var x = quantity * 11988 ;
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
            }
			}
			else if (p_title == 'Leo')
			{
            
            if (value == 'Medium'){
                var x = quantity * 5994 ;
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
            }
            if (value == 'Large'){
                var x = quantity * 11988 ;
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
            }
			}
			else if (p_title == 'King of the Jungle')
			{
            if (value == 'Small'){
                var x = quantity * 3996 ;
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
            }
            if (value == 'Medium'){
                var x = quantity * 5994 ;
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
            }
            if (value == 'Large'){
                var x = quantity * 11988 ;
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
            }
			}
			else if (p_title == 'Abstract wheel')
			{
            if (value == 'Small'){
                var x = quantity * 3996 ;
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
            }
            if (value == 'Medium'){
                var x = quantity * 5994 ;
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
            }
            if (value == 'Large'){
                var x = quantity * 15984 ;
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
            }
			}
				else if (p_title == 'Ironman')
			{
           
            if (value == 'Medium'){
                var x = quantity * 5994 ;
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
            }
            if (value == 'Large'){
                var x = quantity * 11988 ;
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
            }
			}
				else if (p_title == 'The Joker')
			{
            
            if (value == 'Medium'){
                var x = quantity * 5994 ;
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
            }
            if (value == 'Large'){
                var x = quantity * 11988 ;
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
            }
			}
				else if (p_title == 'Eye of the Storm')
			{
           
            if (value == 'Medium'){
                var x = quantity * 5994 ;
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
            }
            if (value == 'Large'){
                var x = quantity * 11988 ;
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
            }
			}
				else if (p_title == 'Rudra')
			{
            if (value == 'Small'){
                var x = quantity * 3996 ;
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
            }
            if (value == 'Medium'){
                var x = quantity * 11988 ;
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
            }
            if (value == 'Large'){
                var x = quantity * 15984 ;
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
            }
			}
			else if (p_title == 'Marilyn Monroe')
			{
          
            if (value == 'Medium'){
                var x = quantity * 5994 ;
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
            }
            if (value == 'Large'){
                var x = quantity * 11988 ;
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
            }
			}
				else if (p_title == 'Mandala')
			{
          
            if (value == 'Medium'){
                var x = quantity * 15984 ;
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
            }
            if (value == 'Large'){
                var x = quantity * 63936 ;
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
            }
			}
				else if (p_title == 'Precious Pooch')
			{
            if (value == 'Small'){
                var x = quantity * 3996 ;
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
            }
            if (value == 'Medium'){
                var x = quantity * 5994 ;
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
            }
            if (value == 'Large'){
                var x = quantity * 8991 ;
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
            }
			}
				else if (p_title == 'Man’s best friend')
			{
            if (value == 'Small'){
                var x = quantity * 3996 ;
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
            }
            if (value == 'Medium'){
                var x = quantity * 5994 ;
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
            }
            if (value == 'Large'){
                var x = quantity * 8991 ;
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
            }
			}
            else if (value == 'WallMount'){
                var x = quantity * 99 ;
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
                // alert(document.getElementById('product_size').innerHTML)
            }
            else if (value == 'LED Backlight'){
                var x = quantity * 499 ;
                document.getElementById('product_p').innerHTML = "Product Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
            }
			else if (p_title == 'IMKBundle'){
                var x = quantity * 20000;
                document.getElementById('product_p').innerHTML = "Bundle Price : <span style='color: #ddb253 !important; font-weight: bold'>₹</span> "+x;
                // alert(document.getElementById('product_size').innerHTML)
            }
        }
        $("form").submit(function() {
            $("#product_size").prop("disabled", false);
        });


        var t1 = document.getElementById('man_name').innerText;
        console.log(t1)
        if(t1 == "Koha Manufacturer"){
            console.log(t1);
            document.getElementById('man_name').style.display = "hide";
        }
        function form_submit() {
            document.getElementById("contact-form").submit();
        }

    </script>
    </body>
    </html>

    <?php } ?>
