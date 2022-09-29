<?php
session_start();
include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include_once('easebuzz-lib/easebuzz_payment_gateway.php');
include_once('easebuzz-lib/payment.php');
?>

<?php

if (isset($_GET['c_id'])) {

    $customer_id = $_GET['c_id'];

}

$get_orders = "select * from customer_orders where customer_id='$customer_id'";

$run_orders = mysqli_query($con, $get_orders);

$i = 6000;

while ($row_orders = mysqli_fetch_array($run_orders)) {

    $order_id = $row_orders['order_id'];

    $i++;
}
$ip_add = getRealUserIp();

$status = "Initiated";

$invoice_no = mt_rand();

$resultss = mysqli_query($con, "SELECT customer_email FROM customers WHERE customer_id ='$customer_id'");
while ($row = mysqli_fetch_array($resultss)) {
    $email_address = $row['customer_email'];
}
/*echo "<script>alert('<?php echo $email_address?>')</script>";*/
$select_cart = "select * from cart where cust_email='$email_address'";

$run_cart = mysqli_query($con, $select_cart);


$unique_id = $i - 3;

$total=0;
$total2 = 0;
								$shf = 100;
								$tax = 18;
$only_price =0;
while ($row_cart = mysqli_fetch_array($run_cart)) {

    $pro_id = $row_cart['p_id'];
    $pro_type = $row_cart['p_type'];
    $pro_title = $row_cart['p_title'];
    $pro_qty = $row_cart['qty'];
    $sub_total = $row_cart['p_price'];
    $uploaded_image = $row_cart['uploaded_image'];
    $bg_1 = $row_cart['bg_1'];
    $bg_2 = $row_cart['bg_2'];
    $bg_3 = $row_cart['bg_3'];
    $bg_4 = $row_cart['bg_4'];
    $bg_5 = $row_cart['bg_5'];
    $bg_6 = $row_cart['bg_6'];
    $color_code = $row_cart['color_code'];
    $csv = $row_cart['csv'];
    $lego = $row_cart['lego'];
    $lego_gap = $row_cart['lego_gap'];
    $output_images = $row_cart['output_images'];
    $unit_price = $row_cart['u_price'];
    $pro_size = $row_cart['size'];
//    $sub_total = $row_cart['p_price']*$pro_qty;
if($pro_type == 'Marketplace' && $pro_title == 'Gowthama'){
    if ($pro_size == 'Large') {
        $x = 999;
        $y = 12;
        $z = $x*$y;
        $only_price= $pro_qty * $z;
//        $u_price = $z;
//        echo "<script>alert('Large: '+ $x*$y)";
    }
    if ($pro_size == 'Medium') {
        $x = 999;
        $y = 6;
        $z = $x*$y;
        $only_price=$pro_qty * $z;
//        $u_price =  $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
    }
    if ($pro_size == 'Small') {
        $x = 999;
        $y = 4;
        $z = $x*$y;
        $only_price= $pro_qty * $z;
//        $u_price = $z;
//        echo "<script>alert('Small: '+ $x*$y)";
    }
}
else if($pro_type == 'Marketplace' && $pro_title == 'Koi'){
    if ($pro_size == 'Large') {
        $x = 999;
        $y = 20;
        $z = $x*$y;
        $only_price= $pro_qty * $z;
//        $u_price = $z;
//        echo "<script>alert('Large: '+ $x*$y)";
    }
    if ($pro_size == 'Medium') {
        $x = 999;
        $y = 12;
        $z = $x*$y;
        $only_price=$pro_qty * $z;
//        $u_price =  $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
    }
    if ($pro_size == 'Small') {
        $x = 999;
        $y = 6;
        $z = $x*$y;
        $only_price= $pro_qty * $z;
//        $u_price = $z;
//        echo "<script>alert('Small: '+ $x*$y)";
    }
}
else if($pro_type == 'Marketplace' && $pro_title == 'Ojos'){
    if ($pro_size == 'Large') {
        $x = 999;
        $y = 12;
        $z = $x*$y;
        $only_price= $pro_qty * $z;
//        $u_price = $z;
//        echo "<script>alert('Large: '+ $x*$y)";
    }
    if ($pro_size == 'Medium') {
        $x = 999;
        $y = 9;
        $z = $x*$y;
        $only_price=$pro_qty * $z;
//        $u_price =  $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
    }
}
else if($pro_type == 'Marketplace' && $pro_title == 'Leo'){
    if ($pro_size == 'Large') {
        $x = 999;
        $y = 12;
        $z = $x*$y;
        $only_price= $pro_qty * $z;
//        $u_price = $z;
//        echo "<script>alert('Large: '+ $x*$y)";
    }
    if ($pro_size == 'Medium') {
        $x = 999;
        $y = 6;
        $z = $x*$y;
        $only_price=$pro_qty * $z;
//        $u_price =  $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
    }
}
else if($pro_type == 'Marketplace' && $pro_title == 'King of the Jungle'){
    if ($pro_size == 'Large') {
        $x = 999;
        $y = 12;
        $z = $x*$y;
        $only_price= $pro_qty * $z;
//        $u_price = $z;
//        echo "<script>alert('Large: '+ $x*$y)";
    }
    if ($pro_size == 'Medium') {
        $x = 999;
        $y = 6;
        $z = $x*$y;
        $only_price=$pro_qty * $z;
//        $u_price =  $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
    }
    if ($pro_size == 'Small') {
        $x = 999;
        $y = 4;
        $z = $x*$y;
        $only_price= $pro_qty * $z;
//        $u_price = $z;
//        echo "<script>alert('Small: '+ $x*$y)";
    }
}
else if($pro_type == 'Marketplace' && $pro_title == 'Abstract wheel'){
    if ($pro_size == 'Large') {
        $x = 999;
        $y = 16;
        $z = $x*$y;
        $only_price= $pro_qty * $z;
//        $u_price = $z;
//        echo "<script>alert('Large: '+ $x*$y)";
    }
    if ($pro_size == 'Medium') {
        $x = 999;
        $y = 6;
        $z = $x*$y;
        $only_price=$pro_qty * $z;
//        $u_price =  $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
    }
    if ($pro_size == 'Small') {
        $x = 999;
        $y = 4;
        $z = $x*$y;
        $only_price= $pro_qty * $z;
//        $u_price = $z;
//        echo "<script>alert('Small: '+ $x*$y)";
    }
}
else if($pro_type == 'Marketplace' && $pro_title == 'Ironman'){
    if ($pro_size == 'Large') {
        $x = 999;
        $y = 12;
        $z = $x*$y;
        $only_price= $pro_qty * $z;
//        $u_price = $z;
//        echo "<script>alert('Large: '+ $x*$y)";
    }
    if ($pro_size == 'Medium') {
        $x = 999;
        $y = 6;
        $z = $x*$y;
        $only_price=$pro_qty * $z;
//        $u_price =  $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
    }
}
else if($pro_type == 'Marketplace' && $pro_title == 'The Joker'){
    if ($pro_size == 'Large') {
        $x = 999;
        $y = 12;
        $z = $x*$y;
        $only_price= $pro_qty * $z;
//        $u_price = $z;
//        echo "<script>alert('Large: '+ $x*$y)";
    }
    if ($pro_size == 'Medium') {
        $x = 999;
        $y = 6;
        $z = $x*$y;
        $only_price=$pro_qty * $z;
//        $u_price =  $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
    }
}
else if($pro_type == 'Marketplace' && $pro_title == 'Eye of the Storm'){
    if ($pro_size == 'Large') {
        $x = 999;
        $y = 12;
        $z = $x*$y;
        $only_price= $pro_qty * $z;
//        $u_price = $z;
//        echo "<script>alert('Large: '+ $x*$y)";
    }
    if ($pro_size == 'Medium') {
        $x = 999;
        $y = 6;
        $z = $x*$y;
        $only_price=$pro_qty * $z;
//        $u_price =  $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
    }
}
else if($pro_type == 'Marketplace' && $pro_title == 'Man’s best friend'){
    if ($pro_size == 'Large') {
        $x = 999;
        $y = 9;
        $z = $x*$y;
        $only_price= $pro_qty * $z;
//        $u_price = $z;
//        echo "<script>alert('Large: '+ $x*$y)";
    }
    if ($pro_size == 'Medium') {
        $x = 999;
        $y = 6;
        $z = $x*$y;
        $only_price=$pro_qty * $z;
//        $u_price =  $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
    }
    if ($pro_size == 'Small') {
        $x = 999;
        $y = 4;
        $z = $x*$y;
        $only_price= $pro_qty * $z;
//        $u_price = $z;
//        echo "<script>alert('Small: '+ $x*$y)";
    }
}
else if($pro_type == 'Marketplace' && $pro_title == 'Precious Pooch'){
    if ($pro_size == 'Large') {
        $x = 999;
        $y = 9;
        $z = $x*$y;
        $only_price= $pro_qty * $z;
//        $u_price = $z;
//        echo "<script>alert('Large: '+ $x*$y)";
    }
    if ($pro_size == 'Medium') {
        $x = 999;
        $y = 6;
        $z = $x*$y;
        $only_price=$pro_qty * $z;
//        $u_price =  $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
    }
    if ($pro_size == 'Small') {
        $x = 999;
        $y = 4;
        $z = $x*$y;
        $only_price= $pro_qty * $z;
//        $u_price = $z;
//        echo "<script>alert('Small: '+ $x*$y)";
    }
}
else if($pro_type == 'Marketplace' && $pro_title == 'Mandala'){
    if ($pro_size == 'Large') {
        $x = 999;
        $y = 64;
        $z = $x*$y;
        $only_price= $pro_qty * $z;
//        $u_price = $z;
//        echo "<script>alert('Large: '+ $x*$y)";
    }
    if ($pro_size == 'Medium') {
        $x = 999;
        $y = 16;
        $z = $x*$y;
        $only_price=$pro_qty * $z;
//        $u_price =  $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
    }
}
else if($pro_type == 'Marketplace' && $pro_title == 'Marilyn Monroe'){
    if ($pro_size == 'Large') {
        $x = 999;
        $y = 12;
        $z = $x*$y;
        $only_price= $pro_qty * $z;
//        $u_price = $z;
//        echo "<script>alert('Large: '+ $x*$y)";
    }
    if ($pro_size == 'Medium') {
        $x = 999;
        $y = 6;
        $z = $x*$y;
        $only_price=$pro_qty * $z;
//        $u_price =  $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
    }
}
else if($pro_type == 'Marketplace' && $pro_title == 'Rudra'){
    if ($pro_size == 'Large') {
        $x = 999;
        $y = 16;
        $z = $x*$y;
        $only_price= $pro_qty * $z;
//        $u_price = $z;
//        echo "<script>alert('Large: '+ $x*$y)";
    }
    if ($pro_size == 'Medium') {
        $x = 999;
        $y = 12;
        $z = $x*$y;
        $only_price=$pro_qty * $z;
//        $u_price =  $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
    }
    if ($pro_size == 'Small') {
        $x = 999;
        $y = 4;
        $z = $x*$y;
        $only_price= $pro_qty * $z;
//        $u_price = $z;
//        echo "<script>alert('Small: '+ $x*$y)";
    }
}
 else if($pro_type == 'Accessories'){
                                        if ($pro_size == 'WallMount') {
                                            $x = 99;
                                            $product_price= (int)$product_qty * $x;
                                            $u_price = $x;
//        echo "<script>alert('wall: '+ $x)";
                                        }
                                        if ($pro_size == 'LED Backlight') {
                                            $x = 499;
                                            $product_price=(int)$product_qty * $x;
                                            $u_price =  $x;
//        echo "<script>alert('led: '+ $x)";
                                        }
                                    }
    if($pro_type == 'Custom'){
        $only_price = $pro_qty*$only_price;
    }
    $sub_total = (int)($row_cart['p_price']*$pro_qty);

    $_SESSION['pro_qty'] = $pro_qty;

    $total2 += $sub_total;
	$total = ($total2+$shf+(($tax/100)*$total2));

//    if ($pro_id ==10001){
//        $get_lego_img2 = "select * from cart where cust_email='$email_address'";
//
//        $run_lego2 = mysqli_query($con, $get_lego_img2);
//
//        while ($row_lego2 = mysqli_fetch_array($run_lego2)) {
//            $pro_size = $row_lego2['size'];
//        }
//
//    }
//    else{
        $pro_size = $row_cart['size'];
        $product_img1= $row_cart['lego_gap'];
//    }



//    $sub_total = $row_cart['p_price'] * $pro_qty;


    $get_products = "select * from products where product_id='$pro_id'";

    $run_products = mysqli_query($con, $get_products);

    while ($row_products = mysqli_fetch_array($run_products)) {

        $product_title = $row_products['product_title'];
        if($pro_type == 'Marketplace')
										{
										if ((($pro_title == "Man’s best friend") || ($pro_title == "Gowthama") || ($pro_title == "Koi") || ($pro_title == "Abstract wheel") || ($pro_title == "King of the Jungle") || ($pro_title == "Precious Pooch")))
										{
        if ($pro_size == 'Small') {
            $product_img1 = $row_products['product_img1'];
        } else if ($pro_size == 'Medium') {
            $product_img1 = $row_products['product_img2'];
        } else if ($pro_size == 'Large') {
            $product_img1 = $row_products['product_img3'];
        }
										}
										
		else if((($pro_title == "Leo") || ($pro_title == "Marilyn Monroe") || ($pro_title == "Rudra") || ($pro_title == "Mandala") || ($pro_title == "The Joker") || ($pro_title == "Ironman") || ($pro_title == "Eye of the Storm") || ($pro_title == "Ojos")))
										{
      if ($pro_size == 'Medium') {
            $product_img1 = $row_products['product_img2'];
        } else if ($pro_size == 'Large') {
            $product_img1 = $row_products['product_img3'];
        }
										}
										else if ($product_title == 'OverallMP_Bundle'){
        
            $product_img1 = $row_products['product_img2'];
             
        }
										}
        else if ($pro_size == 'WallMount' || $pro_size == 'LED Backlight'){
            $base_url = "";
            $product_img = $row_products['product_img2'];
            $product_img1 = $base_url.$product_img;
        }
		else if ($product_title == 'Accessories_Bundle'){
            $base_url = "";
            $product_img = $row_products['product_img2'];
            $product_img1 = $base_url.$product_img;
        }
//        else {
//
//            $get_lego_img = "select * from cart where cust_email='$email_address' and p_type = 'Custom'";
//
//            $run_lego = mysqli_query($con, $get_lego_img);
//
//            while ($row_lego = mysqli_fetch_array($run_lego)) {
//                $product_img = $row_lego['lego_gap'];
////                $pro_size = $row_lego['size'];
//                $base_url = "Koha-IRS/static/outputs/";
//                $product_img1 = $base_url.$product_img;
//            }
//        }
//        $product_img1 = $row_products['product_img1'];

//        if($pro_type == 'Custom'){
////            echo "<script>alert('$pro_type')</script>";
////            echo "<script>alert('$email_address')</script>";
//            $get_lego_img = "select * from cart where cust_email='$email_address' and p_type = 'Custom'";
//
//            $run_lego = mysqli_query($con, $get_lego_img);
//
//            while ($row_lego = mysqli_fetch_array($run_lego)) {
////                $product_img1 = $row_lego['lego_gap'];
////                $base_url = "../Koha-IRS/static/outputs/";
////                $product_img1 = $base_url.$product_img;
////                $uploaded_image = $row_cart['uploaded_image'];
////                $bg_1 = $row_cart['bg_1'];
////                $bg_2 = $row_cart['bg_2'];
////                $bg_3 = $row_cart['bg_3'];
////                $bg_4 = $row_cart['bg_4'];
////                $bg_5 = $row_cart['bg_5'];
////                $bg_6 = $row_cart['bg_6'];
////                $color_code = $row_cart['color_code'];
////                $csv = $row_cart['csv'];
////                $lego = $row_cart['lego'];
////                $lego_gap = $row_cart['lego_gap'];
////                $output_images = $row_cart['output_images'];
////                $sub_total = $row_cart['p_price']*$pro_qty;
//
//            }
//        }

        if ($pro_id == 10001){
//    echo "<script>alert('Custom product detected')</script>";
            $get_lego_img = "select * from cart where cust_email='$email_address' and p_type = 'Custom'";

            $run_lego = mysqli_query($con, $get_lego_img);

            while ($row_lego = mysqli_fetch_array($run_lego)) {
//                $product_img1 = $row_lego['lego_gap'];
//                $base_url = "../Koha-IRS/static/outputs/";
//                $product_img1 = $base_url.$product_img;
                $sub_total = $row_cart['p_price']*$pro_qty;

            }
//            $cart_img = "select image from cart where cust_email='$email_address'";
//            $run_cart_img = mysqli_query($con,$cart_img);
////    $img_add = mysqli_num_rows($run_cart_img);
//            while ($row_img = mysqli_fetch_array($run_cart_img)) {
////                $img_url = $row_cart['image'];
////                $product_img1 = $img_url;
////        echo "<script>alert($img_url)</script>";
//            }

//    echo "<script>alert($img_url)</script>";
            $pro_size = $row_cart['size'];

        }



        $pro_size = $row_cart['size'];
//        echo"<script>alert('$pro_size')</script>";
//        echo"<script>alert('$product_img1')</script>";


        $insert_customer_order = "insert into customer_orders (order_id, customer_id,due_amount,invoice_no,p_id,qty,size,order_date,order_status,product_img) values ('$unique_id','$customer_id','$sub_total','$invoice_no','$pro_id','$pro_qty','$pro_size',NOW(),'$status','$product_img1')";

//        while($pro_id == 10001) {
            $insert_customer_custom_order = "insert into customer_custom_orders (order_id, customer_id,due_amount,invoice_no,p_id,qty,size,order_date,order_status,product_img,uploaded_image,bg_1,bg_2,bg_3,bg_4,bg_5,bg_6,color_code,csv,lego,lego_gap,output_images) values ('$unique_id','$customer_id','$sub_total','$invoice_no','$pro_id','$pro_qty','$pro_size',NOW(),'$status','$product_img1','$uploaded_image','$bg_1','$bg_2','$bg_3','$bg_4','$bg_5','$bg_6','$color_code','$csv','$lego','$lego_gap','$output_images')";

            $run_customer_custom_order = mysqli_query($con, $insert_customer_custom_order);
//        }

        $run_customer_order = mysqli_query($con, $insert_customer_order);

        $insert_pending_order = "insert into pending_orders (order_id, customer_id,invoice_no,product_id,qty,size,order_status) values ('$unique_id','$customer_id','$invoice_no','$pro_id','$pro_qty','$pro_size','$status')";

        $run_pending_order = mysqli_query($con, $insert_pending_order);

//        $delete_cart = "delete from cart where cust_email='$email_address'";
////    echo "<script>alert('$customer_id')</script>";
//
//        $run_delete = mysqli_query($con, $delete_cart);


    }
}

