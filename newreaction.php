<?php
include("database.php");
require("libs/PHPMailer-master/src/PHPMailer.php");
require("libs/PHPMailer-master/src/SMTP.php");
require("libs/PHPMailer-master/src/Exception.php");


if(!empty($_POST['hellotestcontact2']) && $_POST['hellotestcontact2'] == 'hellotestconnect2') {
    $fullname = $_POST['testname'];
    $mailidg = $_POST['testemail'];
    $telpno = $_POST['phoneno'];
    $subj = $_POST['subjectp'];
    $besttc = $_POST['bestt'];
    $queryboxs = $_POST['massage2'];
    $sender = 'pavan.rajanna93@gmail.com';
    $senderName = 'The Koha';

// Replace recipient@example.com with a "To" address. If your account
// is still in the sandbox, this address must be verified.
    $recipient = "$mailidg";

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
    $bodyText = "Test Body";
    $sql = "insert into contactusformtable(full_name,mail_address,phone_number,subject_info,best_time,queries_info) values('$fullname','$mailidg','$telpno','$subj','$besttc','$queryboxs')";
    $success = mysqli_query($con, $sql);
    if ($success) {
        $myemail = "pavan.rajanna93@gmail.com";
        $emailto = "info@thekoha.com";
        $emailcc = "$mailidg";
        $subject = "Contact us email";
        // $headers = "From: $myemail";
        $headers = "From: $myemail\nMIME-Version: 1.0\nContent-Type: text/html; charset=utf-8\n";
        $headers .= "Cc: $emailcc\nMIME-Version: 1.0\nContent-Type: text/html; charset=utf-8\n";
        $body = "
            <html>
            <body>
            <table>
                <tr>                
                    <td>Name</td>
                    <td>$fullname</td>
                </tr>
                <tr>                
                    <td>Telephone</td>
                    <td>$telpno</td>
                </tr>
                <tr>                
                    <td>Email</td>
                    <td>$mailidg</td>
                </tr>
				<tr>                
                    <td>Subject</td>
                    <td>$subj</td>
                </tr>
				<tr>                
                    <td>Best Time to Contact</td>
                    <td>$besttc</td>
                </tr>
                <tr>                
                    <td>Comments</td>
                    <td>$queryboxs</td>
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
            $mail->Username = $usernameSmtp;
            $mail->Password = $passwordSmtp;
            $mail->Host = $host;
            $mail->Port = $port;
//	$other_recipient =$mailidg;

//	(optional)$mail->addBCC($recipient_3);
//			$c_mail = $_POST['testemail'];
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'tls';
            //  $mail->addCustomHeader('X-SES-CONFIGURATION-SET', $configurationSet);

            // Specify the message recipients.
            $mail->addAddress($recipient);
//			$mail->addCC($c_mail);
            // You can also add CC, BCC, and additional To recipients here.

            // Specify the content of the message.
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $queryboxs;
            $mail->AltBody = $bodyText;
            $mail->Send();

            echo "Email sent!" , PHP_EOL;
//			echo "<script>alert('Your Contact Form Details are being successfully submitted')</script>";
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
    }
}
?>

<?php
include("database.php");
if(!empty($_POST['hellotestnews2']) && $_POST['hellotestnews2'] == 'hellotest2')
{
    $fullmailid = $_POST['useremail'];
    $sql = "insert into subscriber(email_id) values('$fullmailid')";
    $success = mysqli_query($con,$sql);
    if($success)
    {
        $myemail = "pavan.rajanna93@gmail.com";
        $emailto = "$fullmailid";
        // $emailcc = "cc@domain.com";
        $emailcc = "";
        $subject = "Welcome to Koha Family";
        $headers = "From: $myemail\nMIME-Version: 1.0\nContent-Type: text/html; charset=utf-8\n";

        $body ="<p>Thanks for subscribing to our blog. You'll always receive updates from us. And we won't share and sell your information.</p>";
        $send = mail($emailto, $subject . ' ' . "", $body, $headers);
        echo "<script>alert('Mail has sent successfully!<br>')</script>";
        header("location:".$_SERVER['HTTP_REFERER']);
    }
    else
    {
        echo "<script>alert('Mail has not been sent')</script>";
        header("location:".$_SERVER['HTTP_REFERER']);
    }

}
?>
<?php
include("database.php");
if(!empty($_POST['hellotestcontact5']) && $_POST['hellotestcontact5'] == 'hellotestconnect5')
{
    $fullnametest = $_POST['testname5'];
    $mailidgtest = $_POST['testemail5'];
    $queryboxstest = $_POST['testmessage5'];
    $sql = "insert into productdetailsqueries(name,email,message) values('$fullnametest','$mailidgtest','$queryboxstest')";
    $success = mysqli_query($con,$sql);
    if($success)
    {
        $myemail = "pavan.rajanna93@gmail.com";
        $emailto = "info@thekoha.com";
        $emailcc = "$mailidg";
        $subject = "Product Details Queries";
        // $headers = "From: $myemail";
        $headers = "From: $myemail\nMIME-Version: 1.0\nContent-Type: text/html; charset=utf-8\n";
        $headers .= "Cc: $emailcc\nMIME-Version: 1.0\nContent-Type: text/html; charset=utf-8\n";
        $body ="
            <html>
            <body>
            <table>
                <tr>                
                    <td>Name</td>
                    <td>$fullnametest</td>
                </tr>
                <tr>                
                    <td>Email</td>
                    <td>$mailidgtest</td>
                </tr>
                <tr>                
                    <td>Comments</td>
                    <td>$queryboxstest</td>
                </tr>
            </table>
            </body>
            </html>
            ";
        $send = mail($emailto, $subject . ' ' . "", $body, $headers);
        echo "<script>alert('Your Product Details Queries are being successfully submitted')</script>";
        header("location:".$_SERVER['HTTP_REFERER']);
    }
    else
    {
        echo "<script>alert('Your Product Details Queries are not being submitted')</script>";
        header("location:".$_SERVER['HTTP_REFERER']);
    }

}

?>