<?php
	include 'flag.php';
	if (isset($_GET['dev'])) {
		echo htmlentities(highlight_string(file_get_contents(__FILE__)));
		die();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistem Catatan Penyelidikan</title>
</head>
<body>
	<form method="POST">
		<center>
			<p><b>PERHATIAN!</b><br>Ini adalah sistem yang sangat aman milik BADAN INTELEJEN dan untuk menjaga keamanan PIN selalu berganti setiap detiknya.</p>
			<label>PIN : </label> <input type="password" name="password" /> 
			<button>Login</button>
		</center>
		<!-- Sistem ini masih tahap development oleh tim IT BADAN INTELEJEN -->
		<!-- Untuk debug source code dapat menggunakan: -->
		<!-- ?dev -->
	</form></br>
<center>
<?php
	$VerySaltPassword = md5(rand(100, 999)."_SaLT_".rand(100, 999));
	if(isset($_POST['password'])) {
		if(strcmp($VerySaltPassword, $_POST['password']) == 0){
			echo "<b>Berhasil!</b><br>$flag";
		}
		else{
			echo "<b>PIN Salah!</b><br>PIN yang seharusnya kamu masukkan tadi adalah:<br>$VerySaltPassword";
		}
	}
?>
</center>
</body>
</html>
