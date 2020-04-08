<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  	<style>
		.botao {
			padding:4px;
			width:80px;
			border-top-width: 2px;
			border-right-width: 2px;
			border-bottom-width: 2px;
			border-left-width: 2px;
			border-bottom-style: solid;
			border-top-color: #848484;
			border-right-color: #848484;
			border-bottom-color: #848484;
			border-left-color: #848484;
			color: #FFFFFF;
			position: relative;
			top: 10px;
			margin-left: 20px;
			background-color: #273747;
		}
    </style>
</head>
<body>
<div>
	<form method="get" action="02-parte2.php">
		<?php
		$c = 1;
		while ($c <= 5) {
			echo "Valor $c: <input type='number' name='v$c'  max='100' min='0' value='0'/><br/>";
			$c ++;
		}
		?>
   <input type="submit" value="Enviar" class="botao"/>
	</form>
</div>
</body>
</html>
 