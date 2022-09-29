<?php
include("database.php");
require("libs/PHPMailer-master/src/PHPMailer.php");
require("libs/PHPMailer-master/src/SMTP.php");
require("libs/PHPMailer-master/src/Exception.php");

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

// Replace sender@example.com with your "From" address.
// This address must be verified with Amazon SES.

$fullname = $_POST['testname'];
$mailidg = $_POST['testemail'];
$telpno = $_POST['phoneno'];
$subj = $_POST['subjectp'];
$besttc = $_POST['bestt'];
$queryboxs = $_POST['massage2'];
$sql = "insert into contactusformtable(full_name,mail_address,phone_number,subject_info,best_time,queries_info) values('$fullname','$mailidg','$telpno','$subj','$besttc','$queryboxs')";
$success = mysqli_query($con, $sql);

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

// The HTML-formatted body of the email
$bodyHtml ="
            <html>
            <body>
            <table style='border: 1px solid black !important;'>
                <tr>                
                    <td style='border: 1px solid black !important;'>Name</td>
                    <td style='border: 1px solid black !important;'>$fullname</td>
                </tr>
                <tr>                
                    <td style='border: 1px solid black !important;'>Telephone</td>
                    <td style='border: 1px solid black !important;'>$telpno</td>
                </tr>
                <tr>                
                    <td style='border: 1px solid black !important;'>Email</td>
                    <td style='border: 1px solid black !important;'>$mailidg</td>
                </tr>
				<tr>                
                    <td style='border: 1px solid black !important;'>Subject</td>
                    <td style='border: 1px solid black !important;'>$subj</td>
                </tr>
				<tr>                
                    <td style='border: 1px solid black !important;'>Best Time to Contact</td>
                    <td style='border: 1px solid black !important;'>$besttc</td>
                </tr>
                <tr>                
                    <td style='border: 1px solid black !important;'>Comments</td>
                    <td style='border: 1px solid black !important;'>$queryboxs</td>
                </tr>
            </table>
            </body>
            </html>
            ";

//                $mail = new PHPMailer(true);
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
	$c_mail = $_POST['testemail'];
	$mail->SMTPAuth   = true;
	$mail->SMTPSecure = 'tls';
	//  $mail->addCustomHeader('X-SES-CONFIGURATION-SET', $configurationSet);

	// Specify the message recipients.
	$mail->addAddress($recipient);
	$mail->addCC($c_mail);
	// You can also add CC, BCC, and additional To recipients here.

	// Specify the content of the message.
	$mail->isHTML(true);
	$mail->Subject    = $subject;
	$mail->Body       = $bodyHtml;
	//$mail->AltBody    = $bodyText;
	$mail->Send();

//	echo "Email sent!" , PHP_EOL;
	echo "<script>alert('Your Contact Form Details are being successfully submitted')</script>";
	header("location:contactus.php");
} catch (phpmailerException $e) {
	echo "An error occurred. {$e->errorMessage()}", PHP_EOL; //Catch errors from PHPMailer.
	echo "<script>alert('Your Contact Form Details are not being submitted')</script>";
	header("location:contactus.php");

} catch (Exception $e) {
	echo "Email not sent. {$mail->ErrorInfo}", PHP_EOL; //Catch errors from Amazon SES.
	echo "<script>alert('Your Contact Form Details are not being submitted')</script>";
	header("location:contactus.php");
}
?>



