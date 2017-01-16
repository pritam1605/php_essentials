<?php

	echo 'time() ', time(), '<br />';
	echo 'microtime() ', microtime(true), '<br />';
	echo 'date() ', date('Y-m-d H:i:s'), '<br />';

	echo date('dS M Y', 1507616840), ' is a ', (checkdate(10, 10, 2017)? 'valid ' : 'invalid '), 'date', '<br />';
	echo '<br />';

	foreach (timezone_identifiers_list() as $timezone) {
		echo $timezone, '<br />';
	}

?>