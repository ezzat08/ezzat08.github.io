<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Server Connection</title>
</head>
<body>
	<?php
		$connect = mysqli_connect("localhost", "root", "", "ORES");

		if (!$connect) {
			die('ERROR:'.mysqli_connect.error());
		}
		
	?>

</body>
</html>