<?php
	//include "flag.php";
	if (isset($_GET['dev'])) {
		echo htmlentities(highlight_string(file_get_contents(__FILE__)));
		die();
	}
?>
<center>
<form method="GET">
<table>
	<tr><td colspan="2"><center><b>Login</b></center></td></tr>
	<tr><td>Nama</td> <td><input type="type" name="name" placeholder="Password kesatu"></td></tr>
	<tr><td>Password</td> <td><input type="type" name="password" placeholder="Password kedua"></td></tr>
	<tr><td colspan="2"><button>Test</button></td></tr>
</table>
</form>
<!-- ?dev to debug mode -->
<?php
if (isset($_GET['name']) and isset($_GET['password'])) {
    $name = $_GET['name'];
    $password = $_GET['password'];
	
	if($name == $password) {
		echo 'Password tidak boleh sama dengan nama';
	}
	else if (sha1($name) === sha1($password)) {
		die('Flag: Mantul Gan!');
	}
	else {
		print 'Password salah!';
	}
}
?>
</center>
