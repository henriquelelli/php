<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Manipulação de strings</title>
</head>
<body>

	<?php 

		$nome = 'Henrique Cesar Lelli';
		
		$lenght = strlen($nome);

		echo '</p>A função' . '"strlen" ' . "retorna o número de caracteres presentes em uma função, por exemplo, meu nome, Henrique Cesar Lelli, contém '$lenght' caracteres. <p/>";

		echo number_format(502.356784573459,3,',','');
		echo '</br>';
		echo round(502.356784573459,3);
		echo '</br></br>';
		rand(0,1000);
		echo '</br></br>';
		echo number_format((rand(0,1000))/1000,3,',','');
	?>

</body>
</html>