<style>
input[type=text] {
padding: 0.375rem 0.75rem !important;
    font-size: 1rem !important;
    font-weight: bold !important;
    line-height: 1.5 !important;
    color: #212529 !important;
    background-color: #fff !important;
}
</style>
<div class="box" style="border:solid 1px #e6e6e6 !important;"><!-- box Starts -->

<div class="box-header" style="background-color: #191c1f; color: white"><!-- box-header Starts -->

<center>

<h1 style="font-size:24px !important;">Login</h1>

<!--<p class="lead" style="font-size:16px; color: white">Already our Customer</p>-->


</center>




</div><!-- box-header Ends -->

<form action="checkout.php" method="post" ><!--form Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label style="font-size:20px !important;">Email</label>

<input type="text" class="form-control" name="c_email" required >

</div><!-- form-group Ends -->
<br/>
<div class="form-group" ><!-- form-group Starts -->

<label style="font-size:20px !important;">Password</label>

<input type="password" class="form-control" name="c_pass" required >
<br/>
<h4 align="center">

<a href="forgot_pass.php"><h3 style="font-size:20px !important;color:white !important;"> Forgot Password </h3></a>

</h4>

</div><!-- form-group Ends -->
<div class="text-center" ><!-- text-center Starts -->

<button name="login" value="Login" class="btn btn-primary" >

<i class="fa fa-sign-in" ></i> Log in


</button>

</div><!-- text-center Ends -->


</form><!--form Ends -->

<br/>


<center><!-- center Starts -->

<a href="customer_register.php" >

<h3 style="font-size:20px !important;color:white !important;">New ? Register Here</h3>

</a>


</center><!-- center Ends -->


</div><!-- box Ends -->

<?php
function sample($result): void
{
    echo ($result == true ?
            '<span style="color:green">JWT is valid</span>' : '<span style="color:red">JWT is invalid</span>') . '<br>';
}

?>
<?php
$jwt = (new JWT());

if(isset($_POST['login'])){

$customer_email = $_POST['c_email'];

$customer_pass = $_POST['c_pass'];

$select_customer = "select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";

$run_customer = mysqli_query($con,$select_customer);

$get_ip = getRealUserIp();

$check_customer = mysqli_num_rows($run_customer);

$select_cart = "select * from cart where ip_add='$get_ip'";

$run_cart = mysqli_query($con,$select_cart);

$check_cart = mysqli_num_rows($run_cart);

if($check_customer==0){

echo "<script>alert('password or email is wrong')</script>";

exit();

}

if($check_customer==1 AND $check_cart==0){

$_SESSION['customer_email']=$customer_email;
$payload = [
        'email' => $customer_email
];
$token = $jwt->generate($payload);

    $token_exploded = explode('.', $token); // explode token based on JWT breaks
//    $token_exploded_decoded = strtr(base64_encode($token_exploded), '+/', '-_');
//    echo '<script type="text/javascript">alert("'.$token_exploded.'");</script>';
//    echo '<script type="text/javascript">alert("'.$token_exploded[0].'");</script>';
//    echo '<script type="text/javascript">alert("'.$token_exploded[1].'");</script>';
//    echo '<script type="text/javascript">alert("'.$token_exploded[2].'");</script>';
//    $headers = rtrim(strtr(base64_encode($token_exploded_decoded), '+/', '-_'), '=');

//    $payload = base64_decode($token_exploded[1]);
//        echo '<script type="text/javascript">alert("'.$token_exploded.'");</script>';
//    echo '<script type="text/javascript">alert("'.$payload.'");</script>';
//    echo '<script type="text/javascript">alert("'.$headers.'");</script>';
//    echo '<script type="text/javascript">alert("'.$token[1].'");</script>';
    $validity = $jwt->is_valid($token);
    if($jwt->is_valid($token)) {
        $sql = "INSERT INTO jwt_auth where email ='$customer_email' ( token ) VALUES ('$token')";
        mysqli_query($con, $sql);
//        echo '<script type="text/javascript">alert("Valid");</script>';
//        echo '<script type="text/javascript">alert("' . $validity . '");</script>';
    }
    else {
//        echo '<script type="text/javascript">alert("Invalid");</script>';
//        echo '<script type="text/javascript">alert("'.$validity.'");</script>';
    }
//    $headers = base64_decode($token[0]);
//    $payload = base64_decode($token[1]);

//    echo '<script type="text/javascript">alert("'.$payload.'");</script>';

echo "<script>alert('You are Logged In' )</script>";

echo "<script>window.open('index.php','_self')</script>";

}
else {

$_SESSION['customer_email']=$customer_email;
    $_SESSION['customer_email']=$customer_email;
    $payload = [
        'email' => $customer_email
    ];
    $token = $jwt->generate($payload);
    sample($jwt->is_valid($token));
    $headers = base64_decode($token[0]);
    $payload = base64_decode($token[1]);

    $validity = $jwt->is_valid($token);
    if($jwt->is_valid($token)) {
        $sql = "INSERT INTO jwt_auth where email ='$customer_email' ( token) VALUES ('$token')";
        mysqli_query($con, $sql);
//        echo '<script type="text/javascript">alert("Valid");</script>';
//        echo '<script type="text/javascript">alert("' . $validity . '");</script>';
    }
    else {
//        echo '<script type="text/javascript">alert("Invalid");</script>';
//        echo '<script type="text/javascript">alert("'.$validity.'");</script>';
    }
//    echo '<script type="text/javascript">alert("'.$headers.'");</script>';

echo "<script>alert('You are Logged In')</script>";

echo "<script>window.open('index.php','_self')</script>";

} 


}

?>