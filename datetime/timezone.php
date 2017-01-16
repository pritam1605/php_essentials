<?php

	//var_dump(DateTimeZone::listAbbreviations());
	$date = new DateTime();
	echo 'Time in New York is ', $date->format('dS M Y H:i:s A'), '<br />';

	$timeMumbai = new DateTime();
	$timeMumbai->setTimezone(new DateTimeZone('Asia/Kolkata'));
	echo 'Time in Mumbai is ', $timeMumbai->format('dS M Y H:i:s A'), '<br />';


	// Better approach
	$date = new DateTime('now', new DateTimeZone('Europe/London'));
	echo 'Time in London is ', $date->format('dS M Y H:i:s A'), '<br />';


	// Set a default timezone
	date_default_timezone_set('Asia/Kolkata');

	$date = new DateTime();
	var_dump($date->getTimeZone()->getName());



?>