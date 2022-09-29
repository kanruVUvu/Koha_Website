
<?php
include("database.php");
require("libs/PHPMailer-master/src/PHPMailer.php");
require("libs/PHPMailer-master/src/SMTP.php");
require("libs/PHPMailer-master/src/Exception.php");

if(!empty($_POST['hellotestnews2']) && $_POST['hellotestnews2'] == 'hellotest2')
{
    $fullmailid = $_POST['useremail'];

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
    $subject = 'Contact us email';

// The plain-text body of the email
    $bodyText =  "Test Body";

    $sql = "insert into subscriber(email_id) values('$fullmailid')";
    $success = mysqli_query($con,$sql);
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);
    if($success)
    {
        $myemail = "pavan.rajanna93@gmail.com";
        $emailto = "$fullmailid";
        // $emailcc = "cc@domain.com";
        $emailcc = "";
        $subject = "Welcome to Koha Family";
        $headers = "From: $myemail\nMIME-Version: 1.0\nContent-Type: text/html; charset=utf-8\n";

        $body ="<p>Thanks for subscribing to our blog. You'll always receive updates from us. And we won't share and sell your information.</p>";

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
          $c_mail = "info@thekoha.com";
            $mail->SMTPAuth   = true;
            $mail->SMTPSecure = 'tls';
            //  $mail->addCustomHeader('X-SES-CONFIGURATION-SET', $configurationSet);

            // Specify the message recipients.
            $mail->addAddress($emailto);
		$mail->addCC($c_mail);
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