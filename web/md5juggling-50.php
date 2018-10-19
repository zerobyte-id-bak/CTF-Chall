<?php
	//include "flag.php";
	if (isset($_GET['dev'])) {
		echo htmlentities(highlight_string(file_get_contents(__FILE__)));
		die();
	}
?>
<center>
<form method="POST">
	<table>
	<tr><td colspan="2"><center><b>MD5 Game</b> - Tebak Password :</center></td></tr>
	<tr><td>Password 1</td> <td><input type="type" name="pass1" placeholder="Password kesatu"></td></tr>
	<tr><td>Password 2</td> <td><input type="type" name="pass2" placeholder="Password kedua"></td></tr>
	<tr><td colspan="2"><button>Test</button></td></tr>
	</table>
	<!-- ?dev to debug mode -->
</form>

<?php
if (isset($_POST['pass1'])) {
	if($_POST['pass1'] == $_POST['pass2']) {
		echo "Password tidak boleh sama!";
	}
	else if(md5($_POST['pass1']) == md5($_POST['pass2'])) {
		echo "Mantul (Mantap Betul)";
		//echo "FLAG: $flag";
	}
	else {
		echo "Salah!";
	}
}
?>
</center>
