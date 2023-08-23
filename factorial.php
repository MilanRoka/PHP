<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Factorial</title>
</head>

<body>
	<!-- taking input from user -->
	<form method="post">
		Enter the number:
		<input type="number" name="number" placeholder="Your number here..">
		<input type="submit" value="Submit" />
	</form>

	<?php
	// code to find factorial
	if ($_POST) {
		$fact = 1;
		$number = $_POST['number'];
		for ($i = 1; $i <= $number; $i++) {
			$fact = $fact * $i;
		}
		echo $fact;
	}
	?>
</body>

</html>