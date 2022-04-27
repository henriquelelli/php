<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array</title>
</head>
<body>

		<?php

			//sequenciais = numéricos
			/*
			$lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva', 'abacate'];

			$lista_frutas[] = 'Abacaxi';

			
			echo '<pre>';
				var_dump($lista_frutas);
			echo '</pre>';
			echo '<hr/>';
			echo '<pre>';
				print_r($lista_frutas);
			echo '</pre>';
			

			echo $lista_frutas[2];
			*/

			//associativos

			$lista_frutas = ['a'=>'Banana', 'b'=>'Maçã', 'c'=>'Morango','d'=> 'Uva', 'e' => 'abacate'];

			echo '<pre>';
				var_dump($lista_frutas);
			echo '</pre>';
			echo '<hr/>';
			echo '<pre>';
				print_r($lista_frutas);
			echo '</pre>';
			

			echo $lista_frutas['b'];

		?>

</body>
</html>