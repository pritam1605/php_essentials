<?php

	require '../vendor/autoload.php';

	$client = new \GuzzleHttp\Client();

	$currencies = require 'currency_type.php';

	if (empty($_GET['from']) || empty($_GET['to']) || empty($_GET['value'])) {
		die('Please provide all details');
	}

	if (!is_numeric($_GET['value'])) {
		die('Please provide numeric values');
	}

	if ($_GET['to'] == $_GET['from']) {
		die('Please choose different to and from unit');
	}

	if (!in_array($_GET['to'], $currencies) || !in_array($_GET['from'], $currencies)) {
		die('Improper to or from value provided');
	}

	try {
		$response = $client->request('GET', 'http://api.fixer.io/latefsdst', [
			'query' => [
				'base' => $_GET['from'],
				'symbols' => $_GET['to'],
			]
		]);
	} catch (\Exception $e) {
		echo $e->getMessage();
		return;
	}

	$response = json_decode($response->getBody());
	$convertedValue = number_format((float) $_GET['value'] * $response->rates->{$_GET['to']}, 2);

	echo "{$_GET['value']} {$_GET['from']} is {$convertedValue} {$_GET['to']}";

?>