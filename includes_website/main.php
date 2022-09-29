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
width:85px;
}
}
@media only screen and (min-width: 993px)  {
#testrx
{

}
}
 @media only screen and (min-width: 50px) and (max-width: 599px) {
	
		#amex
		{
		width:100%;
		}
	 #testbx
	 {
	width:76px !important;
	 }
	 #testcx
	 {
	width:105px !important;
	 }
	 #testdx
	 {
		width:46px !important;
	 }
	 #testex
	 {
		width:82px !important;
	 }
	 #testfx
	 {
	width:24px !important;
	 }
	 #testgx
	 {
	width:87px !important;
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
	 #testbx
	 {
	width:76px !important;
	 }
	 #testcx
	 {
	width:105px !important;
	 }
	 #testdx
	 {
		width:46px !important;
	 }
	 #testex
	 {
		width:82px !important;
	 }
	 #testfx
	 {
	width:24px !important;
	 }
	 #testgx
	 {
	width:87px !important;
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
	 #testbx
	 {
	width:76px !important;
	 }
	 #testcx
	 {
	width:105px !important;
	 }
	 #testdx
	 {
		width:46px !important;
	 }
	 #testex
	 {
		width:82px !important;
	 }
	 #testfx
	 {
	width:24px !important;
	 }
	 #testgx
	 {
	width:87px !important;
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
	 #testbx
	 {
	width:100px !important;
	 }
	 #testcx
	 {
	width:130px !important;
	 }
	 #testdx
	 {
		width:70px !important;
	 }
	 #testex
	 {
		width:110px !important;
	 }
	 #testfx
	 {
	width:50px !important;
	 }
	 #testgx
	 {
	width:103px !important;
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
  
</style>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-black navbar-static-top" style="position:fixed;width:100%;margin-top: 0; background-color: black !important; color: white; padding: 20px 1%">
    <div class="container-fluid navbar-mini d-flex justify-content-between" style=" display: flex">
        <a href="index.php" style="margin-right: auto;cursor: inherit !important;">
            <img id="headerlogotest" src="img/koha-logo-2.png" style="cursor: inherit !important;" alt=""><!-- Logo -->
        </a>
        <div>
		<?php if(!isset($_SESSION['customer_email']))
		{
			$count2=0;
								?>
            <a class="desktop-nav nav-item" style="" href="cart.php"><img src="assets/shoppingcarticon.png" style="width:30px !important;height:30px !important;"><span class="badge badge-secondary" style="position:relative; top: -15px;left: -15px; color: black; background-color: white;border-radius: 50%;padding: 0.35em 0.60em !important; "><?php echo "$count2";?></span></a>
		<?php } else if(isset($_SESSION['customer_email'])){ ?>
 <a class="desktop-nav nav-item" style="" href="cart.php"><img src="assets/shoppingcarticon.png" style="width:30px !important;height:30px !important;"><span class="badge badge-secondary" style="position:relative; top: -15px;left: -15px; color: black; background-color: white;border-radius: 50%;padding: 0.35em 0.60em !important; "><?php echo "$count";?></span></a>			
			<?php } ?>
			<a class="desktop-nav nav-item" style="padding-right: 5px" href="customer/my_account.php"><img src="assets/myaccounticon.png" style="width:30px !important;height:30px !important;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" style="background-color: grey; aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
    <div class="d-flex justify-content-end" id="amex">
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background-color: black !important;">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="background-color: black !important;display: flex;
    align-items: center;">
                <li class="nav-item" style="border-radius: 20px" id="testbx">
                    <a class="nav-link" style="background-color: black !important;font-family: Roboto Serif !important; border-radius: 20px" aria-current="page" href="aboutus.php">Our Story</a>
                </li>
                <li class="nav-item" style="border-radius: 20px" id="testcx">
                    <a class="nav-link" style="background-color: black !important;font-family: Roboto Serif !important; border-radius: 20px" href="howitworks.php">How it Works</a>
                </li>
                <li class="nav-item" style="border-radius: 20px" id="testdx">
                    <a class="nav-link" style="background-color: black !important;font-family: Roboto Serif !important; border-radius: 20px" href="shop.php">Gallery</a>
                </li>
                <li class="nav-item" style="border-radius: 20px; padding-right: 10px" id="testex">
                    <a class="nav-link" style="background-color: black !important;font-family: Roboto Serif !important; border-radius: 20px" href="accessories.php">Accessories</a>
                </li>
                <li class="nav-item" style="border-radius: 20px; padding-right: 10px" id="testfx">
                    <a class="nav-link" style="background-color: black !important;font-family: Roboto Serif !important; border-radius: 20px;" href="faq.php">FAQ</a>
                </li>
                <li class="nav-item" style="border-radius: 20px;padding-right: 10px" id="testrx">
                    <a class="nav-link" style="background-color: black !important;font-family: Roboto Serif !important; border-radius: 20px;" id="testgx" href="contactus.php">Contact Us</a>
                </li>
                <li class="mobile-nav nav-item" style="border-radius: 20px; width:60px;margin: auto ">
				<?php if(!isset($_SESSION['customer_email']))
		{
			$count2=0;
								?>
                    <a style="margin: auto; color: white" href="cart.php"><img src="assets/shoppingcarticon.png" style="width:27px !important;height:35px !important;"><span class="badge badge-secondary" style="position:relative; top: -15px;left: -15px; color: black; background-color: white;border-radius: 50%;padding: 0.35em 0.60em !important; "><?php echo "$count2";?></span></a>
          <?php } else if(isset($_SESSION['customer_email'])){ ?>      
				<a style="margin: auto; color: white" href="cart.php"><img src="assets/shoppingcarticon.png" style="width:27px !important;height:35px !important;"><span class="badge badge-secondary" style="position:relative; top: -15px;left: -15px; color: black; background-color: white;border-radius: 50%;padding: 0.35em 0.60em !important; "><?php echo "$count";?></span></a>
               <?php } ?>
				</li>
                <li class="mobile-nav nav-item" style="border-radius: 20px; width:50px;margin: auto">
                    <a style="margin:auto; color: white" href="customer/my_account.php"><img src="assets/myaccounticon.png" style="width:27px !important;height:35px !important;"></a>
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