<!DOCTYPE html>
<html>
<body>
<?php
	$name = ['faiz', 'faiz', 'kayyis', 'kayyis'];
	array_push($name, 'muhammad');
	foreach($name as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>