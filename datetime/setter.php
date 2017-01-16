<?php

	/*
		createFromFormat()
		getLastErrors()
		format()
		modify()
		add()
		sub()
		getTimezone()
		setTimezone()
		getOffset()
		setTime()
		setDate()
		setISODate()
		setTimestamp()
		getTimestamp()
		diff()
	*/

	$date = new DateTime();

	// Set Date
	// setDate ( int $year , int $month , int $day )
	$date->setDate(1989, 05, 16);
	echo $date->format('dS M Y'), '<br />';

	// Set Time
	// setTime ( int $hour , int $minute [, int $second = 0 ] )
	$date->setTime(20, 00, 00);
	echo $date->format('D dS M, Y h:i:s A'), '<br />';

	// Set Timestamp
	// setTimestamp ( int $unixtimestamp )
	$date->setTimestamp(611351135);
	echo $date->format('D dS M, Y h:i:s A'), '<br />';

	// createFromFormat
	// createFromFormat ( string $format , string $time [, DateTimeZone $timezone ] )
	$date_string = '2016-07-30 12:00:00';
	$date = DateTime::createFromFormat('Y-m-d H:i:s', $date_string);//, new DateTimeZone('Europe/London'));
	echo $date->format('D dS M, Y h:i:s A'), '<br />';

?>