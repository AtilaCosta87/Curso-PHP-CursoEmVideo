<DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="_css/estilo.css"/>
		<title>Curso PHP - CursoemVideo.com</title>
	</head>
	<body>
	<div>
		<?php
			$a = 3;
			$b = "3";
			$r = ($a == $b) ? "SIM" : "NÃO" ;
			echo "As variaveis A e B são iguais? $r";
			$r = ($a === $b) ? "SIM" : "NÃO" ;
			echo "<br/>As variaveis A e B são identicas? $r";
		?>
	</div>
	</body>
</html>