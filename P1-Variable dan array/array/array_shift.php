<!DOCTYPE html>
<html>
<body>
<?php
	$name = ['faiz', 'faiz', 'kayyis', 'kayy'];
	array_shift($name);
	foreach($name as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>