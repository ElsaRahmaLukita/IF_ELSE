<html>
<head>
	<title>Php Nasi Goreng</title>
</head>
<body>
<h1>Perulangan PHP (IF/ELSE)</h1>
<form method="post">
Uang kita = <input type="text" name="uang" required><br>
Tanggungan Hutang = <input type="text" name="tanggungan" required><br>
<?php
$uang=@$_POST["uang"]; // untuk mendapatkan nilai dari text field dengan name="uang" 
$tanggungan=@$_POST["tanggungan"]; // sama seperti diatas tapi "harga"
if (($uang && $tanggungan) == "") { // Jika uang DAN harga SAMA DENGAN kosong maka tampil dibawah ini.
	echo "<br/> Silahkan Isi Uang dan Tanggungan Anda";
} elseif ($uang < $tanggungan) { // Jika uang kurang dari harga.
	$kurang = $tanggungan - $uang; 
	echo " <br/>Uang Anda Kurang <b>Rp.$kurang</b>!";
} else { 
	$lebih = $uang - $tanggungan; 
	echo " <br/>Uang Anda Lebihan <b>Rp.$lebih</b>";
}
?>
<br><input type="submit" value="Proses">
</form>
</body>
</html>