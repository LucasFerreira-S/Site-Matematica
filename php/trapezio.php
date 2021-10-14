<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Trapézio</title>
	<link rel="stylesheet" type="text/css" href="../css/trap.css">
    <link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
	<?php 
		if($_POST){
	    	$base = $_POST ['bas'];
	    	$baseM = $_POST['base'];
	    	$altura = $_POST['altura'];
			$resultado = (($base + $baseM) * $altura)/2;
		}	
    ?>
</head>
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
<body class="page"> 
	<form class="sla" action="trapezio.php" method="post">
    Área do Trapézio<br>
    A área do trapézio é a medida correspondente a superfície dessa figura da geometria plana. O cálculo da sua área é o produto entre a soma das medidas das bases pela altura, e dividindo o resultado por 2.
	<nav class="b2">
    <nav class="test">
	Área do Trapézio<br>
		<input type="number" name="bas" placeholder="Base maior">
		<br>
		<input type="number" name="base" placeholder="Base menor">
		<br>
		<input type="number" name="altura" placeholder="Altura"><br>
		<br>
		<input type="number" readonly="true" placeholder="Resultado" name="res" value="<?php echo $resultado ?>">
        <input type="submit" readonly="true" value="Calcular" name="calcular">
</nav>
</nav>
<p>Todos os direitos reservados - Elgatões © </p>
</form>
</body>
</html>