<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
//penulisan array dapat dibuat seperti berikut
$nama[] = "Reghi";
$nama[] = "Josua";
$nama[] = "Abel";
echo $nama[1]. $nama[2]. $nama[0];
echo "<br>";
// menghitung jumlah elemen array
$jum_array = count($nama);
echo "jumlah elemen array =". $jum_array;
?>
</body>
</html>