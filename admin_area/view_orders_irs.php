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

                    <i class="fa fa-dashboard"></i> Dashboard / View Orders IRS

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

        <!--                                <th>Id:</th>-->
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
        <th>Uploaded Image:</th>
        <th>Background Image 1:</th>
        <th>Background Image 2:</th>
        <th>Background Image 3:</th>
        <!--        <th>Background Image 4:</th>-->
        <!--        <th>Background Image 5:</th>-->
        <!--        <th>Background Image 6:</th>-->
        <th>Color Code:</th>
        <th>CSV:</th>
        <th>Lego:</th>
        <th>Lego Gap:</th>
        <th>Output Images:</th>


    </tr>

    </thead><!-- thead Ends -->


    <tbody><!-- tbody Starts -->

 


        <?php

        $i = 0;

        $get_orders = "select * from customer_orders where p_id = 10001 ";

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
                    $get_customer_order3 = "select * from customer_custom_orders where order_id='$order_id' and p_id = '$product_id' and customer_id = '$c_id' and product_img='$productimage' and size='$size'";

                    $run_customer_order3 = mysqli_query($con,$get_customer_order3);

                    //    $row_customer_order = mysqli_fetch_array($run_customer_order);

                    while($row_customer_order3 = mysqli_fetch_array($run_customer_order3)) {

                        $product_img = $row_customer_order3['lego_gap'];
//        echo $due_amount;

                    }
                    $base_url = "../Koha-IRS/static/outputs/";
                    $product_img1 = $base_url.$product_img;

                    echo $product_img1;
                }
                //    echo $product_img1?>" ></td>

            <td><?php echo $qty; ?></td>

            <td><?php echo $size; ?></td>

            <td>
                <?php
$date = date_default_timezone_set('Asia/Kolkata');
                $get_customer_order = "select * from customer_orders where order_id='$order_id' and p_id = '$product_id' and customer_id = '$c_id' and product_img='$productimage' and size='$size'";

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
                $get_customer_order2 = "select * from customer_orders where order_id='$order_id' and p_id = '$product_id' and customer_id = '$c_id' and product_img='$productimage' and size='$size'";

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

            <!--  <td>
                    <?php

            /*if($order_status=='pending'){

                echo $order_status='pending';

            }
            else{

                echo $order_status='Complete';

            }*/


            ?>
                </td>-->
            <?php
//            print_r($size);

//            print_r($matches);
//            $bX = 0;
//            $bY = 0;

//            $bX = $matches[0];
//            $bY = $matches[1];
//            echo "<br>";
//            print_r("bX = ". $bX);
//            echo "<br>";
//            print_r("bY = ". $bY);

            $get_customer_order3 = "select * from customer_custom_orders where order_id='$order_id' and p_id = '$product_id' and customer_id = '$c_id' and product_img='$productimage' and size='$size'";

            $run_customer_order3 = mysqli_query($con,$get_customer_order3);

            while($row_customer_order3 = mysqli_fetch_array($run_customer_order3)) {

                $uploaded_image = $row_customer_order3['uploaded_image'];

                //$bg_1 = $row_customer_order3['bg_1'];

                //$bg_2 = $row_customer_order3['bg_2'];

                //$bg_3 = $row_customer_order3['bg_3'];

                preg_match_all('!\d+!', $size, $matches);
                foreach($matches as $row)
                {
                    foreach($row as $l)
                    {
                        $bX = $l[0];
                        $bY = $l[0];
                    }
                }
                $bsp_size = $bX * $bY;
                if(($bX <= 4) || ($bY <= 4))
                {
                    $bg_1 = $row_customer_order3['bg_1'];
                    $bg_2 = $row_customer_order3['bg_2'];
                    $bg_3 = "NA";
                }
                elseif(($bX > 4 && $bX <=8) || ($bY > 4 && $bY <=8))
                {
                    $bg_1 = $row_customer_order3['bg_1'];
                    $bg_2 = $row_customer_order3['bg_2'];
                    $bg_3 = $row_customer_order3['bg_3'];
                }
                elseif(($bX > 8 && $bX <=20) || ($bY > 8 && $bY <=20))
                {
                    $bg_1 = $row_customer_order3['bg_1'];
                    $bg_2 = $row_customer_order3['bg_2'];
                    $bg_3 = "NA";
                }

//                $bg_4 = $row_customer_order3['bg_4'];
//
//                $bg_5 = $row_customer_order3['bg_5'];
//
//                $bg_6 = $row_customer_order3['bg_6'];

                $color_code = $row_customer_order3['color_code'];

                $csv = $row_customer_order3['csv'];

                $lego = $row_customer_order3['lego'];

                $lego_gap = $row_customer_order3['lego_gap'];

                $output_images = $row_customer_order3['output_images'];
                ?>

                <td><a href="../Koha-IRS/static/uploads/<?php echo $uploaded_image; ?>"><?php echo $uploaded_image; ?></a></td>

                <td><a href="../Koha-IRS/static/outputs/<?php echo $bg_1; ?>"><?php echo $bg_1; ?></a></td>

                <td><a href="../Koha-IRS/static/outputs/<?php echo $bg_2; ?>"><?php echo $bg_2; ?></a></td>

                <td><a href="../Koha-IRS/static/outputs/<?php echo $bg_3; ?>"><?php echo $bg_3; ?></a></td>

                <!--                <td><a href="../Koha-IRS/static/outputs/--><?php //echo $bg_4; ?><!--">--><?php //echo $bg_4; ?><!--</a></td>-->
                <!---->
                <!--                <td><a href="../Koha-IRS/static/outputs/--><?php //echo $bg_5; ?><!--">--><?php //echo $bg_5; ?><!--</a></td>-->
                <!---->
                <!--                <td><a href="../Koha-IRS/static/outputs/--><?php //echo $bg_6; ?><!--">--><?php //echo $bg_6; ?><!--</a></td>-->

                <td><a href="../Koha-IRS/static/outputs/<?php echo $color_code; ?>"><?php echo $color_code; ?></a></td>

                <td><a href="../Koha-IRS/static/outputs/<?php echo $csv; ?>"><?php echo $csv; ?></a></td>

                <td><a href="../Koha-IRS/static/outputs/<?php echo $lego; ?>"><?php echo $lego; ?></a></td>

                <td><a href="../Koha-IRS/static/outputs/<?php echo $lego_gap; ?>"><?php echo $lego_gap; ?></a></td>

                <td><a href="../Koha-IRS/static/outputs/<?php echo $output_images; ?>"><?php echo $output_images; ?></a></td>

                </tr>

            <?php }} ?>

        </tbody><!-- tbody Ends -->

        </table><!-- table table-bordered table-hover table-striped Ends -->

        </div><!-- table-responsive Ends -->

        </div><!-- panel-body Ends -->

        </div><!-- panel panel-default Ends -->

        </div><!-- col-lg-12 Ends -->

        </div><!-- 2 row Ends -->


    <?php } ?>