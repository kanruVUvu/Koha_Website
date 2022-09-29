<?php

session_start();

include("includes/db.php");

include("functions/functions.php");

?>
<?php

if(!isset($_SESSION['customer_email'])){
    echo "<script>window.open('checkout.php','_self')</script>";
}

$em = $_SESSION['customer_email'];

/*echo "<script>alert('<?php echo $em; ?>')</script>"*/

?>
<?php


//$ip_add = getRealUserIp();

if(isset($_POST['imagetest'])){

$imagetest = $_POST['imagetest'];

$qty = $_POST['quantity'];

$q="select p_id from cart where cust_email='$em' and uploaded_image='$imagetest'";
	$result = mysqli_query($con,$q);
	while($row = mysqli_fetch_array($result))
	{
	$promotestyui = $row['p_id'];
$change_qty = "update cart set qty='$qty' where p_id='$promotestyui' AND uploaded_image='$imagetest' AND cust_email='$em'";
	}

$run_qty = mysqli_query($con,$change_qty);


}





?>