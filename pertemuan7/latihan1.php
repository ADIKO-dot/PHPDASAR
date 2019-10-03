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
 	<title>KACANG</title>
 </head>
 <body>
 	<h1>DAFTAR HARGA PRODUK KACANG</h1>
 	<ul>
 		<?php foreach ($kacang as $produk) :?>
	<li>
		<a href="latihan2.php?produk=<?php echo $produk["produk"]; ?>&berat=<?php echo $produk ["berat"] ?>&tahan=<?php echo $produk["tahan"] ?>&rasa=<?php echo $produk ["rasa"] ?>&gambar=<?php echo $produk ["gambar"] ?>"><?php echo $produk ["produk"]; ?></a>
	</li>

 		<?php endforeach; ?>
 	</ul>
 </body>
 </html>