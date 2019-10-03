<?php 
if (!isset($_GET["produk"])||
!isset($_GET["berat"])||
	!isset($_GET["tahan"])||
		!isset($_GET["gambar"])||
			!isset($_GET["rasa"]))
{
	header("Location:	latihan1.php");
	exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>latihan 2</title>
	<style>
		.warna	{
			color: blue;
			background-color: silver;
			

		}
	</style>
</head>
<body>
	<h1> DESKRIPSI <?php echo $_GET ["produk"]; ?></h1>
	<ul>
		<li><img src="img/<?php echo $_GET["gambar"] ?>">
		<li><?php echo $_GET ["produk"]; ?></li>
		<li><?php echo $_GET ["berat"]; ?></li>
		<li><?php echo $_GET ["tahan"]; ?></li>
		<li><?php echo $_GET ["rasa"]; ?></li>
	</ul>

	<a href="latihan1.php"><h1 class="warna">Kembali ke latihan satu</h1></a>
</body>
</html>