function validShipRocketToken($con)
{
    date_default_timezone_set('Asia/Kolkata');
    $row = mysqli_fetch_assoc(mysqli_query($con, "select * from shiprocket_token"));
    $added_on = strtotime($row['added_on']);
    $current_time = strtotime(date('Y-m-d h:i:s'));
    $diff_time = $current_time - $added_on;
    if ($diff_time > 86400) {
        $token = generateShipRocketToken($con);
//        echo $token;
    } else {
        $token = $row['token'];
//        echo $token;

    }
    return $token;
}

function generateShipRocketToken($con)
{

    date_default_timezone_set('Asia/Kolkata');
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://apiv2.shiprocket.in/v1/external/auth/login",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "{\n    \"email\": \"aryan.prince999@gmail.com\",\n    \"password\": \"Koha4life.\"\n}",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json"
        ),
    ));
    $SR_login_Response = curl_exec($curl);
    curl_close($curl);
    $SR_login_Response_out = json_decode($SR_login_Response);
    $token = $SR_login_Response_out->{'token'};
    $added_on = date('Y-m-d h:i:s');
    mysqli_query($con, "update shiprocket_token set token='$token', added_on = '$added_on' where id=2");
    return $token;
}

$total = 0;
function placeShipRocketOrder($con, $token, $unique_id)
{

    if (isset($_GET['c_id'])) {

        $customer_id = $_GET['c_id'];

    }
    date_default_timezone_set('Asia/Kolkata');
    $row = mysqli_fetch_assoc(mysqli_query($con, "select * from shiprocket_token"));
    $order_date_str = strtotime($row['added_on']);
    $order_date = date('Y-m-d h:i', $order_date_str);
//        echo $customer_id;
    $row_order = mysqli_fetch_assoc(mysqli_query($con, "select * from customers where customer_id='$customer_id'"));
    $name = $row_order['customer_name'];
    $lname = $row_order['customer_lname'];
    $email = $row_order['customer_email'];
    $mobile = $row_order['customer_contact'];
    $address = $row_order['customer_address'];
    $c_city = $row_order['customer_city'];
    $c_state = $row_order['customer_state'];
    $c_country = $row_order['customer_country'];
    $c_pincode = $row_order['customer_pincode'];
	
	session_start();
$em=$_SESSION['customer_email'];
	$test_order = mysqli_fetch_assoc(mysqli_query($con, "select * from shippinginfodata where customer_email='$em'"));
    $stname = $test_order['sfname'];
    $stlname = $test_order['slname'];
    $stemail = $test_order['customer_email'];
    $stmobile = $test_order['sphone'];
    $staddress = $test_order['saddress'];
    $stc_city = $test_order['scity'];
    $stc_state = $test_order['sstate'];
    $stc_country = $test_order['country'];
    $stc_pincode = $test_order['spincode'];
	$sta_address = $test_order['sapartment'];

    $html = '';
    $res = mysqli_query($con, "select customer_orders.*, products.product_title,products.product_price from customer_orders, products where products.product_id = customer_orders.p_id  and customer_orders.order_id='$unique_id'");
    while ($row = mysqli_fetch_assoc($res)) {
        $sku = rand(111111, 999999);
        $html .= '{
		  "name": "' . $row['product_title'] . '",
		  "sku": "' . $sku . '",
		  "units": ' . $row['qty'] . ',
		  "selling_price": "' . $row['due_amount'] . '",
		  "discount": "",
		  "tax": "",
		  "hsn": ""
		},';
    }
