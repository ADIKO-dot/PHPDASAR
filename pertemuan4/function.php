<?php 
function salam ($waktu, $nama = "admin"){
	return " Selamat $waktu, $nama";
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>FUNCTION</title>
</head>
<body>
	<h1> <?php echo salam ("DATANG","PUTUADI"); ?></h1>

</body>
</html>

