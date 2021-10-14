<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Losango</title>
	<link rel="stylesheet" type="text/css" href="../css/los.css">
    <link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
	<?php 
		if($_POST){
	    	$diagonalM = $_POST ['dM'];
	    	$diagm = $_POST['dm'];
			$resultado = ($diagonalM * $diagm) / 2;
		}
    ?>
</head>
<body class="page"> 
<header class="cabecalho" >

<h1 class="#">
	<a href="index.php">Matemática</a>
</h1>
</header>
<nav class="menu">
        <ul>
            <li><a href="#"><i>Quatro Operações</i></a>
                <ul>
                    <li><a href="soma.php">Adição</a></li>
                    <li><a href="subtracao.php">Subtração</a></li>
                    <li><a href="multiplicacao.php">Multiplicação</a></li>
                    <li><a href="divisao.php">Divisão</a></li>
                </ul>
            </li>
            <li><a href="#" class="#"><i>Áreas dos Polígonos</i></a>
                <ul>
                    <li><a href="quadrado.php">Área do quadrado</a></li>
                    <li><a href="retangulo.php">Área do retângulo</a></li>
                    <li><a href="trapezio.php">Área do trapézio</a></li>
                    <li><a href="losango.php">Área do losango</a></li>
                    <li><a href="paralelograma.php">Área do paralelograma</a></li>
                </ul>
            </li>
        </ul>
    </nav>

	<form class="sla" action="losango.php" method="post">
	Área do losango<br>
	Uma das maneiras de calcular a área de um losango é multiplicando-se as suas diagonais e dividindo o resultado obtido pela metade.
	<nav class="b2">
    <nav class="test">
    	Área do losango<br>
		<input type="number" placeholder="Diagonal Maior" name="dM">
		<br>
		<input type="number" placeholder="Diagonal Menor" name="dm">
		<br>
		<input type="number" placeholder="Resultado" readonly="true" name="res" value="<?php echo $resultado ?>">
		
		<br>
		<input type="submit" readonly="true" name="calcular">
		</nav>
    </nav>
    <p>Todos os direitos reservados - Elgatões © </p>
</form>
</body>
</html>