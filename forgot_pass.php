<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");
include("database.php");
require("libs/PHPMailer-master/src/PHPMailer.php");
require("libs/PHPMailer-master/src/SMTP.php");
require("libs/PHPMailer-master/src/Exception.php");

?>
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
<!--  <main>
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
        <span class="nero__bold">Forgot</span> password
      </div>
      <p class="nero__text">
      </p>
    </div>
  </main>-->

<div style="margin: 100px 0 20px 0">
    <div style="background-color: black; color: white">
        <div class="container">
            <div style="display: flex; justify-content: left">
                <h2 style="text-align:right; font-size: 20px !important;"><a style="color: #ddb253 !important;" href="index.php">Home&nbsp;</a></h2>
                <h2 style="color: white !important; font-size: 20px !important;"> / Forgot Password</h2>
                <!--<ol>
                  <li><a href="index.html">Home</a></li>
                  <li>Customer Registration</li>
                </ol>-->
            </div>

        </div>
    </div>
</div>
<!-- <main id="main">-->
<!-- <section class="breadcrumbs" style="background-color: black; color: white;">-->
<!--      <div class="container">-->
<!---->
<!--        <div class="d-flex justify-content-between align-items-center">-->
<!--          <h2 class="textmove" style="text-align:right;"><a href="index.php">Home</a> / Forgot Password</h2>-->
<!--          <ol>-->
<!--            <li><a href="index.html">Home</a></li>-->
<!--            <li>Customer Registration</li>-->
<!--          </ol>-->
<!--        </div>-->
<!---->
<!--      </div>-->
<!--    </section>-->
<!--</main>-->
  
<br/>
<div id="content" data-aos="slide-right"
    data-aos-offset="200"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="false"
    data-aos-anchor-placement="top-bottom"><!-- content Starts -->
    <div class=" row" style="padding-right: 5%; padding-left: 5%;" ><!-- container Starts -->

<div class="col-md-12" ><!--- col-md-12 Starts -->
<!---->
<!--<ul class="breadcrumb" style="background-color: black; color: white">breadcrumb Starts -->

<!--<li>-->
<!--<a href="index.php">Home</a>-->
<!--</li>-->
<!---->
<!--<li>Register</li>-->
<!---->
<!--</ul>-->



</div><!--- col-md-12 Ends -->


<div class="col-md-12" ><!-- col-md-12 Starts -->

<div class="box" style="border:solid 1px #e6e6e6 !important;"><!-- box Starts -->

<div class="box-header" style="background-color: #191c1f; color: white"><!-- box-header Starts -->

<center>

<h3 style="font-size:24px !important;font-style:bold;color:#ddb253 !important;"> Enter Your Email Below , We Will Send You , Your Password </h3>

</center>

</div><!-- box-header Ends -->

<div align="center"><!-- center div Starts -->

<form action="forgot_pass.php" method="post"><!-- form Starts -->

<input type="text" class="form-control" name="c_email" placeholder="Enter Your Email">

<br>

<input type="submit" name="forgot_pass" class="btn btn-primary" value="Send My Password">

</form><!-- form Ends -->

</div><!-- center div Ends -->

</div><!-- box Ends -->

</div><!-- col-md-12 Ends -->


</div><!-- container Ends -->
</div><!-- content Ends -->
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
<!--<script type="text/javascript">
    (function(d, m){
        var kommunicateSettings = 
            {"appId":"28697f7e85fe0fdff7aad97521eeac9c1","popupWidget":true,"automaticChatOpenOnNavigation":true};
        var s = document.createElement("script"); s.type = "text/javascript"; s.async = true;
        s.src = "https://widget.kommunicate.io/v2/kommunicate.app";
        var h = document.getElementsByTagName("head")[0]; h.appendChild(s);
        window.kommunicate = m; m._globals = kommunicateSettings;
    })(document, window.kommunicate || {});
