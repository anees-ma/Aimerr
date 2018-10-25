<?php

    $to = "info@aimerr.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $work = $_REQUEST['work'];
    $phone = $_REQUEST['contact'];
    $wd = $_REQUEST['description'];

    require("/home/aimerrco/public_html/PHPMailer1/class.phpmailer.php");
	
	$mail = new PHPMailer();
	//$mail->SMTPDebug = 2;                               
	$mail->isSMTP();                                      
	$mail->Host = 'aimerr.com';                       
	$mail->SMTPAuth = true;
	$mail->Username = "sending@aimerr.com";  // SMTP username
	$mail->Password = "P%sm[46fhKf{";              // SMTP password                       
 //   $mail->SMTPSecure = 'ssl';                            
	$mail->Port = 25;
	$mail->AddReplyTo($from, $name);
	$mail->From = $from;
	$mail->FromName = $name;
	$mail->addAddress($to);      
	$mail->WordWrap = 50;                               
	$mail->isHTML(true);    
	$mail->Subject = 'Work Quotation Request';

  //  $logo = 'http://droithemes.com/html/appland/image/logo.png';
  //  $link = '#';

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Appland Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	//$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
	$body .= "</td></tr></thead><tbody><tr>";
	$body .= "<td style='border:none;'><strong>Person/ Company name:</strong> {$name}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Email id:</strong> {$from}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Contact number:</strong> {$phone}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Work:</strong> {$work}</td></tr>";
	$body .= "<tr><td style='border:none;'><strong>Work description:</strong> {$wd}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";
	
	set_time_limit(200);
	$mail->Body    = $body;
	if($mail->Send())
	{
		echo "true";
		
		$mail->ClearReplyTos();
		$mail->ClearAllRecipients(); 
		$mail->AddReplyTo('info@aimerr.com', 'Aimerr Solutions');
		$mail->From = 'info@aimerr.com';
		$mail->FromName = 'Aimerr Solutions';
		$mail->addAddress($from);     
		$mail->WordWrap = 50;                               
		$mail->isHTML(true); 
		$mail->AddEmbeddedImage('img/logo3.png', 'logo_2u');
		$mail->AddEmbeddedImage('img/mail-icon.png', 'mail-icon');
		$mail->AddEmbeddedImage('img/phone-icon.png', 'phone-icon');
		$mail->AddEmbeddedImage('img/whatsapp-icon.png', 'whatsapp-icon');
		$mail->Subject = 'Acknowledgement';
		
	/*	$msg="<div class='container'>
			<div class='row'>
				<div class='col-xl-12'>
					<p>Thank you for visiting our website.</p>
					<img id='mail-logo' src='cid:logo_2u' style='max-width:100%'>
					<p style='color: #1f497d;'><img src='cid:phone-icon'> info@aimerr.com   <img class='img-responsive' src='cid:fax-icon'> +91 9497456209  <img class='img-responsive' src='cid:mobile-icon'>+91 9207653148</p>
					<p style='color: #1f497d;'><img class='img-responsive' src='cid:globe-icon'> www.aimerr.com</p>
				</div>
			</div>
		</div>";*/
		
		$msg="<div style='background-color:#3fcef7;padding:5% 10% 5% 10%;'>
	<div style='background-color:#ffffff;padding-top:5%;padding-bottom:13%;padding-left:5%;padding-right:5%;height:100%;'>
		<p style='color:#929393;font-size:20px;'>Thank you for choosing us, we'll contact you soon with the work quotation. Take care and regards!</P>
		<div><a href='http://aimerr.com/' target='_blank' style='text-align:center'><button style='background-color:#3a9868;color:white;padding:10px 15px;margin-bottom:50px;border:none;'>Read more</button></a></div>
		<img src='cid:logo_2u'>
		<div>
			<p style='color:#6f7982;float:left;padding-right:25px;text-decoration:none;font-size:18px'><img src='cid:mail-icon'> info@aimerr.com</P>
			<p style='color:#6f7982;float:left;padding-right:25px;font-size:18px'><img src='cid:phone-icon'> +91 9207653148</P>
			<p style='color:#6f7982;float:left;padding-right:25px;font-size:18px'><img src='cid:whatsapp-icon'> +91 9497456209</P>
		</div>
	</div>
</div>";
		
		set_time_limit(200);
		$mail->Body    = $msg;
		if($mail->Send())
		{
			
		}
	}else echo "false";


?>
