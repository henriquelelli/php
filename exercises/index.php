<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Hello World!</title>
		</head>
		<body>

			<?php 

				$nome = 'Henrique';
				$idade = 36;
				$cor = 'azul';
				$hobby = 'magic the gathering';

				echo 'Olá ' .$nome. ' vi que sua cor preferida é ' .$cor. ', que você tem ' .$idade. ' anos de idade e gosta de ' .$hobby;

				echo '<br/>';

				echo "Olá $nome";
			?>

			<br><br><br>
			<?php
				$usuario_possui_cartao_loja = true;
				$valor_compra = 50;
				$valor_frete = 50;
				$valor_frete_aux = $usuario_possui_cartao_loja && $valor_compra >= 400 ? 0 : ($usuario_possui_cartao_loja && $valor_compra >= 300 ? 25 : ($usuario_possui_cartao_loja && $valor_compra >= 100 ? 35 : $valor_frete));
				echo $valor_frete_aux;
			?>
		</body>


	</html>