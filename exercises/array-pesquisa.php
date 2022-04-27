<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Arrays</title>
</head>
<body>

	<?php

		/*
		in_array() => retorna true ou false se existe ou não.
		array_search() => retorna o índice do valor pesquisado.
		*/

		$lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

		echo '<pre>';
			print_r($lista_frutas);
		echo '</pre>';

		echo '<hr>';
		/*
		$existe = in_array('Morango', $lista_frutas);

		if ($existe) {
			echo 'O valor pesquisado existe.';
		} else {
			echo 'O valor pesquisado não existe';
		}
		*/


		if (array_search('Abacate', $lista_frutas) == null) {
			echo array_search('Abacate', $lista_frutas));
		} else {
			echo 'O valor pesquisado não existe';
		}

	?>


</body>
</html>