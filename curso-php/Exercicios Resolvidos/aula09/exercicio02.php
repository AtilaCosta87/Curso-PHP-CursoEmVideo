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
        $a = isset ($_GET["ano"]) ? $_GET["ano"] : 1900;
		$i = date("Y") - $a;
		echo "Você nasceu em $a e sua idade é $i anos.<br/>";
		if ($i < 16) {
			$tipovoto = "não vota";
		}
		elseif (($i >= 16 && $i < 18) || ($i > 65)){
				$tipovoto = "voto opcional";
		}
		else {
				$tipovoto = "voto obrigatório";
		}
		echo "Para essa idade, $tipovoto.";
    ?>
	<a href="exercicio02.html"/><br/><h2>voltar</h2><a/>
</div>
</body>
</html>
 