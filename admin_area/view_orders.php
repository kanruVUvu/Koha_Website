<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts  --->

<li class="active">

<i class="fa fa-dashboard"></i> Dashboard / View Orders

</li>

</ol><!-- breadcrumb Ends  --->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

<i class="fa fa-money fa-fw"></i> View Orders

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<div class="table-responsive"><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped"><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>

<th>Order No:</th>
<th>Customer Email:</th>
<th>Invoice No:</th>
<th>Product Title:</th>
<th>Image:</th>
<th>Product Qty:</th>
<th>Product Size:</th>
<th>Order Date:</th>
<th>Order Status:</th>
<th>Total Amount:</th>
<!--<th>Order Status:</th>-->
<th>Delete Order:</th>


</tr>

</thead><!-- thead Ends -->


<tbody><!-- tbody Starts -->

<?php

$i = 0;

$get_orders = "select * from customer_orders where p_id != 10001 ";

$run_orders = mysqli_query($con,$get_orders);

while ($row_orders = mysqli_fetch_array($run_orders)) {

$order_id = $row_orders['order_id'];

$c_id = $row_orders['customer_id'];

$invoice_no = $row_orders['invoice_no'];

$product_id = $row_orders['p_id'];

$qty = $row_orders['qty'];

$size = $row_orders['size'];
 $productimage = $row_orders['product_img'];
$order_status = $row_orders['order_status'];
/*if ($order_status == 'pending') {

                $order_status = "Unpaid";

            } else {

                $order_status = "Paid";

            }*/

$get_products = "select * from products where product_id='$product_id'";

$run_products = mysqli_query($con,$get_products);

$row_products = mysqli_fetch_array($run_products);

$product_title = $row_products['product_title'];

$i++;

?>

<tr>

<td><?php echo $i; ?></td>

<td>
<?php 

$get_customer = "select * from customers where customer_id='$c_id'";

$run_customer = mysqli_query($con,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_email = $row_customer['customer_email'];

echo $customer_email;

 ?>
 </td>

<td bgcolor="yellow" ><?php echo $invoice_no; ?></td>

<td><?php echo $product_title; ?></td>


<td><img style="height: 50px; width: 50px" src="<?php
    $get_products = "select * from products where product_id='$product_id'";

    $run_products = mysqli_query($con,$get_products);

    while($row_products = mysqli_fetch_array($run_products)) {

//        $product_title = $row_products['product_title'];

//        $product_img1 = $row_products['product_img1'];

        $product_title = $row_products['product_title'];

        if ($size == 'Small') {
            $base_url = "../admin_area/product_images/";
            $product_img = $row_products['product_img1'];
            $product_img1 = $base_url.$product_img;
        } else if ($size == 'Medium') {
            $base_url = "../admin_area/product_images/";
            $product_img = $row_products['product_img2'];
            $product_img1 = $base_url.$product_img;
        } else if ($size == 'Large') {
            $base_url = "../admin_area/product_images/";
            $product_img = $row_products['product_img3'];
            $product_img1 = $base_url.$product_img;
        }
        else if ($size =='WallMount' || $size == 'LED Backlight'){
            $base_url = "../admin_area/product_images/";
            $product_img1 = $row_products['product_img2'];
            echo $base_url;
        }
		else if ($product_title == 'OverallMP_Bundle'){
            $base_url = "../admin_area/product_images/";
            $product_img1 = $row_products['product_img2'];
            echo $base_url;
        }
		else if ($product_title == 'Accessories_Bundle'){
            $base_url = "../admin_area/product_images/";
            $product_img1 = $row_products['product_img2'];
            echo $base_url;
        }
        else{

//            $product_img = $row_products['product_img1'];
//            $product_img1 = $base_url.$product_img;

            $get_customer_order = "select * from customer_orders where order_id='$order_id' and invoice_no='$invoice_no' and p_id = '$product_id' and customer_id = '$c_id' and product_img='$productimage' and size='$size'";

            $run_customer_order = mysqli_query($con,$get_customer_order);

            $row_customer_order = mysqli_fetch_array($run_customer_order);

            $base_url2 = "../";
            $product_img = $row_customer_order['product_img'];
            $product_img1 = $base_url2.$product_img;
        }

        echo $product_img1;
    }
//    echo $product_img1?>" ></td>

<td><?php echo $qty; ?></td>

<td><?php echo $size; ?></td>

<td>
<?php
$date = date_default_timezone_set('Asia/Kolkata');
$get_customer_order = "select * from customer_orders where order_id='$order_id' and invoice_no='$invoice_no' and p_id = '$product_id' and customer_id = '$c_id' and product_img='$productimage' and size='$size'";

$run_customer_order = mysqli_query($con,$get_customer_order);

$row_customer_order = mysqli_fetch_array($run_customer_order);

$order_date = date('F j, Y, g:i a T' , strtotime($row_customer_order['order_date']. ' + 330 minutes'));

//$due_amount = $row_customer_order['due_amount'];

echo $order_date;

?>
</td>
<td><?php echo $order_status; ?></td>

<td>&#X20B9;
    <?php
    $get_customer_order2 = "select * from customer_orders where order_id='$order_id' and invoice_no='$invoice_no' and p_id = '$product_id' and customer_id = '$c_id' and product_img='$productimage' and size='$size'";

    $run_customer_order2 = mysqli_query($con,$get_customer_order2);

//    $row_customer_order = mysqli_fetch_array($run_customer_order);

    while($row_customer_order2 = mysqli_fetch_array($run_customer_order2)) {

        $due_amount = $row_customer_order2['due_amount'];
//        echo $due_amount;

    }
    echo $due_amount;

    ?>
<!--    --><?php //echo $due_amount; ?>


</td>

<!--<td>
<?php

//if($order_status=='pending'){

//echo $order_status='pending';

//}
//else{

//echo $order_status='Complete';

//}


?>
</td>-->

<td>

<a href="index.php?order_delete=<?php echo $order_id; ?>" >

<i class="fa fa-trash-o" ></i> Delete

</a>

</td>


</tr>

<?php } ?>

</tbody><!-- tbody Ends -->

</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->


<?php } ?>