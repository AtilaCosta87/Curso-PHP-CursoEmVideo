<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style>
	.botao{
		padding:8px;
		width:60px;
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
		margin-left: 20px;
		background-color: #273747;
		position: relative;
		top: 20px;
		}
	span {
		color: #DF0101;
	}	
  </style>
</head>
<body>
<div>
    <?php
        $nota1 = ($_GET["n1"]) ? $_GET["n1"] : 0;
		$nota2 = ($_GET["n2"]) ? $_GET["n2"] : 0;
		$media = ($nota1 + $nota2) / 2;
		$n1 = number_format($nota1,1);
		$n2 = number_format($nota2,1);
		$med = number_format($media,1);
		echo "A média entre <span>$n1</span> e <span>$n2</span> é <span>$med</span> <br/>";
		if ($media < 5) {
			$situacao = "REPROVADO";
		}
		elseif ($media >= 5 && $media < 7){
			$situacao = "RECUPERAÇÃO";
		}
		else {
			$situacao = "APROVADO";
		}
		echo "Situação do aluno: <span>$situacao</span>";
    ?>
	<br/><br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
 