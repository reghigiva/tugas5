<?php
if (empty($_POST['nama'])&&empty($_POST['email'])) {
	header("Location:error.php");
} else {
	echo "<center>Nama :".$_POST['nama']."</center><br>";
	echo "<center>Email :".$_POST['email']."</center><br>";
	include 'extra.php';
}
?>