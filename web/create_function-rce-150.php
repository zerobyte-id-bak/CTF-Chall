<?php
	if (isset($_GET['dev'])) {
		echo htmlentities(highlight_string(file_get_contents(__FILE__)));
		die();
	}
?>

<form method="POST">
	<textarea name="code" placeholder="echo 'Hello World!';" style="width:500px;height: 70px;"></textarea><br></br>
	<button>RUN</button>
	<!-- ?dev to debug mode -->
</form>

<?php 
if (isset($_POST['code'])) { 
	$fun_func = create_function('', $_POST['code']); 
	if ($_POST['code'] === "echo 'Hello World!';") { 
		$fun_func(); 
	}
	else {
		echo "<b>Wrong! Please input:</b><pre>   echo 'Hello World!';</pre>";
	}
}
?>
