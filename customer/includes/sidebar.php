<div class="card  sidebar-menu" id="testsidebar2" data-aos="slide-right"
    data-aos-offset="200"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="false"
    data-aos-anchor-placement="top-bottom"><!-- panel panel-default sidebar-menu Starts -->

<div class="card-header" style=" background-color: #191c1f; color: white"><!-- panel-heading Starts -->

<?php

$customer_session = $_SESSION['customer_email'];

$get_customer = "select * from customers where customer_email='$customer_session'";

$run_customer = mysqli_query($con,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

//$customer_image = $row_customer['customer_image'];

$customer_name = $row_customer['customer_name'];

if(!isset($_SESSION['customer_email'])){


}
else {


//    to add image back : add this ::: <center>
//
//<img src='customer_images/$customer_image' class='img-responsive'>
//
//</center>
//

echo "


<br>

<h3 align='center' class='card-title'  style='color: white; font-family: Roboto Serif !important'><a style='margin:auto; color: white' href='../customer/my_account.php'><img src='../assets/myaccounticon.png' style='width:30px !important;height:30px !important;'></a>$customer_name</h3>

";

}

?>

</div><!-- panel-heading Ends -->

<div class="card-body" style=" background-color: #191c1f; color: white; "><!-- panel-body Starts -->
    <div class="table-responsive">
        <table class="table">
            <tbody>

<ul class="nav nav-pills nav-stacked"><!-- nav nav-pills nav-stacked Starts -->
<tr style="padding-top: 20px">
<li style="padding-top: 20px"  class="<?php if(isset($_GET['my_orders'])){ echo "active"; } ?>">

<a style="Roboto Serif !important; color:white;  text-decoration: none;"  href="my_account.php?my_orders"> <i class="fa fa-list"> </i> My Orders </a>

</li>
</tr>
    <!--<tr style="padding-top: 20px">
<li style="padding-top: 20px" class="<?php if(isset($_GET['pay_offline'])){ echo "active"; } ?>">

<a style="Roboto Serif !important; color:white;  text-decoration: none;"  href="my_account.php?pay_offline"> <i class="fa fa-bolt"></i> Pay Offline </a>

</li>
    </tr>-->
    <tr style="padding-top: 20px">
<li style="padding-top: 20px" class="<?php if(isset($_GET['edit_account'])){ echo "active"; } ?>">

<a style="Roboto Serif !important;   color:white;  text-decoration: none;"  href="my_account.php?edit_account"> <i class="fas fa-pen"></i> Edit Account </a>

</li>
    </tr>
    <tr style="padding-top: 20px">
<li style="padding-top: 20px" class="<?php if(isset($_GET['change_pass'])){ echo "active"; } ?>">

    <a style="Roboto Serif !important; color: white; text-decoration: none;"  href="my_account.php?change_pass"> <i class="fa fa-user"></i> Change Password </a>

</li>
    </tr>
    <tr style="padding-top: 20px">
<li style="padding-top: 20px" class="<?php if(isset($_GET['my_wishlist'])){ echo "active"; } ?>">

<a style="Roboto Serif !important; color:white;  color:white;  color:white;  text-decoration: none;"  href="my_account.php?my_wishlist"> <i class="fa fa-heart"></i> My WishList </a>

</li>
    </tr>
    <tr style="padding-top: 20px">

<li style="padding-top: 20px" class="<?php if(isset($_GET['delete_account'])){ echo "active"; } ?>">
    <a style="Roboto Serif !important; color: white; text-decoration: none;"  href="my_account.php?delete_account"> <i class="fas fa-trash fa-fw"></i> Delete Account </a>

</li>
    </tr>
    <tr style="padding-top: 20px">

<li style="padding-top: 20px" >

<a style="Roboto Serif !important; color:white;  text-decoration: none;"  href="logout.php"> <i class="fas fa-sign-out-alt"></i>  Logout </a>

</li>
    </tr>

</ul><!-- nav nav-pills nav-stacked Ends -->
            </tbody>
        </table>
</div><!-- panel-body Ends -->

</div><!-- panel panel-default sidebar-menu Ends -->
</div>