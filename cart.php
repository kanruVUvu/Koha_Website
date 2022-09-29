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
<style>

input[type="button"] {
  -webkit-appearance: button;
  cursor: pointer;
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
}

.input-group {
  clear: both;
  margin: 15px 0;
  position: relative;
}

.input-group input[type='button'] {
  background-color: #eeeeee;
  width: auto;
  transition: all 300ms ease;
}


.input-group .button-minus,
.input-group .button-plus {
  font-weight: bold;
  padding: 0;
  position: relative;
}

.input-group .quantity-field {
  position: relative;
  height: 38px;
  left: -6px;
  text-align: center;
  width: 62px;
  display: inline-block;
  font-size: 13px;
  margin: 0 0 5px;
  resize: vertical;
}

.button-plus {
  left: -13px;
}

input[type="number"] {
  -moz-appearance: textfield;
  -webkit-appearance: none;
}
</style>

<!-- MAIN -->
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
      <span class="nero__bold">SHOP</span> Cart
    </div>
    <p class="nero__text">
    </p>
  </div>
</main>-->
<div style="margin: 100px 0 20px 0">
    <div style="background-color: black; color: white">
        <div class="container">
            <div style="display: flex; justify-content: left">
                <h2 style="text-align:right; font-size: 20px !important;"><a style="color: #ddb253" href="index.php">Home&nbsp;</a></h2>
                <h2 style="color: white !important; font-size: 20px !important;"> / My Cart</h2>
                <!--<ol>
                  <li><a href="index.html">Home</a></li>
                  <li>Customer Registration</li>
                </ol>-->
            </div>

        </div>
    </div>
</div>
<main id="main">
    <!-- <section class="breadcrumbs" style="color: white; background-color: black">-->
    <!--      <div class="container">-->
    <!---->
    <!--        <div class="d-flex justify-content-between align-items-center">-->
    <!--          <h2 class="textmove" style="text-align:right;"><a href="index.php">Home</a> / Cart</h2>-->
    <!--<ol>
      <li><a href="index.html">Home</a></li>
      <li>Customer Registration</li>-->
    <!--          </ol>-->
    <!--        </div>-->
    <!---->
    <!--      </div>-->
    <!--    </section>-->
