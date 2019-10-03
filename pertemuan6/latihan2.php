<?php 
$kacang = [
	[ "produk" => "karpi", "berat" => "2.000 gram", "tahan" => " 2hari", "rasa" => "originals", "gambar" => "kapri.jpg"],
	[ "produk" => "koro", "berat" => "2.000 gram", "tahan" => " 2hari", "rasa" => "originals", "gambar" => "koro.jpg"],
	[ "produk" => "bumbu", "berat" => "2.000 gram", "tahan" => " 2hari", "rasa" => "originals", "gambar" => "bumbu.jpg"],
	[ "produk" => "samcam rejeki", "berat" => "2.000 gram", "tahan" => " 2hari", "rasa" => "originals", "gambar" => "samcam.jpg"],
	[ "produk" => "pia dhian", "berat" => "2.000 gram", "tahan" => " 2hari", "rasa" => "originals", "gambar" => "dhian.jpg"],
	[ "produk" => "disco", "berat" => "2.000 gram", "tahan" => " 2hari", "rasa" => "originals", "gambar" => "disco.jpg"],
	[ "produk" => "singkong", "berat" => "2.000 gram", "tahan" => " 2hari", "rasa" => "originals", "gambar" => "singkong.jpg"],
	[ "produk" => "rasa lokal", "berat" => "2.000 gram", "tahan" => " 2hari", "rasa" => "originals", "gambar" => "lokal.jpg"],
	[ "produk" => "pia eiji", "berat" => "2.000 gram", "tahan" => " 2hari", "rasa" => "originals", "gambar" => "eiji.jpg"],
	[ "produk" => "pia legong", "berat" => "2.000 gram", "tahan" => " 2hari", "rasa" => "originals", "gambar" => "legong.jpg"]];





 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>latihan array associative</title>
</head>
<body>
	<ul>
	<h1>DAFTAR PRODUK KACANG</h1>
	<div>
<?php  foreach ($kacang as $produk) :?>
<img src="img/<?php echo $produk["gambar"]?>">
		<li>
  <h2>Nama Item :<?php echo $produk ["produk"]; ?></h2>
		</li>
		<li>
 <h2>Berat Kemasan :<?php echo $produk ["berat"]; ?></h2>
		</li>
		<li>
 <h2>Expired Data : <?php echo $produk ["tahan"]; ?></h2>
		</li>
		<li>
 <h2>Varian : <?php echo $produk ["rasa"]; ?></h2>
		</li>
		<br>
	
	<?php endforeach; ?>
	</div>
 </ul>
</body>
</html>
