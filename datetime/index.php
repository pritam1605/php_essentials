<?php

	$date = new DateTime();
	// var_dump($date->getTimeZone());
	var_dump(get_class_methods('DateTime'));
	var_dump(get_class_methods('DateTimeZone'));

	// $timezone = $date->getTimeZone();
	// var_dump($timezone->getLocation());
	echo 'Current Date-Time : ', $date->format('D dS M, Y h:i:s A'), '<br />';
	echo 'Current Timestamp : ', $date->getTimestamp(), '<br />';

	$timezone = $date->getTimeZone();
	echo 'Currnet timezone : ', $timezone->getName(), '<br />';
?>