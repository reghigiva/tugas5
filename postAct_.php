<!DOCTYPE html>
<html>
<head>
	<title>BIODATA</title>
	<style type="text/css">
		body {background-color: #993366}
	</style>
</head>
<body>
<?php
	echo "<h2><center>Pastikan data di bawah benar</center></h2>";
	echo "<center><h3>Nama</h3>										".$_POST['nama']."</center><br>";
	echo "<center><h3>NPM</h3>										".$_POST['npm']."</center><br>";
	echo "<center><h3>Tempat, tanggal lahir</h3>					".$_POST['ttl']."</center><br>";
	echo "<center><h3>Alamat Rumah</h3>								".$_POST['alamat']."</center><br>";
?>
</body>
</html>