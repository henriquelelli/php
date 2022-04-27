<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Manipulando Datas</title>
</head>
<body>

		<?php

			/*
			echo date('d/m/Y H:i:s');
			echo '</br></br>';
			echo date_default_timezone_get();
			echo '</br></br>';
			date_default_timezone_set('America/Sao_Paulo');
			echo date_default_timezone_get();
			echo '</br></br>';
			echo date('d/m/Y H:i:s');
			*/

			$data_inicial = '2022-01-14';
			$data_final = '2022-06-05';

			//timestamp
			//01/01/1970

			$time_inicial = strtotime($data_inicial);
			echo $data_inicial . ' - ' . $time_inicial;
			$time_final = strtotime($data_final);
			echo '</br></br>';
			echo $data_final . ' - ' . $time_final;
			$diferenca_times = $time_final - $time_inicial;
			$diferenca_datas = floor($diferenca_times/(24*60*60));
			echo '</br></br>';
			echo "A diferença em segundos entre as datas é '$diferenca_times'. Equivalente a '$diferenca_datas' dias";


		?>

</body>
</html>