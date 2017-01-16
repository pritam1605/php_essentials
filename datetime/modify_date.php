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
	$newDate = clone $date;
	echo 'Current date :', $date->format('dS M Y H:i:s A'), '<br />';
	// Adding 10 days, 4 hours and 10 minutes
	$days = 10;
	$hours = 4;
	$minutes = 10;
	$newDate->add(new DateInterval('P10DT4H10M'));
	//$date->add(new DateInterval('P' . $days . 'DT'  . $hours . 'H' . $minutes .'M'));
	echo 'Modified date :', $newDate->format('dS M Y H:i:s A'), '<br />';

	// Using modify function
	$date = new DateTime();

	$date->setDate(1989, 05, 16);
	$newDate = clone $date;
	echo 'Current date: ', $date->format('dS M Y'), '<br >';
	$newDate->modify('+12 months');
	echo 'Modified date: ', $newDate->format('dS M Y'), '<br >';




?>