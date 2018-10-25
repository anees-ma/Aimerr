<?php
//Barre
    $to = "aneeskader209@gmail.com";
	
	//require 'phpmailer/class.phpmailer.php';
	require("/home/aimerrco/public_html/contact/phpmailer/class.phpmailer.php");
	

        $mail = new PHPMailer();
        $mail->SMTPDebug = 2;                               
       // $mail->isSMTP();                                      
        $mail->Host = "aimerr.com";                    
        $mail->SMTPAuth = true;                               
        $mail->Username = "sending@aimerr.com";  // SMTP username
$mail->Password = "P%sm[46fhKf{";              // SMTP password                       
       // $mail->SMTPSecure = 'ssl';                            
        $mail->Port = 25;
        $mail->AddReplyTo('aneeskader209@gmail.com', 'anees');
        $mail->From = 'noreply@aimerr.com';
        $mail->FromName = 'aimerr-no reply';
        $mail->addAddress($to);      
        $mail->WordWrap = 50;                               
        $mail->isHTML(true);  
		$mail->Subject = 'from-Aimerr';
		
		$from='aneeskader209@gmail.com';
	

	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subject = "Website Visitor";

  //  $logo = '';
  //  $link = '#';

	$body = "hellooooo";
	
	set_time_limit(200);
        $mail->Body    = $body;
        if($mail->Send())
        {
			echo "trueopoopop";
	}else echo "falseuuu";


	//if(mail($to, $subject, $body, $headers)){
	//	echo "true";
	//}else echo "false";

?>
