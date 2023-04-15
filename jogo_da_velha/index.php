<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Jogo da Velha</title>
</head>
<body>
	<h1>Jogo da Velha</h1>
	<form method="post" action="jogo.php">
		<input type="hidden" name="estado" value="<?php echo $estado; ?>">
		<table border="1">
			<?php for ($i = 0; $i < 3; $i++) { ?>
				<tr>
					<?php for ($j = 0; $j < 3; $j++) { ?>
						<td>
							<input type="submit" name="posicao" value="<?php echo $i.$j; ?>"<?php if ($tabuleiro[$i][$j] != ' ') { echo ' disabled'; } ?>>
							<?php echo $tabuleiro[$i][$j]; ?>
						</td>
					<?php } ?>
				</tr>
			<?php } ?>
		</table>
	</form>
</body>
</html>