//    echo $html;
    $html = rtrim($html, ",");

    $total = 0;
	$total2 = 0;
	$shf = 100;
	$tax = 18;
    $reso = mysqli_query($con, "select customer_orders.*, products.product_title,products.product_price from customer_orders, products where products.product_id = customer_orders.p_id  and customer_orders.order_id='$unique_id'");
    while ($row_p = mysqli_fetch_assoc($reso)) {
        $total2 += $row_p['due_amount'] * $row_p['qty'];
    }
 $total = ($total2+$shf+(($tax/100)*$total2));

//$resol=mysqli_query($con, "select pending_orders.order_id,pending_orders.product_id,pending_orders.qty from pending_orders where pending_orders.order_id = '$unique_id'");
//    //$row_payments = mysqli_fetch_array($resol);
//$total=0;
//while($co = mysqli_fetch_array($resol)){
//    $total+=$co['due_amount'];
//}
//    echo $total;

    date_default_timezone_set('Asia/Kolkata');
    $row = mysqli_fetch_assoc(mysqli_query($con, "select * from shiprocket_token"));
    $order_date_str = strtotime($row['added_on']);
//    echo $order_date_str;
    $order_date = date('Y-m-d h:i', $order_date_str);
    $order_id = $unique_id;
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://apiv2.shiprocket.in/v1/external/orders/create/adhoc",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => '{"order_id": "' . $order_id . '",
  "order_date": "' . $order_date . '",
  "pickup_location": "home",
  "billing_customer_name": "' . $name . '",
  "billing_last_name": "'. $lname .'",
  "billing_address": "' . $address . '",
  "billing_address_2": " ",
  "billing_city": "'. $c_city .'",
  "billing_pincode": "'. $c_pincode .'",
  "billing_state": "'. $c_pincode .'",
  "billing_country": "'. $c_country .'",
  "billing_email": "' . $email . '",
  "billing_phone": "' . $mobile . '",
  "shipping_is_billing": false,
  "shipping_customer_name": "' . $stname . '",
  "shipping_last_name": "' . $stlname . '",
  "shipping_address": "' . $staddress . '",
  "shipping_address_2": "' . $sta_address . '",
  "shipping_city": "' . $stc_city . '",
  "shipping_pincode": "' . $stc_pincode . '",
  "shipping_country": "' . $stc_country . '",
  "shipping_state": "' . $stc_state . '",
  "shipping_email": "' . $stemail . '",
  "shipping_phone": "' . $stmobile . '",
  "order_items": [
    ' . $html . '
  ],
  "payment_method": "Easebuzz",
  "shipping_charges": 0,
  "giftwrap_charges": 0,
  "transaction_charges": 0,
  "total_discount": 0,
  "sub_total": ' . $total . ',
  "length": 10,
  "breadth": 15,
  "height": 20,
  "weight": 2.5
	}',
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "Authorization: Bearer $token"
        ),
    ));
    $SR_login_Response = curl_exec($curl);
	//echo "<script>alert('$stname')</script>";
    curl_close($curl);
    //$SR_login_Response_out = json_decode($SR_login_Response);
