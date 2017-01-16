<?php

	$users = json_decode(file_get_contents('http://localhost/php_essentials/json/encoding.php'));

	foreach ($users as $user) {
		echo 'User <strong>', $user->username, '</strong> is ', $user->active? 'active':'inactive', '<br>';
	}

?>