<?php

	header('Content-Type: application/json');

	// This API accepts only post request
	if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
		return ;
	}

	if (!isset($_POST['text'])) {
		http_response_code(400);

		$response = [
			'data' => [
				'error' => 'Please provide any text',
				'error_code' => 1000,
			],
		];

		echo json_encode($response);
		die();
	}

	http_response_code(200);

	$reversedString = strrev($_POST['text']);
	$response = [
		'data' => [
			'sent_string' => $_POST['text'],
			'reversed_string' => $reversedString,
		],
	];

	echo json_encode($response);
?>