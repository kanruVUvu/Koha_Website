<?php
include('database.php');
session_start();
?>
<?php

if(!isset($_SESSION['customer_email'])){
    echo "<script>window.open('checkout.php','_self')</script>";
}
?>