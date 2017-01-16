<?php

	require '../vendor/autoload.php';

	$client = new \GuzzleHttp\Client();

	$response = $client->request('GET', 'http://api.fixer.io/latest');
	$response = json_decode($response->getBody(), true);
	$currency_types = array_keys($response['rates']);
	$currency_types[] = $response['base'];

	sort($currency_types);

	return $currency_types;
?>