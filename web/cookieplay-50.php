<?php
	$flag = "FLAG{Random_String}";

	setcookie("role", "user");
	if($_COOKIE["role"] == "admin") {
    		echo "Welcome back admin! <br>".PHP_EOL;
    		echo "$flag".PHP_EOL;
	}
	else {
		echo "Hello user!";
	}
?>
