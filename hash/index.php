<?php

	// crypt gives same password always as the salt remains same
	echo crypt('mynameispritam', 'salt'), '<br />';

	$hash = password_hash('mynameispritam', PASSWORD_DEFAULT, [
		'cost' => 15,
	]);

	var_dump(password_get_info($hash));

	$password = 'mynameispritam';
	$db_hash = '$2y$15$kaxgdsAO55.NDSI8/OJcLexhSM7NmhyLPIDUbL6iFVKEklmSTqSnO';


	if (password_verify($password, $db_hash)) {
		if (password_needs_rehash($db_hash, PASSWORD_DEFAULT)) {
			echo 'Password needs rehash', '<br />';
			$db_hash = password_hash($password, PASSWORD_DEFAULT);
			echo 'New password hash is :', $db_hash, '<br />';
		}
	}
?>