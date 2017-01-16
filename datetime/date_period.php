<?php

	$startTime = new DateTime();
	$startTime->setTime(12, 0, 0);

	$endTime = clone $startTime;
	$endTime->setTime(22, 0, 0);

	$timeInterval = new DateInterval('PT30M');

	$dateRange = new DatePeriod($startTime, $timeInterval, $endTime);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Date Period</title>
	</head>
	<body>
		<form>
			<label for="date_range">Selete Delivery Time: </label>
			<select name="date_range" id="date_range">
				<?php foreach ($dateRange as $date): ?>
					<option value="<?php echo $date->format('H:i'); ?>"><?php echo $date->format('H:i') ?></option>
				<?php endforeach; ?>
			</select>
		</form>
	</body>
</html>