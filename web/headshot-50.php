<?php
	$flag = "FLAG{_Random_String_}";
	if($_SERVER['REQUEST_METHOD'] == 'HEAD') {
		header("FLAG: $flag");
	}
	header("Message: zuhahahaxD-You-Never-Find-Anything-In-Here!");
	header("Message2: Please-Go-Deeper!");
	echo "<h1> Shoot my head or die? </h1>".PHP_EOL;
?>