</main>
<br/>
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

            <div class="col-md-8 col-sm-12 col-xs-12"  ><!-- col-md-9 Starts -->

                <div class="box" style="border-radius: 20px;border:1px solid black !important;background-color:#000000 !important;" ><!-- box Starts -->

                    <form action="cart.php" method="post" enctype="multipart-form-data" ><!-- form Starts -->

                        <h3 style="color:#ffffff !important;font-weight:bold !important;margin-left:30px !important;"> Shopping Cart </h3>

                        <?php

                        //$ip_add = getRealUserIp();

                        $select_cart = "select * from cart where cust_email='$em'";

                        $run_cart = mysqli_query($con,$select_cart);

                        $count = mysqli_num_rows($run_cart);

                        ?>

                        <!--<p class="text-muted" > You currently have --><?php //echo $count; ?><!-- item(s) in your cart. </p>-->

                        <div class="table-responsive" ><!-- table-responsive Starts -->

                            <table class="table" ><!-- table Starts -->

                                <thead><!-- thead Starts -->
                                <!---->
                                <!--<tr>-->
                                <!---->
                                <!--<th colspan="2" >Product</th>-->
                                <!---->
                                <!--<th>Quantity</th>-->
                                <!---->
                                <!--<th>Unit Price</th>-->
                                <!---->
                                <!--<th>Size</th>-->
                                <!---->
                                <!--<th colspan="1">Delete</th>-->
                                <!---->
                                <!--<th colspan="2"> Sub Total </th>-->
                                <!---->
                                <!---->
                                <!--</tr>-->

                                </thead><!-- thead Ends -->

                                <tbody><!-- tbody Starts -->

                                <?php

                                $total = 0;
								$total2 = 0;
								$shf = 100;
								$tax = 18;

                                while($row_cart = mysqli_fetch_array($run_cart)){

                                    $pro_id = $row_cart['p_id'];

//    echo "<script>alert($pro_id)</script>";

                                    $pro_size = $row_cart['size'];

                                    $pro_type = $row_cart['p_type'];

                                    $pro_qty = $row_cart['qty'];

                                    $unit_price = $row_cart['u_price'];

                                    $only_price = $row_cart['p_price'];
                                      $pro_title = $row_cart['p_title'];
									  $pro_imagetest = $row_cart['uploaded_image'];
                                    $get_products = "select * from products where product_id='$pro_id'";

                                    $run_products = mysqli_query($con,$get_products);

                                    while ($row_products = mysqli_fetch_array($run_products)) {

                                        $product_title = $row_products['product_title'];

                                        $base_url = "admin_area/product_images/";
										if($pro_type == 'Marketplace')
										{
										if ((($pro_title == "Man’s best friend") || ($pro_title == "Gowthama") || ($pro_title == "Koi") || ($pro_title == "Abstract wheel") || ($pro_title == "King of the Jungle") || ($pro_title == "Precious Pooch")))
										{
                                        if ($pro_size == 'Small') {
                                            $product_img = $row_products['product_img1'];
                                            $product_img1 = $base_url.$product_img;
                                        } else if ($pro_size == 'Medium') {
                                            $product_img = $row_products['product_img2'];
                                            $product_img1 = $base_url.$product_img;
                                        } else if ($pro_size == 'Large') {
                                            $product_img = $row_products['product_img3'];
                                            $product_img1 = $base_url.$product_img;
                                        }
										}
										else if((($pro_title == "Leo") || ($pro_title == "Marilyn Monroe") || ($pro_title == "Rudra") || ($pro_title == "Mandala") || ($pro_title == "The Joker") || ($pro_title == "Ironman") || ($pro_title == "Eye of the Storm") || ($pro_title == "Ojos")))
										{
										 if ($pro_size == 'Medium') {
                                            $product_img = $row_products['product_img2'];
                                            $product_img1 = $base_url.$product_img;
                                        } else if ($pro_size == 'Large') {
                                            $product_img = $row_products['product_img3'];
                                            $product_img1 = $base_url.$product_img;
                                        }
										}
										 else if ($pro_title == 'OverallMP_Bundle'){
                                            $product_img = $row_products['product_img2'];
                                            $product_img1 = $base_url.$product_img;
                                        }
										}
										else if($pro_type == 'Accessories')
										{
                                        if ($pro_size == 'WallMount' || $pro_size == 'LED Backlight' || $pro_size == ''){
                                            $product_img = $row_products['product_img2'];
                                            $product_img1 = $base_url.$product_img;
                                        }
										}

//echo "<script>alert('Price: ' + $only_price)</script>";
//    echo "<script>alert('Qty: ' + $pro_qty)</script>";
//$sub_total = (int)$only_price*(int)$pro_qty;
 if($pro_type == 'Marketplace' && $pro_title == 'Gowthama'){
                                        if ($pro_size == 'Large') {
                                            $x = 999;
                                            $y = 12;
                                            $z = $x*$y;
                                            $only_price= $pro_qty * $z;
//        echo "<script>alert('Large: '+ $x*$y)";
                                        }
                                        if ($pro_size == 'Medium') {
                                            $x = 999;
                                            $y = 6;
                                            $z = $x*$y;
                                            $only_price= $pro_qty * $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
                                        }
                                        if ($pro_size == 'Small') {
                                            $x = 999;
                                            $y = 4;
                                            $z = $x*$y;
                                           $only_price= $pro_qty * $z;
//        echo "<script>alert('Small: '+ $x*$y)";
                                        }
                                    }
									else if($pro_type == 'Marketplace' && $pro_title == 'Koi'){
                                        if ($pro_size == 'Large') {
                                            $x = 999;
                                            $y = 20;
                                            $z = $x*$y;
                                           $only_price= $pro_qty * $z;
//        echo "<script>alert('Large: '+ $x*$y)";
                                        }
                                        if ($pro_size == 'Medium') {
                                            $x = 999;
                                            $y = 12;
                                            $z = $x*$y;
                                          $only_price= $pro_qty * $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
                                        }
                                        if ($pro_size == 'Small') {
                                            $x = 999;
                                            $y = 6;
                                            $z = $x*$y;
                                          $only_price= $pro_qty * $z;
//        echo "<script>alert('Small: '+ $x*$y)";
                                        }
                                    }
									else if($pro_type == 'Marketplace' && $pro_title == 'Ojos'){
                                        if ($pro_size == 'Large') {
                                            $x = 999;
                                            $y = 12;
                                            $z = $x*$y;
                                           $only_price= $pro_qty * $z;
//        echo "<script>alert('Large: '+ $x*$y)";
                                        }
                                        if ($pro_size == 'Medium') {
                                            $x = 999;
                                            $y = 9;
                                            $z = $x*$y;
                                            $only_price= $pro_qty * $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
                                        }
                                      
                                    }
									else if($pro_type == 'Marketplace' && $pro_title == 'Leo'){
                                        if ($pro_size == 'Large') {
                                            $x = 999;
                                            $y = 12;
                                            $z = $x*$y;
                                          $only_price= $pro_qty * $z;
//        echo "<script>alert('Large: '+ $x*$y)";
                                        }
                                        if ($pro_size == 'Medium') {
                                            $x = 999;
                                            $y = 6;
                                            $z = $x*$y;
                                           $only_price= $pro_qty * $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
                                        }
                                       
                                    }
									else if($pro_type == 'Marketplace' && $pro_title == 'King of the Jungle'){
                                        if ($pro_size == 'Large') {
                                            $x = 999;
                                            $y = 12;
                                            $z = $x*$y;
                                           $only_price= $pro_qty * $z;
//        echo "<script>alert('Large: '+ $x*$y)";
                                        }
                                        if ($pro_size == 'Medium') {
                                            $x = 999;
                                            $y = 6;
                                            $z = $x*$y;
                                          $only_price= $pro_qty * $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
                                        }
                                        if ($pro_size == 'Small') {
                                            $x = 999;
                                            $y = 4;
                                            $z = $x*$y;
                                          $only_price= $pro_qty * $z;
//        echo "<script>alert('Small: '+ $x*$y)";
                                        }
                                    }
									else if($pro_type == 'Marketplace' && $pro_title == 'Abstract wheel'){
                                        if ($pro_size == 'Large') {
                                            $x = 999;
                                            $y = 16;
                                            $z = $x*$y;
                                          $only_price= $pro_qty * $z;
//        echo "<script>alert('Large: '+ $x*$y)";
                                        }
                                        if ($pro_size == 'Medium') {
                                            $x = 999;
                                            $y = 6;
                                            $z = $x*$y;
                                         $only_price= $pro_qty * $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
                                        }
                                        if ($pro_size == 'Small') {
                                            $x = 999;
                                            $y = 4;
                                            $z = $x*$y;
                                         $only_price= $pro_qty * $z;
                                        }
                                    }
									else if($pro_type == 'Marketplace' && $pro_title == 'Ironman'){
                                        if ($pro_size == 'Large') {
                                            $x = 999;
                                            $y = 12;
                                            $z = $x*$y;
                                           $only_price= $pro_qty * $z;
//        echo "<script>alert('Large: '+ $x*$y)";
                                        }
                                        if ($pro_size == 'Medium') {
                                            $x = 999;
                                            $y = 6;
                                            $z = $x*$y;
                                          $only_price= $pro_qty * $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
                                        }
                                      
                                    }
									else if($pro_type == 'Marketplace' && $pro_title == 'The Joker'){
                                        if ($pro_size == 'Large') {
                                            $x = 999;
                                            $y = 12;
                                            $z = $x*$y;
                                           $only_price= $pro_qty * $z;
//        echo "<script>alert('Large: '+ $x*$y)";
                                        }
                                        if ($pro_size == 'Medium') {
                                            $x = 999;
                                            $y = 6;
                                            $z = $x*$y;
                                          $only_price= $pro_qty * $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
                                        }
                                      
                                    }
									else if($pro_type == 'Marketplace' && $pro_title == 'Eye of the Storm'){
                                        if ($pro_size == 'Large') {
                                            $x = 999;
                                            $y = 12;
                                            $z = $x*$y;
                                           $only_price= $pro_qty * $z;
//        echo "<script>alert('Large: '+ $x*$y)";
                                        }
                                        if ($pro_size == 'Medium') {
                                            $x = 999;
                                            $y = 6;
                                            $z = $x*$y;
                                          $only_price= $pro_qty * $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
                                        }
                                       
                                    }
									else if($pro_type == 'Marketplace' && $pro_title == 'Man’s best friend'){
                                        if ($pro_size == 'Large') {
                                            $x = 999;
                                            $y = 9;
                                            $z = $x*$y;
                                           $only_price= $pro_qty * $z;
//        echo "<script>alert('Large: '+ $x*$y)";
                                        }
                                        if ($pro_size == 'Medium') {
                                            $x = 999;
                                            $y = 6;
                                            $z = $x*$y;
                                          $only_price= $pro_qty * $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
                                        }
                                        if ($pro_size == 'Small') {
                                            $x = 999;
                                            $y = 4;
                                            $z = $x*$y;
                                          $only_price= $pro_qty * $z;
//        echo "<script>alert('Small: '+ $x*$y)";
                                        }
                                    }
									else if($pro_type == 'Marketplace' && $pro_title == 'Precious Pooch'){
                                        if ($pro_size == 'Large') {
                                            $x = 999;
                                            $y = 9;
                                            $z = $x*$y;
                                           $only_price= $pro_qty * $z;
//        echo "<script>alert('Large: '+ $x*$y)";
                                        }
                                        if ($pro_size == 'Medium') {
                                            $x = 999;
                                            $y = 6;
                                            $z = $x*$y;
                                          $only_price= $pro_qty * $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
                                        }
                                        if ($pro_size == 'Small') {
                                            $x = 999;
                                            $y = 4;
                                            $z = $x*$y;
                                          $only_price= $pro_qty * $z;
//        echo "<script>alert('Small: '+ $x*$y)";
                                        }
                                    }
									else if($pro_type == 'Marketplace' && $pro_title == 'Mandala'){
                                        if ($pro_size == 'Large') {
                                            $x = 999;
                                            $y = 64;
                                            $z = $x*$y;
                                           $only_price= $pro_qty * $z;
//        echo "<script>alert('Large: '+ $x*$y)";
                                        }
                                        if ($pro_size == 'Medium') {
                                            $x = 999;
                                            $y = 16;
                                            $z = $x*$y;
                                          $only_price= $pro_qty * $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
                                        }
                                      
                                    }
									else if($pro_type == 'Marketplace' && $pro_title == 'Marilyn Monroe'){
                                        if ($pro_size == 'Large') {
                                            $x = 999;
                                            $y = 12;
                                            $z = $x*$y;
                                           $only_price= $pro_qty * $z;
//        echo "<script>alert('Large: '+ $x*$y)";
                                        }
                                        if ($pro_size == 'Medium') {
                                            $x = 999;
                                            $y = 6;
                                            $z = $x*$y;
                                          $only_price= $pro_qty * $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
                                        }
                                      
                                    }
									else if($pro_type == 'Marketplace' && $pro_title == 'Rudra'){
                                        if ($pro_size == 'Large') {
                                            $x = 999;
                                            $y = 16;
                                            $z = $x*$y;
                                           $only_price= $pro_qty * $z;
//        echo "<script>alert('Large: '+ $x*$y)";
                                        }
                                        if ($pro_size == 'Medium') {
                                            $x = 999;
                                            $y = 12;
                                            $z = $x*$y;
                                          $only_price= $pro_qty * $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
                                        }
                                        if ($pro_size == 'Small') {
                                            $x = 999;
                                            $y = 4;
                                            $z = $x*$y;
                                          $only_price= $pro_qty * $z;
//        echo "<script>alert('Small: '+ $x*$y)";
                                        }
                                    }
                                        if($pro_type == 'Custom'){

                                            $only_price = $pro_qty*$only_price;

                                        }
                                        $sub_total = (int)($row_cart['p_price']*$pro_qty);

//$_SESSION['pro_qty'] = $pro_qty;

                                        $total2 += $sub_total;
										$total = ($total2+$shf+(($tax/100)*$total2));
                                        if ($pro_id == 10001){
//    echo "<script>alert('Custom product detected')</script>";
//    $_SESSION['pro_qty'] = $pro_qty;
                                            $cart_img = "select image from cart where cust_email='$em'";
                                            $run_cart_img = mysqli_query($con,$cart_img);
//    $img_add = mysqli_num_rows($run_cart_img);
                                            while ($row_img = mysqli_fetch_array($run_cart_img)) {
                                                $base_url = "../Koha-IRS/static/outputs/";
                                                $img_url = $row_cart['lego_gap'];
//        echo "<script>alert($img_url)</script>";
                                            }
                                            $product_img1 = $base_url.$img_url;
//    echo "<script>alert($img_url)</script>";
                                            $pro_size = $row_cart['size'];

                                        }
										$_SESSION['total2'] = $total2;
										$_SESSION['total'] = $total;
										$_SESSION['shf'] = $shf;
										$_SESSION['tax'] = $tax;
                                        $_SESSION['pro_qty'] = $pro_qty;

                                        echo "<script></script>"
//        session_write_close();
                                        ?>
                                        <!---->
                                        <!--<tr>
                                        -->
                                        <!--<td>-->
                                        <!---->
                                        <!--    --><?php ////echo $product_img1; ?>
                                        <!---->
                                        <!--<img style="height: 50px; width: 50px" src="--><?php //echo $product_img1; ?><!--" >-->
                                        <!---->
                                        <!--</td>-->
                                        <!---->
                                        <!--<td>-->
                                        <!---->
                                        <!--<a style="color: wheat" href="#" > --><?php //echo $product_title; ?><!-- </a>-->
                                        <!---->
                                        <!--</td>-->
                                        <!---->
                                        <!--<td>-->
                                        <!--<input type="text" name="quantity" value="--><?php //echo $_SESSION['pro_qty']; ?><!--" data-product_id="--><?php //echo $pro_id; ?><!--" class="quantity form-control">-->
                                        <!--</td>-->
                                        <!---->
                                        <!--<td>-->
                                        <!---->
                                        <!--&#X20B9;--><?php //echo $unit_price; ?><!--.00-->
                                        <!---->
                                        <!--</td>-->
                                        <!---->
                                        <!--<td>-->
                                        <!---->
                                        <?php //echo $pro_size; ?>
                                        <!---->
                                        <!--</td>-->
                                        <!---->
                                        <!--<td>-->
                                        <!--<input type="checkbox" name="remove[]" value="--><?php //echo $pro_id; ?><!--">-->
                                        <!--</td>-->
                                        <!---->
                                        <!--<td>-->
                                        <!---->
                                        <!--&#X20B9;--><?php //echo $sub_total; ?><!--.00-->
                                        <!---->
                                        <!--</td>-->
                                        <!---->
                                        <!--</tr>
                                        -->
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-12 mt-3">
                                                    <div class="card" style="background-color: #000000; color: white; padding: 20px; border:0px">
                                                        <div class="row">

                                                            <!--                        <div class="card-horizontal">-->
                                                            
															<div class="col-lg-4 col-md-4" style="border:1px solid #ffffff !important;border-radius:10px !important;padding:20px !important;">
                                                                <?php


                            if($pro_title == 'Precious Pooch' && $pro_size == 'Small'){
								?>
																<div class="img-square-wrapper">
                                                                    <img style="height: 192.34px; width: 208px;" src="<?php echo $product_img1; ?>" >


                                                                </div>
																
							<?php }


                            else if($pro_title == 'Precious Pooch' && $pro_size == 'Medium'){
								?>
																<div class="img-square-wrapper">
                                                                    <img style="height: 192.34px; width: auto;" src="<?php echo $product_img1; ?>" >


                                                                </div>
																
							<?php }
      

                            else if($pro_title == 'Precious Pooch' && $pro_size == 'Large'){
								?>
																<div class="img-square-wrapper">
                                                                    <img style="height: 192.34px; width: 208px;" src="<?php echo $product_img1; ?>" >


                                                                </div>
																<?php } else if($pro_title == 'Rudra') {?>
																<div class="img-square-wrapper">
                                                                    <img style="height: 192.34px; width: auto;" src="<?php echo $product_img1; ?>" >


                                                                </div>
																<?php } else if($pro_title == 'Mandala') {?>
																<div class="img-square-wrapper">
                                                                    <img style="height: 192.34px; width: auto;" src="<?php echo $product_img1; ?>" >


                                                                </div>
																<?php } else if($pro_title == 'Ojos') {?>
																<div class="img-square-wrapper">
                                                                    <img style="height: 192.34px; width: auto;" src="<?php echo $product_img1; ?>" >


                                                                </div>
																<?php } else if($pro_type == 'Accessories' && $pro_size == 'WallMount') {?>
																<div class="img-square-wrapper">
                                                                    <img style="height: 192.34px; width: max-content;" src="<?php echo $product_img1; ?>" >


                                                                </div>
																<?php } else if($pro_type == 'Accessories' && $pro_size == 'LED Backlight') {?>
																<div class="img-square-wrapper">
                                                                    <img style="height: 192.34px; width: max-content;" src="<?php echo $product_img1; ?>" >


                                                                </div>
																<?php } else if($pro_type == 'Accessories' && $pro_title == 'Accessories_Bundle') {?>
																<div class="img-square-wrapper">
                                                                    <img style="height: auto; width: max-content;" src="<?php echo $product_img1; ?>" >


                                                                </div>
																<?php } else if($pro_type == 'Marketplace' && $pro_title == 'OverallMP_Bundle') {?>
																<div class="img-square-wrapper">
                                                                    <img style="height: auto; width: max-content;" src="<?php echo $product_img1; ?>" >
                                                                </div>
																<?php } else {?>
																<div class="img-square-wrapper">
                                                                    <img style="height: auto; width: max-content;" src="<?php echo $product_img1; ?>" >


                                                                </div>
																<?php } ?>
                                                            </div>
                                                            <div class="col-lg-7 col-md-7">
                                                                <div class="card-body" style="padding: 0; margin: 0px">
                                                                    <a style="color: white; font-size: 30px !important; margin-bottom: 25px !important;" href="#" > <?php echo $product_title; ?> </a>

                                                                    <!--                        &#X20B9;--><?php //echo $unit_price; ?><!--.00-->
                                                                    <?php if($pro_type == 'Marketplace' && $pro_title == 'OverallMP_Bundle') {?>
																	<?php } else if($pro_type == 'Accessories' && $pro_title == 'Accessories_Bundle') {?>
																	<?php } else {?>
																	<p style="color: white;  padding-top: 16px;padding-bottom: 0;bottom: auto; margin-bottom: 0px; font-size: 20px !important; margin-bottom: 0px; ">Size : <?php echo $pro_size; ?></p>
                                                                    <?php } ?>
																	<!--<p style="color: white; font-size: 20px"><?php echo $pro_size; ?></p>-->
                                                                    <!--                                <input type="checkbox" name="remove[]" value="--><?php //echo $pro_id; ?><!--">-->

                                                                    <div class="row" style="justify-content: space-between; display: flex; ">
                                                                        <div class="col-sm-6 col-md-6">
<p style="  padding-top: 16px;color: white; font-size: 20px !important; margin-bottom: 0px"><span style="font-weight:bold !important;color:#ddb253 !important;">&#X20B9; &nbsp;</span><?php echo $sub_total; ?>.00</p>
<div style="display: flex;width:250px !important" class="input-group">
  <input style="position:relative;right:5px !important;top:10px !important;height: 25px !important; width: 25px !important;  font-family: Roboto Serif !important; border-radius: 100%; font-size:20px; padding: 0 0 10px 0;" type="button" value="-" class="button-minus" data-field="quantity">
  <input id="qtt" type="text" name="quantity" style="border: 1px solid #ffffff;
  box-sizing: border-box;
  margin: 0;
  outline: none;
  padding: 0.375rem 1.35rem !important;font-size: 18px !important;background-color:#2c3034 !important;color:#ffffff !important;" value="<?php echo $_SESSION['pro_qty']; ?>" data-product_imagetest="<?php echo $pro_imagetest; ?>" class="quantity form-control">
 
  <input type="button" style="position:relative;left:5px !important;top:10px !important;height: 25px !important; width: 25px !important; float: left; font-family: Roboto Serif !important; border-radius: 100%; font-size:20px; padding: 0 0 10px 0;" value="+" class="button-plus" data-field="quantity">
  <p style="padding-left: 10px; color: white !important;position:relative !important;top:7px !important;">&nbsp;Quantity</p>
</div>
</div>
                                                                        <div class="col-sm-1 col-md-1">
																		
                                                                            <label style="padding-top: 5px">
                                                                                <span style="padding-left: 20px;cursor: pointer">✕</span>
                                                                                <input id="check" onclick="document.getElementById('update_cart').click()" style="visibility: hidden;content: '✕' !important;" type="checkbox" name="remove[]" value="<?php echo $pro_imagetest; ?>">
                                                                            </label>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <!--                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="margin-top: 60px">-->
                                                            <!--                                onclick="document.getElementById('update_cart').click()"-->
                                                            <!--                                <label>-->
                                                            <!--                                    <span>✕</span>-->
                                                            <!--                                <input id="check" onclick="document.getElementById('update_cart').click()" style="visibility: hidden;content: '✕' !important;" type="checkbox" name="remove[]" value="--><?php //echo $pro_id; ?><!--">-->
                                                            <!--                                </label>-->
                                                            <!--                                onclick="document.getElementById('check').checked = true"-->
                                                            <!--                                <button type="button" onclick="document.getElementById('check').checked = true">🞪</button>-->
                                                            <!--                                <button type="button" onclick="document.getElementById('update_cart').click()" name="remove[]"  value="--><?php //echo $pro_id; ?><!--" style="font-family: Roboto Serif !important; background-color: black !important; color: white!important; border: 0 !important;">🞪</button>-->
                                                            <!--                            </div>-->
                                                            <!--                        </div>-->
                                                        </div>
                                                        <!--                        <div class="card-footer">-->
                                                        <!---->
                                                        <!--                        </div>-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--        <hr>-->

                                    <?php } } ?>


                                </tbody><!-- tbody Ends -->

                                <tfoot><!-- tfoot Starts -->
                                <!---->
                                <!--<tr>-->
                                <!---->
                                <!--<th colspan="5"> Total </th>-->
                                <!---->
                                <!--<th colspan="2"> &#X20B9;--><?php //echo $total; ?><!--.00 </th>-->
                                <!---->
                                <!--</tr>-->

                                </tfoot><!-- tfoot Ends -->

                            </table><!-- table Ends -->

                            <div class="form-inline pull-right">
                                <div class="input-group">
                                    <div class="form-group" style="padding-right: 20px">
                                        <div class="input-group" style="text-align: center">
                                            <!--<label style="text-align: center; padding-top: 10px">Coupon Code: </label>-->

                                            <!--<input style="border-top-style: hidden;-->
                                            <!--        border-right-style: hidden;-->
                                            <!--        border-left-style: hidden;-->
                                            <!--        border-bottom-style: solid;-->
                                            <!--        background-color: #000000 !important;color:#ffffff !important" type="text" name="code" class="form-control" id="testfieldrem" placeholder="Enter Promo Code">-->
                                        </div>
                                    </div><!-- form-group Ends -->

                                    <!--<input class="btn btn-primary" style="height: 38px; border-radius: 7px;" type="submit" name="apply_coupon" value="Apply Coupon Code" >-->

                                </div>
                            </div>
                        </div><!-- table-responsive Ends -->


                        <div class="box-footer" style="border-radius: 20px;background-color: #000000; color: white; border: 0px!important;display: block;
    justify-content: space-evenly;
    align-items: center;
    flex-grow: 1;margin:0px !important;padding:0px !important;"><!-- box-footer Starts -->

                            <div class="pull-left"><!-- pull-left Starts -->

                                <a href="shop.php" class="btn btn-secondary">

                                    <i class="fa fa-chevron-left"></i> Continue Shopping

                                </a>

                            </div><!-- pull-left Ends -->

                            <div class="pull-right"><!-- pull-right Starts -->

                                <button class="btn btn-secondary" type="submit" id="update_cart" name="update" value="Update Cart">

                                    <i class="fa fa-refresh"></i> Update Cart

                                </button>

                                <!--<a href="checkout.php" class="btn btn-primary">-->
                                <!---->
                                <!--Proceed to checkout <i class="fa fa-chevron-right"></i>-->
                                <!---->
                                <!--</a>-->

                            </div><!-- pull-right Ends -->

                        </div><!-- box-footer Ends -->

                        <!--</form>-->
                        <!-- form Ends -->


                </div><!-- box Ends -->

                <?php

                if(isset($_POST['apply_coupon'])){

                    $code = $_POST['code'];

                    if($code == ""){


                    }
                    else{

                        $get_coupons = "select * from coupons where coupon_code='$code'";

                        $run_coupons = mysqli_query($con,$get_coupons);

                        $check_coupons = mysqli_num_rows($run_coupons);

                        if($check_coupons == 1){

                            $row_coupons = mysqli_fetch_array($run_coupons);

                            $coupon_pro = $row_coupons['product_id'];

                            $coupon_price = $row_coupons['coupon_price'];

                            $coupon_limit = $row_coupons['coupon_limit'];

                            $coupon_used = $row_coupons['coupon_used'];


                            if($coupon_limit == $coupon_used){

                                echo "<script>alert('Your Coupon Code Has Been Expired')</script>";

                            }
                            else{

                                $get_cart = "select * from cart where p_id='$coupon_pro' AND cust_email='$em'";

                                $run_cart = mysqli_query($con,$get_cart);

                                $check_cart = mysqli_num_rows($run_cart);


                                if($check_cart == 1){

                                    $add_used = "update coupons set coupon_used=coupon_used+1 where coupon_code='$code'";

                                    $run_used = mysqli_query($con,$add_used);

                                    $update_cart = "update cart set p_price='$coupon_price' where p_id='$coupon_pro' AND cust_email='$em'";
									
                                    $run_update = mysqli_query($con,$update_cart);
									
									$check_update = mysqli_num_rows($run_update);

                                    echo "<script>alert('Your Coupon Code Has Been Applied')</script>";

                                    echo "<script>window.open('cart.php','_self')</script>";

                                }
                                else{

                                    echo "<script>alert('Product Does Not Exist In Cart')</script>";

                                }

                            }

                        }
                        else{

                            echo "<script> alert('Your Coupon Code Is Not Valid') </script>";

                        }

                    }


                }


                ?>

                <?php

                function update_cart(){

                    global $con;

$em = $_SESSION['customer_email'];
                    if(isset($_POST['update'])){

                        foreach($_POST['remove'] as $remove_id){
                        
$q="select p_id from cart where cust_email='$em' and uploaded_image='$remove_id'";
	$result = mysqli_query($con,$q);
	while($row = mysqli_fetch_array($result))
	{
	$promotestyui = $row['p_id'];
                            $delete_product = "delete from cart where p_id='$promotestyui' and cust_email='$em' and uploaded_image='$remove_id'";
	}
                            $run_delete = mysqli_query($con,$delete_product);

                            if($run_delete){
                                echo "<script>window.open('cart.php','_self')</script>";
                            }



                        }




                    }



                }

                echo @$up_cart = update_cart();


                ?>
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12" style="padding: 0 20px"><!-- col-md-3 Starts -->

                <div class="box" id="order-summary" style="background-color: #2c3034;color: white; border-radius: 20px; border: 0px; border-color: black"><!-- box Starts -->

                    <div class="box-header" style="background-color: #2c3034; color: white; border-radius: 20px 20px 0 0 ; border: 0px"><!-- box-header Starts -->

                        <h3 style="text-align: center;font-weight:bold !important;color:#ffffff !important;">Order Summary</h3>

                    </div><!-- box-header Ends -->
					<form action="cart.php" method="post" enctype="multipart-form-data">
                    <div class="d-flex" style="padding: 0 20px">
                        <input style="border-top-style: hidden;
        border-right-style: hidden;
        border-left-style: hidden;
        border-bottom-style: solid;
        background-color: #2c3034 !important;color:#ffffff !important;border-radius: 0px;font-weight:bold !important;" type="text" name="code" class="form-control" id="testfieldrem" placeholder="Enter Promo Code">
                        <input class="btn btn-primary" style="width:200px ;height: 38px;" type="submit" name="apply_coupon" value="Apply" >
                    </div>
