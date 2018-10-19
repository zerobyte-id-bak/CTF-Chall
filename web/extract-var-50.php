<?php
error_reporting(0);
session_start();
//include('flag.php');

if (isset($_GET['dev'])) {
	echo htmlentities(highlight_string(file_get_contents(__FILE__)));
	die();
}

if (isset($_POST['submit'])) {
	extract($_POST);
	if ($password == $supersecret) {
		echo $flag;
	}
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Ekstrak Web</title>
	</head>
	<body>
		<form method="post">
			<input type="text" name="password" placeholder="Password...">
			<input type="submit" name="submit" value="Login">
		</form>
		<!-- ?dev -->
	</body>
</html>
