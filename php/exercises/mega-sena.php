<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Mega-Sena</title>
	</head>
	<body>

		<?php 

		echo 'Os números sorteados na Mega-Sena são: <br/>';
		$resultado =[];
		$contador = count($resultado);
		
		while ($contador<6) {
			$aux = rand(1,60);
			$existe = in_array($aux, $resultado);

			if ($existe) {
				continue;
			}
			$resultado[] = $aux;
			$contador++;
		}	
			
		
		echo '<pre>';
		print_r ($resultado);
		echo '<pre/>';
		
		?>


	</body>
</html>