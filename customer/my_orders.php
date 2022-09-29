<center><!-- center Starts -->

    <h1>My Orders</h1>

    <p class="lead"> Your orders on one place.</p>


</center><!-- center Ends -->

<hr>

<div class="table-responsive"><!-- table-responsive Starts -->

    <table class="table table-bordered table-hover"><!-- table table-bordered table-hover Starts -->

        <thead><!-- thead Starts -->

        <tr>

            <th>O N:</th>
            <th>Due Amount:</th>
            <th>Invoice No:</th>
            <th>Qty:</th>
            <th>Size:</th>
            <th>Image:</th>
            <th>Order Date:</th>
			<th>Order Status:</th>
            <!--<th>Paid/Unpaid:</th>
            <th>Status:</th>-->


        </tr>

        </thead><!-- thead Ends -->

        <tbody><!--- tbody Starts --->

        <?php
$date = date_default_timezone_set('Asia/Kolkata');
        $customer_session = $_SESSION['customer_email'];

        $get_customer = "select * from customers where customer_email='$customer_session'";

        $run_customer = mysqli_query($con, $get_customer);

        $row_customer = mysqli_fetch_array($run_customer);

        $customer_id = $row_customer['customer_id'];

        $get_orders = "select * from customer_orders where customer_id='$customer_id'";

        $run_orders = mysqli_query($con, $get_orders);

        $i = 0;

        while ($row_orders = mysqli_fetch_array($run_orders)) {

            $order_id = $row_orders['order_id'];

            $due_amount = $row_orders['due_amount'];

            $invoice_no = $row_orders['invoice_no'];

            $p_id = $row_orders['p_id'];

            $product_img1 = $row_orders['product_img'];

            if($p_id == 10001){
                $base_url = "../Koha-IRS/static/outputs/";
                $product_img = $row_orders['product_img'];
                $product_img1 = $base_url.$product_img;
            }else{

                $base_url = "../admin_area/product_images/";
                $product_img = $row_orders['product_img'];
                $product_img1 = $base_url.$product_img;
            }

            $qty = $row_orders['qty'];

            $size = $row_orders['size'];

            $order_date = $row_orders['order_date'];

            $order_status = $row_orders['order_status'];

            $i++;

            /*if ($order_status == 'pending') {

                $order_status = "Unpaid";

            } else {

                $order_status = "Paid";

            }*/

            ?>

            <tr><!-- tr Starts -->

                <th><?php echo $i; ?></th>

                <td>&#X20B9;<?php echo $due_amount; ?></td>

                <td><?php echo $invoice_no; ?></td>

                <td><?php echo $qty; ?></td>

                <td><?php echo $size; ?></td>

<!--                <td><img style="height: 50px; width: 50px" src="../admin_area/product_images/--><?php //echo $product_img1;?><!--"></td>-->
                <td><img style="height: 50px; width: 50px" src="<?php echo $product_img1;?>"></td>
<!--                <td><img style="height: 50px; width: 50px" src="../admin_area/product_images/--><?php
//                    if ($size == 'Small'){
//                        echo $product_img1;
//                    }
//                    else if ($size == 'Medium'){
//                        echo $product_img2;
//                    }
//                    else if ($size == 'Large'){
//                        echo $product_img3;
//                    }
//                    ?><!--"></td>-->

                <td><?php echo date('F j, Y, g:i a T' , strtotime($order_date. ' + 330 minutes')); ?></td>
<td><?php echo $order_status; ?></td>
                <!--<td><?php //echo $order_status; ?></td>

                <td>
                    <a href="confirm.php?order_id=<?php //echo $order_id; ?>" target="blank"
                       class="btn btn-primary btn-sm"> Confirm If Paid </a>
                </td>-->


            </tr><!-- tr Ends -->

        <?php } ?>

        </tbody><!--- tbody Ends --->


    </table><!-- table table-bordered table-hover Ends -->

</div><!-- table-responsive Ends -->