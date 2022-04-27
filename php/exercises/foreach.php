<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Foreach</title>
	</head>
	<body>

		<?php 

			$funcionarios = [
				['nome' => 'João', 'salario' => 2500, 'nascimento' => '26/09/1985'],
				['nome' => 'Maria', 'salario' => 3000],
				[ 'nome' => 'Júlia','salario'=>2200 ]];

			echo '<pre>';
			print_r ($funcionarios);
			echo '<pre/>';
			

			foreach ($funcionarios as $idx => $funcionario) {
				echo '<hr/>';
				foreach ($funcionario as $idx2 => $valor) {
					echo "$idx2 - $valor <br/>";
				}
				echo '<hr/>';				
			}
			

		?>


	</body>
</html>