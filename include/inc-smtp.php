<?php
	require_once("phpmailer/class.phpmailer.php");
	require_once("phpmailer/PHPMailerAutoload.php");
	$mail = new PHPMailer();

	if($issmtp == "1"){
		$mail->isSMTP();
	} else {
		/*$mail->isSMTP();*/
	}
	
	$mail->Host = $emailhostname;				/*Email Host Name*/
	
	if($smtpdebug != ""){						/*SMTP Debug*/
		$mail->SMTPDebug  = $smtpdebug;
	} else {
		$mail->SMTPDebug  = 0;
	}
	
	$mail->SMTPAuth = true;						/*Enable SMTP authentication*/
	$mail->Username = $emailusername;			/*SMTP username*/
	$mail->Password = $emailuserpassword;		/*SMTP password*/
	$mail->SMTPSecure = $emailsmtpsecure;   
	$mail->Port = $emailport;
?>