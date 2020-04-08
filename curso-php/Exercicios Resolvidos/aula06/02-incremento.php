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
		/* exercicio para demostrar o uso de
		operadores de incremento e decremento*/
			$atual = $_GET["aa"]; // essa linha vai pegar o ano na URL
			echo "O ano atual é $atual e o ano anterior é ".--$atual;
		?>
	</div>
	</body>
</html>