<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array Multidimensional</title>
</head>
<body>

	<?php

	$lista_coisas = [];
	$lista_coisas['frutas'] = [1=>'Banana','Maçã', 'Morango', 'Uva'];
	$lista_coisas['pessoas'] = [1=>'João','José','Maria' ];

	echo '<pre>';
		print_r ($lista_coisas);
		echo '<hr>';
		print_r ($lista_coisas['frutas'][3]);
		echo '<br>';
		print_r ($lista_coisas['pessoas'][2]);
	echo '</pre>';
	

	?>

</body>
</html>