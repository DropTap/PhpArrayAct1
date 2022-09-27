<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHPArraysAct1</title>
</head>
<body>

<h1>PHPArraysAct1</h1>
<br>
<?php
	$weatherConditions = array();
	$weatherConditions = array("rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind");

	print("We've seen all kinds of weather this month. At the 
beginning of the month, we had $weatherConditions[5] and  $weatherConditions[6]. Then 
came $weatherConditions[1] with a few $weatherConditions[2] and some $weatherConditions[0]. At least 
we didn't get any $weatherConditions[3] or $weatherConditions[4].")
?>

</body>
</html>