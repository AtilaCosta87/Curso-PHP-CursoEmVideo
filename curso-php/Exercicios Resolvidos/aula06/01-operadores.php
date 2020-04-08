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
			$preco = $_GET["p"];
			echo "O preço do produto é R$ ".number_format($preco, 2);
			$preco += ($preco * 10) / 100;
			echo "<br/>Pagando a prazo você terá 10% de aumento e o produto sairá por R$ ".number_format($preco, 2);
			$preco -= ($preco * 10) / 100;
			echo "<br/>Pagando a vista você terá 10% de desconto e o produto sairá por R$ ".number_format($preco, 2);
		?>
	</div>
	</body>
</html>