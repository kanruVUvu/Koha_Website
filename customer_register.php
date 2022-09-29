<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");
require_once('customer/JWT.php');
//include("database.php");
//require("libs/PHPMailer-master/src/PHPMailer.php");
//require("libs/PHPMailer-master/src/SMTP.php");
//require("libs/PHPMailer-master/src/Exception.php");

//$con = mysqli_connect("localhost","kclegobricks_USR","e88d677a03970fc","Koha_php");


?>
<style>
#bbvx
{
font-size:20px !important;
}
input[type=text] {
padding: 0.375rem 0.75rem !important;
    font-size: 1rem !important;
    font-weight: bold !important;
    line-height: 1.5 !important;
    color: #212529 !important;
    background-color: #fff !important;
}
</style>

<!-- MAIN -->
<!-- <main>
   <!-- HERO -->
<!--   <div class="nero" data-aos="slide-right"
   data-aos-offset="200"
   data-aos-delay="50"
   data-aos-duration="1000"
   data-aos-easing="ease-in-out"
   data-aos-mirror="true"
   data-aos-once="false"
   data-aos-anchor-placement="top-bottom">
     <div class="nero__heading">
       <span class="nero__bold">Register</span> AT KOHA
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
                <h2 style="color: white !important; font-size: 20px !important;"> / Customer Registration</h2>
                <!--<ol>
                  <li><a href="index.html">Home</a></li>
                  <li>Customer Registration</li>
                </ol>-->
            </div>

        </div>
    </div>
</div>
<!-- <main id="main">-->
<!-- <section class="breadcrumbs" style="color: white; background-color: black">-->
<!--      <div class="container">-->
<!---->
<!--        <div class="d-flex justify-content-between align-items-center">-->
<!--          <h2 class="textmove" style="text-align:right;"><a href="index.php">Home</a> / Customer Registration</h2>-->
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





        <div class="col-md-12" ><!-- col-md-12 Starts -->

            <div class="box" style="border:solid 1px #e6e6e6 !important;"><!-- box Starts -->

                <div class="box-header" style="background-color: #191c1f; color: white"><!-- box-header Starts -->

                    <center><!-- center Starts -->

                        <h2 style="font-size:24px !important;font-style:bold;color:#ddb253 !important;"> Register A New Account </h2>



                    </center><!-- center Ends -->

                </div><!-- box-header Ends -->

                <form action="customer_register.php" method="post" enctype="multipart/form-data" ><!-- form Starts -->

                    <div class="form-group" ><!-- form-group Starts -->

                        <label id="bbvx">First Name</label>

                        <input type="text" class="form-control" name="c_name" required>

                    </div><!-- form-group Ends -->
                    <br/>
                    <div class="form-group" ><!-- form-group Starts -->

                        <label id="bbvx">Last Name</label>

                        <input type="text" class="form-control" name="c_lname" required>

                    </div><!-- form-group Ends -->
                    <br/>
                    <div class="form-group"><!-- form-group Starts -->

                        <label id="bbvx">Email</label>

                        <input type="text" class="form-control" name="c_email" required>

                    </div><!-- form-group Ends -->
                    <br/>
                    <div class="form-group"><!-- form-group Starts -->

                        <label id="bbvx">Phone</label>

                        <input type="text" class="form-control" name="c_contact" required>

                    </div><!-- form-group Ends -->
                    <br/>
                    <div class="form-group"><!-- form-group Starts -->

                        <label id="bbvx">Address</label>

                        <input type="text" class="form-control" name="c_address" required>

                    </div><!-- form-group Ends -->
                    <br/>
                    <div class="form-group"><!-- form-group Starts -->

                        <label id="bbvx">City</label>

                        <input type="text" class="form-control" name="c_city" required>

                    </div><!-- form-group Ends -->
                    <br/>
                    <div class="form-group"><!-- form-group Starts -->

                        <label id="bbvx">State</label>

                        <input type="text" class="form-control" name="c_state" required>

                    </div><!-- form-group Ends -->
                    <br/>
                    <div class="form-group"><!-- form-group Starts -->

                        <label id="bbvx">Country</label>

                        <input type="text" class="form-control" name="c_country" required>

                    </div><!-- form-group Ends -->
                    <br/>
                    <div class="form-group"><!-- form-group Starts -->

                        <label id="bbvx">Pincode</label>

                        <input type="text" class="form-control" name="c_pincode" required>

                    </div><!-- form-group Ends -->
                    <br/>
                    <div class="form-group"><!-- form-group Starts -->

                        <label id="bbvx">Password</label>

                        <div class="input-group"><!-- input-group Starts -->

                            <span class="input-group-addon"><!-- input-group-addon Starts -->

<i class="fa fa-check tick1"> </i>

<i class="fa fa-times cross1"> </i>

