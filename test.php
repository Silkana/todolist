<!DOCTYPE html>
<html>
		<head>
			<title>hohoho</title>
		<meta charset="utf-8" />
		
	</head>

	<body>
		<form action="test.php?id=3&ht=5">
			Firstname : <input type="text" name="firstname" />
			<button type="submit">OK</button>
		</form>
	</body>



</html>

<?php

var_dump($_POST);
var_dump($_GET);
echo $_GET['firstname'];
?>