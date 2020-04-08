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
		}
    </style>
</head>
<body>
<div>
    <?php
        $est = isset($_GET ["est"])?$_GET ["est"]:0;
        switch ($est) {
            case "sul":
                $reg = "Região Sul";
                break;
            case "sud":
                $reg = "Região Sudeste";
                break;
            case "ne":
                $reg = "Região Nordeste";
                break;
            case "no":
                $reg = "Região Norte";
                break;
            case "co":
                $reg = "Região Centro Oeste";
		}
	echo "Você está na <span class='foco'>$reg</span>";
    ?>
	<br/><br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
 