</span><!-- input-group-addon Ends -->

                            <input type="password" class="form-control" id="pass" name="c_pass" required>

                            <!--<span class="input-group-addon"><!-- input-group-addon Starts -->

                            <!--<div id="meter_wrapper"><!-- meter_wrapper Starts -->

                            <!--<span id="pass_type"> </span>

                            <div id="meter"> </div>

                            </div><!-- meter_wrapper Ends -->

                            <!--</span><!-- input-group-addon Ends -->

                        </div><!-- input-group Ends -->

                    </div><!-- form-group Ends -->

                    <br/>
                    <div class="form-group"><!-- form-group Starts -->

                        <label id="bbvx"> Confirm Password </label>

                        <div class="input-group"><!-- input-group Starts -->

                            <span class="input-group-addon"><!-- input-group-addon Starts -->

<i class="fa fa-check tick2"> </i>

<i class="fa fa-times cross2"> </i>

</span><!-- input-group-addon Ends -->

                            <input type="password" class="form-control confirm" id="con_pass" required>

                        </div><!-- input-group Ends -->

                    </div><!-- form-group Ends -->

                    <input type="hidden" name="testdetails" value="testdata">
                    <!-- form-group Ends -->
                    <br/>

                    <div class="text-center"><!-- text-center Starts -->

                        <button type="submit" name="register" class="btn btn-primary">

                            <i class="fa fa-user-md"></i> CREATE

                        </button>

                    </div><!-- text-center Ends -->

                </form><!-- form Ends -->

            </div><!-- box Ends -->

        </div><!-- col-md-12 Ends -->



    </div><!-- container Ends -->
</div><!-- content Ends -->

<br/>
<br/>
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
<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

<script>

    $(document).ready(function(){

        $('.tick1').hide();
        $('.cross1').hide();

        $('.tick2').hide();
        $('.cross2').hide();


        $('.confirm').focusout(function(){

            var password = $('#pass').val();

            var confirmPassword = $('#con_pass').val();

            if(password == confirmPassword){

                $('.tick1').show();
                $('.cross1').hide();

                $('.tick2').show();
                $('.cross2').hide();



            }
            else{

                $('.tick1').hide();
                $('.cross1').show();

                $('.tick2').hide();
                $('.cross2').show();


            }


        });


    });

</script>

<script>

    $(document).ready(function(){

        $("#pass").keyup(function(){

            check_pass();

        });

    });

    function check_pass() {
        var val=document.getElementById("pass").value;
        var meter=document.getElementById("meter");
        var no=0;
        if(val!="")
        {
// If the password length is less than or equal to 6
            if(val.length<=6)no=1;

            // If the password length is greater than 6 and contain any lowercase alphabet or any number or any special character
            if(val.length>6 && (val.match(/[a-z]/) || val.match(/\d+/) || val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)))no=2;

            // If the password length is greater than 6 and contain alphabet,number,special character respectively
            if(val.length>6 && ((val.match(/[a-z]/) && val.match(/\d+/)) || (val.match(/\d+/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)) || (val.match(/[a-z]/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/))))no=3;

            // If the password length is greater than 6 and must contain alphabets,numbers and special characters
            if(val.length>6 && val.match(/[a-z]/) && val.match(/\d+/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/))no=4;

            if(no==1)
            {
                $("#meter").animate({width:'50px'},300);
                meter.style.backgroundColor="red";
                document.getElementById("pass_type").innerHTML="Very Weak";
            }

            if(no==2)
            {
                $("#meter").animate({width:'100px'},300);
                meter.style.backgroundColor="#F5BCA9";
                document.getElementById("pass_type").innerHTML="Weak";
            }

            if(no==3)
            {
                $("#meter").animate({width:'150px'},300);
                meter.style.backgroundColor="#FF8000";
                document.getElementById("pass_type").innerHTML="Good";
            }

            if(no==4)
            {
                $("#meter").animate({width:'200px'},300);
                meter.style.backgroundColor="#00FF40";
                document.getElementById("pass_type").innerHTML="Strong";
            }
        }

        else
        {
            meter.style.backgroundColor="";
            document.getElementById("pass_type").innerHTML="";
        }
    }

</script>
<!--Start of Tawk.to Script-->

<!--End of Tawk.to Script-->
</body>

</html>

<?php
include("database.php");
require("libs/PHPMailer-master/src/PHPMailer.php");
require("libs/PHPMailer-master/src/SMTP.php");
require("libs/PHPMailer-master/src/Exception.php");


