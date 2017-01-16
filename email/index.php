<?php

	// $to = 'prit1605@gmail.com';
	// $subject = 'This is subject';
	// $message = wordwrap('This is message', 70);
	// $from = "Pritam Bohra <prit1605@gmail.com>";
	// $header = "From: {$from}";

	// var_dump(mail($to, $subject, $message, $header));
	require 'vendor/autoload.php';

	$mail = new PHPMailer();

	$mail->SMTPDebug = 0;
	$mail->isSMTP();                                      	// Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  						// Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               	// Enable SMTP authentication
	$mail->Username = 'pratsocarseldine@gmail.com';        	// SMTP username
	$mail->Password = 'nadol@240172';                       // SMTP password
	$mail->SMTPSecure = 'tls';                            	// Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;

	$username = 'Pritam';
	ob_start();
	require 'templates/welcome.php';
	$data = ob_get_clean();

	//$mail->isSendmail();
	$mail->setFrom('pratsocarseldine@gmail.com', 'Pratso Carseldine');
	$mail->addReplyTo('pratsocarseldine@gmail.com', 'Pratso Carseldine');
	$mail->addAddress('prit1605@gmail.com', 'Pritam Bohra');
	$mail->Subject = 'PHPMailer test';
	$mail->msgHTML($data);
	$mail->addAttachment('images/screenshot.png');
	$mail->AltBody = 'This is a plain-text message body';


	$test = $mail->send();
	echo $test, '<br />';
	if (!$test) {
	    echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
	    echo "Message sent!";
	}


?>