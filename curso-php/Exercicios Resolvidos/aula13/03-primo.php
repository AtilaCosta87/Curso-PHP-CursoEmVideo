<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
      <style>
	  	h1 { 
			font: 20pt Arial; 
		}
	    h2 { 
			font: 18pt Arial; 
		}
    </style>
</head>
<body>
<div>
    <?php
        $n = isset($_GET["num"]) ? $_GET["num"] : 1;
		echo "<h1>Analisando o número $n ...</h1>";
		echo "Multiplos: ";
		$tot = 0;
		for ($c = 1; $c <= $n; $c++) {
			if ($n%$c == 0) {
				$tot ++;
				echo " $c ";
			}
		}
		echo "<p>Total de Multiplos: $tot</p>";
		echo "<h2>Resultado: $n <span class='foco'>";
		if ($tot == 2) {
			echo " É PRIMO! ";
		} else {
			echo " NÃO É PRIMO!";
		}
		echo "</span></h2>";
    ?>
	<br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
 