<?php

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, 'http://localhost/php_essentials/api/curl_server.php');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, [
		'text' => 'My name is Pritam',
	]);

	$result = curl_exec($ch);
	$response = json_decode($result);

	if (curl_getinfo($ch)['http_code'] !== 200) {
		echo $response->data->error;
		die();
	}

	echo 'Reverse of \'',  $response->data->sent_string, '\' is <strong>', $response->data->reversed_string, '</strong>';
?>