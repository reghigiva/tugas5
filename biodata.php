<!DOCTYPE html>
<html>
<head>
	<title>BIODATA</title>
	<style type="text/css">
		body {background-color: #993366}
		h1{font-family: fantasy; text-align: center;}
	</style>
</head>
<body>
	<form method="POST" action="postAct_.php">
		<h1>BIODATA</h1>
		<h3 align="center">isi data dibawah ini</h3>
		<table width="400" align="center" cellpadding="2" cellspacing="3">
			<tr>
				<td width="130">Nama Lengkap</td> 
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="130">NPM</td> 
				<td><input type="text" name="npm"></td>
			</tr>
			<tr>
				<td width="130">Tempat, Tanggal Lahir</td> 
				<td><input type="text" name="ttl"></td>
			</tr>
			<td width="130">Alamat Rumah</td> 
				<td><input type="text" name="alamat"></td>
		</table>
		<p align="center">
			<input type="submit" name="btnLogin" value="masuk">
			<input type="reset" name="reset" value="hapus">
	</form>
</body>
</html>