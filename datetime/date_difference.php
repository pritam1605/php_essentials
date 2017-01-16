<?php

	$birthDate = (new DateTime())->setDate(1989, 05, 16)->setTime(20, 0, 0);

	$currentDate = new DateTime();

	$dateDifference = $birthDate->diff($currentDate, false);
	//var_dump($dateDifference);

	echo 'I was born on ', $birthDate->format('d-M-Y'), '<br />';
	echo 'Today is ', $currentDate->format('d-M-Y'), '<br />';
	echo 'I am ', $dateDifference->format("%y years %d days");




?>

  <!-- public 'y' => int 27
  public 'm' => int 7
  public 'd' => int 22
  public 'h' => int 4
  public 'i' => int 50
  public 's' => int 0
  public 'weekday' => int 0
  public 'weekday_behavior' => int 0
  public 'first_last_day_of' => int 0
  public 'invert' => int 0
  public 'days' => int 10098
  public 'special_type' => int 0
  public 'special_amount' => int 0
  public 'have_weekday_relative' => int 0
  public 'have_special_relative' => int 0 -->