<?php
//Aimerr
    $to = "aneeskader209@gmail.com";
    $email = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $last = $_REQUEST['last'];
    $phone = $_REQUEST['contact'];
    $cmessage = $_REQUEST['message'];
	
require("/home/aimerrco/public_html/contact/phpmailer/class.phpmailer.php");

 $mail = new PHPMailer();
        $mail->SMTPDebug = 2;                               
        $mail->isSMTP();                                      
        $mail->Host = 'aimerr.com';                       
        $mail->SMTPAuth = true;
$mail->Username = "sending@aimerr.com";  // SMTP username
$mail->Password = "P%sm[46fhKf{";              // SMTP password                       
     //   $mail->SMTPSecure = 'ssl';                            
        $mail->Port = 25;
        $mail->AddReplyTo($email, $name);
        $mail->From = $email;
       // $mail->FromName = $name;
        $mail->addAddress($to);      
        $mail->WordWrap = 50;                               
        $mail->isHTML(true);    
        $mail->Subject = 'from-Aimerr';
	

	/*$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";*/

  //  $logo = 'http://droithemes.com/html/appland/image/logo.png';
  //  $link = '#';

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Appland Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	//$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
	$body .= "</td></tr></thead><tbody><tr>";
	$body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Email:</strong> {$email}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Message:</strong> {$cmessage}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";
	
	set_time_limit(200);
        $mail->Body    = $body;
        if($mail->Send())
        {
			echo "true";
	}else echo "false";


	//if(mail($to, $subject, $body, $headers)){
	//	echo "true";
	//}else echo "false";

?>
