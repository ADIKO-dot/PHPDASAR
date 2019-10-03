<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LOFFING</title>
	<style>
		.warnabaris {
			background-color: silver;
		}
	</style>
</head>
<body>
	<table border="10" cellpadding="5"	cellspacing="0">
	<?php for ($i=0; $i < 30; $i++) : ?>
		<?php if ($i % 2 == 1): ?>
		<tr class="warnabaris">
		<?php else :?>
		<tr>
			<?php endif; ?>
			<?php for ($j=0; $j < 10; $j++) : ?>
			<td><?php echo "$i,$j"; ?></td>
			<?php endfor; ?>
		</tr>
	<?php endfor; ?>
	</table>
</body>
</html>