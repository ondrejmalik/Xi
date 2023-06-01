<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Test Form</title>
</head>
<body>
	<?php 
		session_start();
		if(isset($_SESSION['user'])){
			echo "Logged as " . $_SESSION['user'];
		} else {
			echo "You are not logged in";
		}
	?>
</body>
</html>