//    echo '<pre>';
//    print_r($SR_login_Response);
}

$token = validShipRocketToken($con);

//$MERCHANT_KEY = "82X9A6OCO9";
//$SALT = "HKCTKM9PYU";
$MERCHANT_KEY = "82X9A6OCO9";
$SALT = "HKCTKM9PYU";
$ENV = "prod";   // set enviroment name
//$ENV = "test";   // set enviroment name

$easebuzzObj = new Easebuzz($MERCHANT_KEY, $SALT, $ENV);

//$reso = mysqli_query($con, "select pending_orders.*, products.product_title,products.product_price from pending_orders, products where products.product_id = pending_orders.product_id  and pending_orders.order_id='$unique_id'");
//while ($row_p = mysqli_fetch_assoc($reso)) {
//    $total += $row_p['product_price'] * $row_p['qty'];
//}
$total = 0;
$total2 = 0;
$shf = 100;
$tax = 18;
$reso2 = mysqli_query($con, "select * from customer_orders where customer_id = $customer_id and order_id = $order_id");
while ($row_p2 = mysqli_fetch_assoc($reso2)) {
    $total2 += $row_p2['due_amount'] ;
}
$total = ($total2+$shf+(($tax/100)*$total2));
$ftotal = floatval($total);

if (!is_float($ftotal))
//    echo "<script>alert('Not Float')</script>";
//echo "<script>alert('$total2')</script>";
//echo "<script>alert('$email_address')</script>";
//$row_order = mysqli_query($con, "select * from customers where customer_id='$customer_id'");
//while ($row_order2 = mysqli_fetch_assoc($row_order)) {
//    $name = $row_order2['customer_name'];
//}

