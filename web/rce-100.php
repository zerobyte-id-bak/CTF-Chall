<?php
	if (isset($_GET['dev'])) {
		echo htmlentities(highlight_string(file_get_contents(__FILE__)));
		die();
	}
?>
<center>
<form method="POST">
	MD5 Hash Tool :
	<input type="type" name="md5" placeholder=""> 
	<button>DECRYPT</button>
	<!-- ?dev to debug mode -->
</form>

<?php 
if (isset($_POST['md5'])) { 
	system("echo \"<b>MD5 :</b> \";echo -n \"".$_POST['md5']."\" | md5sum");
}
?>
</center>