if(!empty($_POST['testdetails']) && $_POST['testdetails'] == 'testdata'){

    $c_name = $_POST['c_name'];

    $c_lname = $_POST['c_lname'];

    $c_email = $_POST['c_email'];

    $c_pass = $_POST['c_pass'];

    $c_country = $_POST['c_country'];

    $c_city = $_POST['c_city'];

    $c_contact = $_POST['c_contact'];

    $c_address = $_POST['c_address'];

    $c_state = $_POST['c_state'];

    $c_pincode = $_POST['c_pincode'];

//$c_image = $_FILES['c_image']['name'];

//$c_image_tmp = $_FILES['c_image']['tmp_name'];

    $c_ip = getRealUserIp();

//move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");

    $get_email = "select * from customers where customer_email='$c_email'";

    $run_email = mysqli_query($con,$get_email);

    $check_email = mysqli_num_rows($run_email);

    if($check_email == 1){

        echo "<script>alert('This email is already registered, try another one')</script>";

        exit();

    }

    $customer_confirm_code = mt_rand();

    $subject = "Email Confirmation Message";

    $from = "pavan.rajanna93@gmail.com";

    $message = "

<h2>
Email Confirmation By Koha Website $c_name
</h2>

<a href='http://www.thekoha.com/customer/my_account.php?$customer_confirm_code'>

Click Here To Confirm Email

</a>

";

    $headers = "From: $from \r\n";

    $headers .= "Content-type: text/html\r\n";

    mail($c_email,$subject,$message,$headers);

    $insert_customer = "insert into customers (customer_name,customer_lname,customer_email,customer_contact,customer_address,customer_city,customer_state,customer_country,customer_pincode,customer_pass,customer_ip,customer_confirm_code) values ('$c_name','$c_lname','$c_email','$c_contact','$c_address','$c_city','$c_state','$c_country','$c_pincode','$c_pass','$c_ip','$customer_confirm_code')";


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

    $run_customer = mysqli_query($con,$insert_customer);

    $sel_cart = "select * from cart where ip_add='$c_ip'";

    $run_cart = mysqli_query($con,$sel_cart);

    $check_cart = mysqli_num_rows($run_cart);

    if($check_cart>0){
        $jwt = (new JWT());

        $_SESSION['customer_email']=$c_email;
        $payload = [
            'email' => $c_email
        ];
        $token = $jwt->generate($payload);
        $sql = "INSERT INTO jwt_auth ( token , email ) VALUES ('$token', '$c_email')";
        mysqli_query($con, $sql);

        $_SESSION['customer_email']=$c_email;
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);


        try {
            // Specify the SMTP settings.
            $mail->isSMTP();
            $mail->setFrom($sender, $senderName);
            $mail->Username   = $usernameSmtp;
            $mail->Password   = $passwordSmtp;
            $mail->Host       = $host;
            $mail->Port       = $port;
//	$other_recipient =$mailidg;

//	(optional)$mail->addBCC($recipient_3);
//            $c_mail = $_POST['testemail'];

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
            echo "<script>alert('Your Registration Form Details are not being submitted')</script>";
//            header("location:contactus.php");
//            echo "<script>window.open('index.php','_self')</script>";

        } catch (Exception $e) {
            echo "Email not sent. {$mail->ErrorInfo}", PHP_EOL; //Catch errors from Amazon SES.
            echo "<script>alert('Your Registration Form Details are not being submitted')</script>";
//            header("location:contactus.php");
//            echo "<script>window.open('index.php','_self')</script>";
        }
//        echo "<script>alert('You have been Registered Successfully')</script>";
//
//        echo "<script>window.open('index.php','_self')</script>";

    }else{
        $jwt = (new JWT());

        $_SESSION['customer_email']=$c_email;
        $payload = [
            'email' => $c_email
        ];
        $token = $jwt->generate($payload);
        $sql = "INSERT INTO jwt_auth ( token , email ) VALUES ('$token', '$c_email')";
        mysqli_query($con, $sql);

        $mail = new PHPMailer\PHPMailer\PHPMailer(true);


        try {
            // Specify the SMTP settings.
            $mail->isSMTP();
            $mail->setFrom($sender, $senderName);
            $mail->Username   = $usernameSmtp;
            $mail->Password   = $passwordSmtp;
            $mail->Host       = $host;
            $mail->Port       = $port;
//	$other_recipient =$mailidg;

//	(optional)$mail->addBCC($recipient_3);
//            $c_mail = $_POST['testemail'];
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

            echo "<script>alert('You have been Registered Successfully')</script>";

            echo "<script>window.open('index.php','_self')</script>";
        } catch (phpmailerException $e) {
            echo "An error occurred. {$e->errorMessage()}", PHP_EOL; //Catch errors from PHPMailer.
            echo "<script>alert('Your Registration Form Details are not being submitted')</script>";
//            header("location:contactus.php");
//            echo "<script>window.open('index.php','_self')</script>";

        } catch (Exception $e) {
            echo "Email not sent. {$mail->ErrorInfo}", PHP_EOL; //Catch errors from Amazon SES.
            echo "<script>alert('Your Registration Form Details are not being submitted')</script>";
//            header("location:contactus.php");
//            echo "<script>window.open('index.php','_self')</script>";
        }

    }



}

?>
<script>document.title = "KOHA | Customer Registration";</script>