$select_cart = "select * from cart where cust_email='$email_address'";

$run_cart = mysqli_query($con,$select_cart);

$count = mysqli_num_rows($run_cart);

$total3 = 0;
$total = 0;
$shf = 100;
$tax = 18;
while($row_cart = mysqli_fetch_array($run_cart)) {
    $pro_qty = $row_cart['qty'];

    $unit_price = $row_cart['u_price'];

    $only_price = $row_cart['p_price'];

    $get_products = "select * from products where product_id='$pro_id'";

    $run_products = mysqli_query($con, $get_products);

    while ($row_products = mysqli_fetch_array($run_products)) {

        $product_title = $row_products['product_title'];

        $base_url = "admin_area/product_images/";
		if($pro_type == 'Marketplace')
										{
										if ((($pro_title == "Man’s best friend") || ($pro_title == "Gowthama") || ($pro_title == "Koi") || ($pro_title == "Abstract wheel") || ($pro_title == "King of the Jungle") || ($pro_title == "Precious Pooch")))
										{
        if ($pro_size == 'Small') {
            $product_img = $row_products['product_img1'];
            $product_img1 = $base_url . $product_img;
        } else if ($pro_size == 'Medium') {
            $product_img = $row_products['product_img2'];
            $product_img1 = $base_url . $product_img;
        } else if ($pro_size == 'Large') {
            $product_img = $row_products['product_img3'];
            $product_img1 = $base_url . $product_img;
        }
										}
            else if((($pro_title == "Leo") || ($pro_title == "Marilyn Monroe") || ($pro_title == "Rudra") || ($pro_title == "Mandala") || ($pro_title == "The Joker") || ($pro_title == "Ironman") || ($pro_title == "Eye of the Storm") || ($pro_title == "Ojos")))
										{
        if ($pro_size == 'Medium') {
            $product_img = $row_products['product_img2'];
            $product_img1 = $base_url . $product_img;
        } 
		else if ($pro_size == 'Large') {
            $product_img = $row_products['product_img3'];
            $product_img1 = $base_url . $product_img;
        }
										}
										}										
		
		else if ($pro_size = 'WallMount' || $pro_size = 'LED Backlight') {
            $product_img = $row_products['product_img3'];
            $product_img1 = $base_url . $product_img;
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
//        $u_price = $z;
//        echo "<script>alert('Large: '+ $x*$y)";
    }
    if ($pro_size == 'Medium') {
        $x = 999;
        $y = 6;
        $z = $x*$y;
        $only_price=$pro_qty * $z;
//        $u_price =  $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
    }
    if ($pro_size == 'Small') {
        $x = 999;
        $y = 4;
        $z = $x*$y;
        $only_price= $pro_qty * $z;
//        $u_price = $z;
//        echo "<script>alert('Small: '+ $x*$y)";
    }
}
else if($pro_type == 'Marketplace' && $pro_title == 'Koi'){
    if ($pro_size == 'Large') {
        $x = 999;
        $y = 20;
        $z = $x*$y;
        $only_price= $pro_qty * $z;
//        $u_price = $z;
//        echo "<script>alert('Large: '+ $x*$y)";
    }
    if ($pro_size == 'Medium') {
        $x = 999;
        $y = 12;
        $z = $x*$y;
        $only_price=$pro_qty * $z;
//        $u_price =  $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
    }
    if ($pro_size == 'Small') {
        $x = 999;
        $y = 6;
        $z = $x*$y;
        $only_price= $pro_qty * $z;
//        $u_price = $z;
//        echo "<script>alert('Small: '+ $x*$y)";
    }
}
else if($pro_type == 'Marketplace' && $pro_title == 'Ojos'){
    if ($pro_size == 'Large') {
        $x = 999;
        $y = 12;
        $z = $x*$y;
        $only_price= $pro_qty * $z;
//        $u_price = $z;
//        echo "<script>alert('Large: '+ $x*$y)";
    }
    if ($pro_size == 'Medium') {
        $x = 999;
        $y = 9;
        $z = $x*$y;
        $only_price=$pro_qty * $z;
//        $u_price =  $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
    }
}
else if($pro_type == 'Marketplace' && $pro_title == 'Leo'){
    if ($pro_size == 'Large') {
        $x = 999;
        $y = 12;
        $z = $x*$y;
        $only_price= $pro_qty * $z;
//        $u_price = $z;
//        echo "<script>alert('Large: '+ $x*$y)";
    }
    if ($pro_size == 'Medium') {
        $x = 999;
        $y = 6;
        $z = $x*$y;
        $only_price=$pro_qty * $z;
//        $u_price =  $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
    }
}
else if($pro_type == 'Marketplace' && $pro_title == 'King of the Jungle'){
    if ($pro_size == 'Large') {
        $x = 999;
        $y = 12;
        $z = $x*$y;
        $only_price= $pro_qty * $z;
//        $u_price = $z;
//        echo "<script>alert('Large: '+ $x*$y)";
    }
    if ($pro_size == 'Medium') {
        $x = 999;
        $y = 6;
        $z = $x*$y;
        $only_price=$pro_qty * $z;
//        $u_price =  $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
    }
    if ($pro_size == 'Small') {
        $x = 999;
        $y = 4;
        $z = $x*$y;
        $only_price= $pro_qty * $z;
//        $u_price = $z;
//        echo "<script>alert('Small: '+ $x*$y)";
    }
}
else if($pro_type == 'Marketplace' && $pro_title == 'Abstract wheel'){
    if ($pro_size == 'Large') {
        $x = 999;
        $y = 16;
        $z = $x*$y;
        $only_price= $pro_qty * $z;
//        $u_price = $z;
//        echo "<script>alert('Large: '+ $x*$y)";
    }
    if ($pro_size == 'Medium') {
        $x = 999;
        $y = 6;
        $z = $x*$y;
        $only_price=$pro_qty * $z;
//        $u_price =  $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
    }
    if ($pro_size == 'Small') {
        $x = 999;
        $y = 4;
        $z = $x*$y;
        $only_price= $pro_qty * $z;
//        $u_price = $z;
//        echo "<script>alert('Small: '+ $x*$y)";
    }
}
else if($pro_type == 'Marketplace' && $pro_title == 'Ironman'){
    if ($pro_size == 'Large') {
        $x = 999;
        $y = 12;
        $z = $x*$y;
        $only_price= $pro_qty * $z;
//        $u_price = $z;
//        echo "<script>alert('Large: '+ $x*$y)";
    }
    if ($pro_size == 'Medium') {
        $x = 999;
        $y = 6;
        $z = $x*$y;
        $only_price=$pro_qty * $z;
//        $u_price =  $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
    }
}
else if($pro_type == 'Marketplace' && $pro_title == 'The Joker'){
    if ($pro_size == 'Large') {
        $x = 999;
        $y = 12;
        $z = $x*$y;
        $only_price= $pro_qty * $z;
//        $u_price = $z;
//        echo "<script>alert('Large: '+ $x*$y)";
    }
    if ($pro_size == 'Medium') {
        $x = 999;
        $y = 6;
        $z = $x*$y;
        $only_price=$pro_qty * $z;
//        $u_price =  $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
    }
}
else if($pro_type == 'Marketplace' && $pro_title == 'Eye of the Storm'){
    if ($pro_size == 'Large') {
        $x = 999;
        $y = 12;
        $z = $x*$y;
        $only_price= $pro_qty * $z;
//        $u_price = $z;
//        echo "<script>alert('Large: '+ $x*$y)";
    }
    if ($pro_size == 'Medium') {
        $x = 999;
        $y = 6;
        $z = $x*$y;
        $only_price=$pro_qty * $z;
//        $u_price =  $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
    }
}
else if($pro_type == 'Marketplace' && $pro_title == 'Man’s best friend'){
    if ($pro_size == 'Large') {
        $x = 999;
        $y = 9;
        $z = $x*$y;
        $only_price= $pro_qty * $z;
//        $u_price = $z;
//        echo "<script>alert('Large: '+ $x*$y)";
    }
    if ($pro_size == 'Medium') {
        $x = 999;
        $y = 6;
        $z = $x*$y;
        $only_price=$pro_qty * $z;
//        $u_price =  $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
    }
    if ($pro_size == 'Small') {
        $x = 999;
        $y = 4;
        $z = $x*$y;
        $only_price= $pro_qty * $z;
//        $u_price = $z;
//        echo "<script>alert('Small: '+ $x*$y)";
    }
}
else if($pro_type == 'Marketplace' && $pro_title == 'Precious Pooch'){
    if ($pro_size == 'Large') {
        $x = 999;
        $y = 9;
        $z = $x*$y;
        $only_price= $pro_qty * $z;
//        $u_price = $z;
//        echo "<script>alert('Large: '+ $x*$y)";
    }
    if ($pro_size == 'Medium') {
        $x = 999;
        $y = 6;
        $z = $x*$y;
        $only_price=$pro_qty * $z;
//        $u_price =  $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
    }
    if ($pro_size == 'Small') {
        $x = 999;
        $y = 4;
        $z = $x*$y;
        $only_price= $pro_qty * $z;
//        $u_price = $z;
//        echo "<script>alert('Small: '+ $x*$y)";
    }
}
else if($pro_type == 'Marketplace' && $pro_title == 'Mandala'){
    if ($pro_size == 'Large') {
        $x = 999;
        $y = 64;
        $z = $x*$y;
        $only_price= $pro_qty * $z;
//        $u_price = $z;
//        echo "<script>alert('Large: '+ $x*$y)";
    }
    if ($pro_size == 'Medium') {
        $x = 999;
        $y = 16;
        $z = $x*$y;
        $only_price=$pro_qty * $z;
//        $u_price =  $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
    }
}
else if($pro_type == 'Marketplace' && $pro_title == 'Marilyn Monroe'){
    if ($pro_size == 'Large') {
        $x = 999;
        $y = 12;
        $z = $x*$y;
        $only_price= $pro_qty * $z;
//        $u_price = $z;
//        echo "<script>alert('Large: '+ $x*$y)";
    }
    if ($pro_size == 'Medium') {
        $x = 999;
        $y = 6;
        $z = $x*$y;
        $only_price=$pro_qty * $z;
//        $u_price =  $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
    }
}
else if($pro_type == 'Marketplace' && $pro_title == 'Rudra'){
    if ($pro_size == 'Large') {
        $x = 999;
        $y = 16;
        $z = $x*$y;
        $only_price= $pro_qty * $z;
//        $u_price = $z;
//        echo "<script>alert('Large: '+ $x*$y)";
    }
    if ($pro_size == 'Medium') {
        $x = 999;
        $y = 12;
        $z = $x*$y;
        $only_price=$pro_qty * $z;
//        $u_price =  $z;
//        echo "<script>alert('Medium: '+ $x*$y)";
    }
    if ($pro_size == 'Small') {
        $x = 999;
        $y = 4;
        $z = $x*$y;
        $only_price= $pro_qty * $z;
//        $u_price = $z;
//        echo "<script>alert('Small: '+ $x*$y)";
    }
}
        if ($pro_type == 'Custom') {
            $only_price = $pro_qty * $only_price;
        }

        $sub_total = (int)($row_cart['p_price'] * $pro_qty);

        $total3 += $sub_total;
		$total = ($total3+$shf+(($tax/100)*$total3));
    }
}