/* NOTE : Use web server to view HTML files as real-time update will not work if you directly open the HTML file in the browser. */
</script>-->
<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>
<!--Start of Tawk.to Script-->

<!--End of Tawk.to Script-->
</body>
</html>

<?php

if(isset($_POST['forgot_pass'])){

$c_email = $_POST['c_email'];

$sel_c = "select * from customers where customer_email='$c_email'";

$run_c = mysqli_query($con,$sel_c);

$count_c = mysqli_num_rows($run_c);

$row_c = mysqli_fetch_array($run_c);

$c_name = $row_c['customer_name'];

$c_pass = $row_c['customer_pass'];

if($count_c == 0){

echo "<script> alert('Sorry, We do not have your email') </script>";

exit();

}
else{

$message = "

<h1 align='center'> Your Password Has Been Sent To You </h1>

<h2 align='center'> Dear $c_name </h2>

<h3 align='center'>

Your Password is : <span> <b>$c_pass</b> </span>

</h3>

<h3 align='center'>

<a href='http://www.thekoha.com/checkout.php'>

Click Here To Login Your Account

</a>

</h3>

";

$from = "pavan.rajanna93@gmail.com";

$subject = "Your Password";

$headers = "From: $from\r\n";

$headers .= "Content-type: text/html\r\n";
    $sender = 'pavan.rajanna93@gmail.com';
    $senderName = 'The Koha';

// Replace recipient@example.com with a "To" address. If your account
// is still in the sandbox, this address must be verified.
    $recipient =  "info@thekoha.com";

// Replace smtp_username with your Amazon SES SMTP user name.
    $usernameSmtp = 'AKIATVLGTH5KQMRLUQUW';

// Replace smtp_password with your Amazon SES SMTP password.
    $passwordSmtp = 'BF/4KV2DK9lCV/BAuKR1kxWGePWbQxGdC76UsOaZPprJ';

// Specify a configuration set. If you do not want to use a configuration
// set, comment or remove the next line.
//$configurationSet = 'ConfigSet';

// If you're using Amazon SES in a region other than US West (Oregon),
// replace email-smtp.us-west-2.amazonaws.com with the Amazon SES SMTP
// endpoint in the appropriate region.
    $host = 'email-smtp.ap-south-1.amazonaws.com';
    $port = 587;

// The subject line of the email
//    $subject = 'Contact us email';
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);


    try {
        // Specify the SMTP settings.
        $mail->isSMTP();
        $mail->setFrom($sender, $senderName);
        $mail->Username   = $usernameSmtp;
        $mail->Password   = $passwordSmtp;
        $mail->Host       = $host;
        $mail->Port       = $port;
        $mail->SMTPAuth   = true;
        $mail->SMTPSecure = 'tls';
        //  $mail->addCustomHeader('X-SES-CONFIGURATION-SET', $configurationSet);

        // Specify the message recipients.
        $mail->addAddress($c_email);
//            $mail->addCC($c_email);
        // You can also add CC, BCC, and additional To recipients here.

        // Specify the content of the message.
        $mail->isHTML(true);
        $mail->Subject    = $subject;
        $mail->Body       = $message;
//            $mail->AltBody    = $bodyText;
        $mail->Send();

//            echo "<script>alert('You have been Registered Successfully')</script>";
//
//            echo "<script>window.open('index.php','_self')</script>";
    } catch (phpmailerException $e) {
        echo "An error occurred. {$e->errorMessage()}", PHP_EOL; //Catch errors from PHPMailer.
        echo "<script>alert('A problem has been Occurred.')</script>";


    } catch (Exception $e) {
        echo "Email not sent. {$mail->ErrorInfo}", PHP_EOL; //Catch errors from Amazon SES.
        echo "<script>alert('A problem has been Occurred.')</script>";

    }

echo "<script> alert('Your Password has been sent to you, check your inbox ') </script>";

echo "<script>window.open('checkout.php','_self')</script>";

}

}

?>
<script>document.title = "KOHA | Forgot Password";</script>
