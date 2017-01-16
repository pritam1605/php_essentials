<?php

	$currencies = require 'currency_type.php';

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Currency Convertor</title>
	</head>
	<body>
		<form action="convert.php" method="get">
			<label for="value">Enter the value: </label>
			<input type="text" name="value" id="value">

			<label for="from">From: </label>
			<select name="from" id="from">
				<?php foreach ($currencies as $currency): ?>
					<option value="<?php echo $currency; ?>"><?php echo $currency; ?></option>
				<?php endforeach; ?>
			</select>

			<label for="to">To: </label>
			<select name="to" id="to">
				<?php foreach ($currencies as $currency): ?>
					<option value="<?php echo $currency; ?>"><?php echo $currency; ?></option>
				<?php endforeach; ?>
			</select>

			<button type="submit">Convert</button>
		</form>
	</body>
</html>