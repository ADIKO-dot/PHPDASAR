<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>POST</title>
</head>
<?php if (isset($_POST["submit"])): ?>
<h1>SELAMAT DATANG, <?= $_POST["nama"]; ?></h1>	
<?php endif ?>


<body>
	<form method="post">
	<h1>Masukkan Nama : 
	<input type="text" name="nama" id="nama">
	<br>
	<button type="submit" name="submit" id="submit">Kirim!!</button>
	</h1>
	</form>
</body>
</html>