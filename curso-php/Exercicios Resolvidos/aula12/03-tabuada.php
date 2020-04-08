<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $num = $_GET["tabuada"];
		$c = 1;
		echo "Mostrando a tabuada de $num: <br/>";
		do {
			$res = $num * $c;
			echo "$num x $c = $res <br/>";
			$c ++;
		} while($c <= 10);
    ?>
	<br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
 