<?php

	require 'vendor/autoload.php';

	$domain = 'sandbox3b8e2b05a2db48638add255c616e18e8.mailgun.org';

	$mailgun = new \Mailgun\Mailgun('key-bc95b2662017124e0b945b87859d9490');

	$mailgun->sendMessage($domain, [
		'from' => 'Site Admin <admin@learn.ln>',
		'to' => 'prit1605@gmail.com',
		'subject' => 'Testing Mailgun',
		'text' => 'This is a test mail sent from Mailgun',
		'html' => 'This is a test mail sent from <strong>Mailgun</strong>',
	], [
		'attachment' => [
			'images/screenshot.png',
		]
	]);
?>