<!DOCTYPE html>
<html>
<body>
<?php
	$name = ['faiz', 'faiz', 'kayyis', 'kayy'];
	array_unshift($name, 'muhammad', 'is');
	foreach($name as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>