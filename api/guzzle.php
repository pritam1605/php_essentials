<?php

	require 'vendor/autoload.php';

	$client = new \GuzzleHttp\Client();

	try {
		$response = $client->request('POST', 'http://localhost/php_essentials/api/curl_server.php', [
			'form_params' => [
				'text' => 'My name is Pritam',
			]
		]);

	} catch (\GuzzleHttp\Exception\RequestException $e) {
		echo json_decode($e->getResponse()->getBody())->data->error;
		return;

	}

	$response = json_decode($response->getBody());
	echo 'Reverse of \'',  $response->data->sent_string, '\' is <strong>', $response->data->reversed_string, '</strong>';

?>