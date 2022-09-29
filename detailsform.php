<?php
include("database.php");
require("libs/PHPMailer-master/src/PHPMailer.php");
require("libs/PHPMailer-master/src/SMTP.php");
require("libs/PHPMailer-master/src/Exception.php");
if(!empty($_POST['hellotestcontact5']) && $_POST['hellotestcontact5'] == 'hellotestconnect5')
{
    $fullnametest = $_POST['testname5'];
    $mailidgtest = $_POST['testemail5'];
    $queryboxstest = $_POST['testmessage5'];
    $sql = "insert into productdetailsqueries(name,email,message) values('$fullnametest','$mailidgtest','$queryboxstest')";
    $success = mysqli_query($con,$sql);

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
    $subject = 'Product Details Queries email';

// The plain-text body of the email
    $bodyText =  "Test Body";
    if($success)
    {
        $myemail = "pavan.rajanna93@gmail.com";
        $emailto = "info@thekoha.com";
        $emailcc = "$mailidgtest";
        $subject = "Product Details Queries";
        // $headers = "From: $myemail";
        $headers = "From: $myemail\nMIME-Version: 1.0\nContent-Type: text/html; charset=utf-8\n";
        $headers .= "Cc: $emailcc\nMIME-Version: 1.0\nContent-Type: text/html; charset=utf-8\n";
        $body ="
            <html>
            <body>
            <table style='border:1px solid black !important;'>
                <tr>                
                    <td style='border:1px solid black !important;'>Name</td>
                    <td style='border:1px solid black !important;'>$fullnametest</td>
                </tr>
                <tr>                
                    <td style='border:1px solid black !important;'>Email</td>
                    <td style='border:1px solid black !important;'>$mailidgtest</td>
                </tr>
                <tr>                
                    <td style='border:1px solid black !important;'>Comments</td>
                    <td style='border:1px solid black !important;'>$queryboxstest</td>
                </tr>
            </table>
            </body>
            </html>
            ";
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
            $mail->addAddress($emailto);
		$mail->addCC($emailcc);
            // You can also add CC, BCC, and additional To recipients here.

            // Specify the content of the message.
            $mail->isHTML(true);
            $mail->Subject    = $subject;
            $mail->Body       = $body;
//		$mail->AltBody    = $bodyText;
            $mail->Send();
//            echo "<script>alert('Your Contact Form Details are being successfully submitted')</script>";
//			header("location:contactus.php");
        } catch (phpmailerException $e) {
            echo "An error occurred. {$e->errorMessage()}", PHP_EOL; //Catch errors from PHPMailer.
//			echo "<script>alert('Your Contact Form Details are not being submitted')</script>";
//			header("location:contactus.php");

        } catch (Exception $e) {
            echo "Email not sent. {$mail->ErrorInfo}", PHP_EOL; //Catch errors from Amazon SES.
//			echo "<script>alert('Your Contact Form Details are not being submitted')</script>";
//			header("location:contactus.php");
        }


        echo "<script>alert('Mail has sent successfully!')</script>";
		header("location:".$_SERVER['HTTP_REFERER']);
    }
    else
    {
        echo "<script>alert('Mail has not been sent')</script>";
header("location:".$_SERVER['HTTP_REFERER']);
    }


}

?>