<!DOCTYPE html>
<html>
<head>
	<title>Administrator website</title>
</head>
<body>
	<h1>Backend website</h1>
	<?php 
		if (isset($_SESSION['login'])) {
			echo "ok";
		} else {
			header('Location: index.php');
		}
	?>
</body>
</html>