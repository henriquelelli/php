<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Hello World!</title>
		</head>
		<body>

			<?php 

				// e-comerce

				$cartao_loja = true;
				$valor_compra = 100;
				$valor_frete = 50;
				$desconto_frete = false;

				/* trecho comentado para verificação dos ternários encadeados (linha65)
				if ($cartao_loja == true || $valor_compra >= 100) {
					$valor_frete = 0;
					$desconto_frete = true;
				}
				*/
				

			?>

			<h1>Detalhes do pedido</h1>

			<p>Possui cartão da loja?</p>
				<?= $cartao_loja ? 'Sim' : 'Não'; ?>

				<?php

					/* trecho suspenso para verificação do ternário acima
					if ($cartao_loja) {
						echo 'Sim';
					} else {
						echo 'Não';
					} */
				?>
			<br><br>

			<p>Valor da compra: <?= $valor_compra ?></p>
			<br>

			<p>Recebeu desconto no frete?</p>
				<?php

					$desconto_frete = $cartao_loja && $valor_compra >= 100 ? 'Sim' : 'Não';
					echo $desconto_frete

					/* trecho suspenso para verificação do ternário
					if ($desconto_frete) {
						echo 'Sim';
					} else {
						echo 'Não';
					}
					*/
				?>
			<br><br>



			<?php

				$teste0 = 0
				$teste1 = 1
				

				$teste0 = ($teste1 > 0) ? 'Ok1' : ($teste1 = 0)

				$valor_frete_aux = ($cartao_loja && $valor_compra >= 400) ? 0 : ($cartao_loja && $valor_compra >= 300) ? 10 : ($cartao_loja && $valor_compra >= 100) ? 25 : $valor_frete;

				$valor_frete = $valor_frete_aux;

			?>

			<p>Valor do frete: <?= $valor_frete ?></p>

		</body>


	</html>