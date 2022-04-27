<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Atividade - Saiba se você pode doar sangue.</title>
</head>
<body>

	<h1>Saiba se você pode ou não doar sangue</h1>



	<?php

		$idade = 36;
		$peso = 103;
		$requisitos = true;

		$requisitos = $idade >= 16 && $idade<=69 && $peso >=50 ? 'atende aos requisitos' : 'não atende aos requisitos';

	?>

	<p>Idade informada <?= $idade ?></p>
	<p>Peso informado <?= $peso ?></p>
	<p>Considerando os dados do doador, <?= $requisitos ?>.</p>


</body>
</html>