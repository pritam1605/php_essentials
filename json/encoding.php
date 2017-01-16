<?php

	header('Content-Type: application/json');

	$db_handler = new PDO('mysql:host=localhost;dbname=firstapp', 'root', 'pritam');

	$users = $db_handler->query('SELECT * FROM user')->fetchAll(PDO::FETCH_OBJ);

	echo json_encode($users);
?>