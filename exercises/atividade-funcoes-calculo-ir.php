<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cálculo de Imposto de Renda</title>
</head>
<body>

		<?php
			function calcularIRPF ($salario) {

				switch ($salario) {
					case ($salario<=1903.98):
						$imposto = 'isento';
						break;

					case ($salario>=1903.99 && $salario<=2826.65):
						$imposto =($salario-1903.99)*0.075;
						break;
					
					case ($salario>2826.65 && $salario<=3751.05):
						$imposto =(2826.65-1903.99)*0.075+($salario-2826.65)*0.15;
						break;

					case ($salario>3751.05 && $salario<=4664.68):
						$imposto =(2826.65-1903.99)*0.075+(3751.05-2826.65)*0.15+($salario-3751.05)*0.225;
						break;
					case ($salario>4664.68):
						$imposto =(2826.65-1903.99)*0.075+(3751.05-2826.65)*0.15+(4664.68-3751.05)*0.225+($salario-4664.68)*0.275;
						break;
					default:
						// code...
						break;
				}
				return $imposto;
			}
			echo calcularIRPF (10000)


		?>



</body>
</html>