</form>
                    <!--<p class="text-muted">
                        Shipping and additional costs are calculated based on the values you have entered.
                    </p>-->

                    <div class="table-responsive" style="padding: 0 20px"><!-- table-responsive Starts -->

                        <table class="table"><!-- table Starts -->

                            <tbody><!-- tbody Starts -->

                            <tr>

                                <td style="color: ghostwhite;font-weight:bold !important;border-bottom:none !important;"> Order Subtotal </td>

                                <th style="border-bottom:none !important;"> &#X20B9;<?php echo $total2; ?>.00 </th>

                            </tr>

                            <tr>

                                <td style="color: ghostwhite;border-bottom:none !important;"> Shipping and handling </td>

                                <th style="border-bottom:none !important;">&#X20B9;<?php echo $shf; ?>.00</th>

                            </tr>

                            <tr>

                                <td style="color: ghostwhite;border-bottom:none !important;">Tax</td>

                                <th style="border-bottom:none !important;"><?php echo $tax; ?>&nbsp;&#37;</th>

                            </tr>

                            <tr class="total">

                                <td style="color: white;border-bottom:none !important;">Total</td>

                                <th style="color: white;border-bottom:none !important;">&#X20B9;<?php echo $total; ?></th>

                            </tr>

                            </tbody><!-- tbody Ends -->

                        </table><!-- table Ends -->

                    </div><!-- table-responsive Ends -->                 
                    <div style="text-align: center">
                        <div style="padding-bottom: 20px"><a style="background-color: black; color: white; font-family: Roboto Serif !important; padding-bottom: 10px; padding-top: 10px; padding-left: 50px; padding-right: 50px;border-radius: 30px; text-align: center" href="shippingcheckout.php">Checkout</a>
                        </div>
                        <!-- <div>
                         <a style="background-color: grey; color: white; font-family: Roboto Serif !important; padding-bottom: 10px; padding-top: 10px; padding-left: 50px; padding-right: 50px;border-radius: 30px; text-align: center" href="#"> <i style="" class="fa-brands fa-paypal"></i>&nbsp;Paypal</a>
                         </div> -->
                    </div>
                </div><!-- box Ends -->

            </div><!-- col-md-3 Ends -->


        </div>
        <section style="data-aos="fade-up"
        data-aos-duration="30000">
        <div style="margin: 0 0">
            <h3 style=";text-transform:uppercase;text-align:center; margin: 0px;color:#ffffff !important;">Recommended Products</h3>
        </div>
        </section>
        <br/>
        <div class="row" id="row same-height-row"><!-- row same-height-row Starts -->

            <?php

            $get_products = "select * from products order by rand() LIMIT 0,3";

            $run_products = mysqli_query($con,$get_products);

            while($row_products=mysqli_fetch_array($run_products)){

                $pro_id = $row_products['product_id'];

                $pro_title = $row_products['product_title'];

                $pro_price = $row_products['product_price'];

                $pro_img1 = $row_products['product_img2'];
$pro_img2 = $row_products['product_img3'];
                $pro_label = $row_products['product_label'];

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

//    <center>
//
//<p class='btn btn-primary'> $manufacturer_name </p>
//
//</center>
//
//<hr>
if($pro_title == "Koi")
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


        </div><!-- row same-height-row Ends -->


    </div><!-- col-md-9 Ends -->

</div><!-- container Ends -->
</div><!-- content Ends -->
</form>
</div>

<br/>
<br/>
<br/>
<br/>

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

<!--<script src="js/bootstrap.min.js"></script>-->



<script>
    document.title = "KOHA | Cart";
function incrementValue(e) {
  e.preventDefault();
  var fieldName = $(e.target).data('field');
  var parent = $(e.target).closest('div');
  var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

  if (!isNaN(currentVal)) {
     parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
	 var x = currentVal + 1;
	console.log(x);
document.getElementById('qtt').value = x;
var z = document.getElementById('qtt').value
	console.log(z);
  } else {
     parent.find('input[name=' + fieldName + ']').val(0);
  }
}

function decrementValue(e) {
  e.preventDefault();
  var fieldName = $(e.target).data('field');
  var parent = $(e.target).closest('div');
  var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

  if (!isNaN(currentVal) && currentVal > 0) {
     parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
	 var x = currentVal - 1;
	 console.log(x);
	 document.getElementById('qtt').value = x;
var z = document.getElementById('qtt').value
	console.log(z);
  } else {
     parent.find('input[name=' + fieldName + ']').val(0);
  }
}

$('.input-group').on('click', '.button-plus', function(e) {
  incrementValue(e);
});

$('.input-group').on('click', '.button-minus', function(e) {
  decrementValue(e);
});
    $(document).ready(function(data){

        $('.quantity').on('keyup mouseup change mouseout hover input paste cut propertychange change blur mouseleave click', function(){

            var imagetest = $(this).data("product_imagetest");

            var quantity = $(this).val();
			
			

            if(quantity  != ''){

                $.ajax({

                    url:"change.php",

                    method:"POST",

                    data:{imagetest:imagetest, quantity:quantity},

                    success:function(data){

                        $("body").load('cart_body.php');

                    }




                });


            }




        });




    });
	


  

</script>
</body>
</html>