//$total3 = 10;
//$getinfo_order = "select * from shippinginfodata";
//$runtest_info = mysqli_query($con,$getinfo_order);
//$testing_order = mysqli_num_rows($runtest_info);
session_start();
$em=$_SESSION['customer_email'];
$testing_order = mysqli_fetch_assoc(mysqli_query($con, "select * from shippinginfodata where customer_email='$em'"));
$testname = $testing_order['sfname'];
$testlname = $testing_order['slname'];
$testemail = $testing_order['customer_email'];
$testmobile = $testing_order['sphone'];
$testaddress = $testing_order['saddress'];
$testc_city = $testing_order['scity'];
$testc_state = $testing_order['sstate'];
$testc_country = $testing_order['country'];
$testc_pincode = $testing_order['spincode'];
$testa_address = $testing_order['sapartment'];


$postData = array (
    "txnid" => $invoice_no ,
//    "amount" =>  $total3-0.01,
    "amount" =>  $total ,
    "firstname" => "$testname",
    "email" => "$testemail",
    "phone" => "$testmobile",
    "productinfo" => "Koha",
    "surl" => "https://www.thekoha.com/transactioncompletion.php",
    "furl" => "https://www.thekoha.com/transactioncancellation.php",
    "udf1" => "aaaa",
    "udf2" => "aaaa",
    "udf3" => "aaaa",
    "udf4" => "aaaa",
    "udf5" => "aaaa",
    "address1" => "$testaddress",
    "address2" => "$testa_address",
    "city" => "$testc_city",
    "state" => "$testc_state",
    "country" => "$testc_country",
    "zipcode" => "$testc_pincode"
);
/*echo "<script>alert('$testname')</script>";
echo "<script>alert('$testlname')</script>";
echo "<script>alert('$testemail')</script>";
echo "<script>alert('$testmobile')</script>";
echo "<script>alert('$testaddress')</script>";
echo "<script>alert('$testc_city')</script>";
echo "<script>alert('$testc_state')</script>";
echo "<script>alert('$testc_country')</script>";
echo "<script>alert('$testc_pincode')</script>"; */ 
//echo "<script>alert('$total4')</script>";
//$result = $easebuzzObj->initiatePaymentAPI($postData);
//echo "<script>alert('$customer_id')</script>";
//echo "<script>alert('$order_id')</script>";
//echo "<script>alert('$total')</script>";
//echo "<script>alert('$result')</script>";
placeShipRocketOrder($con, $token, $unique_id);
//$delete_cart = "delete from cart where cust_email='$email_address'";
//    echo "<script>alert('$customer_id')</script>";

//$run_delete = mysqli_query($con, $delete_cart);
$result = $easebuzzObj->initiatePaymentAPI($postData);
//$i++;
//echo "<script>alert('$result')</script>";
//echo "<script>alert('$total')</script>";
//echo "<script>alert('$customer_id')</script>";
//echo "<script>alert('$order_id')</script>";
//echo "<script>alert('Your order has been submitted,Thanks ')</script>";

//echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";


?>
