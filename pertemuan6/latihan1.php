<!DOCTYPE html>
<html lang="en">
<style>
	.kotak {
		width: 30px;
		height: 30px;
		background-color: #BADA55;
		text-align: center;
		line-height: 30px;
		margin: 3px;
		float: left;
		transition: 1s;
	}
	.kotak:hover {
		transform: rotate(360deg);
		border-radius: 50%;

	}
</style>
<head>
	<meta charset="UTF-8">
	<title>ARRAY</title>
</head>
<body>
	<?php 
$angka = [21,25,46,35,1,66,46,6]

	 ?>
	<?php foreach ($angka as $a) : ?>
	 <div class="kotak"><?php echo $a; ?></div>
	<?php endforeach; ?>
</body>
</html>