<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Quadrado</title>
	<link rel="stylesheet" type="text/css" href="../css/quad.css">
	<link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
	<?php 
			if($_POST){
	    	$var1 = $_POST['valor1'];
	    	$var2 = $_POST['valor2'];
			$resultado = $var1 * $var2;
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
	<form class="sla" action="quadrado.php" method="post" >
	Área do Quadrado<br>
	Um quadrado, por si só, já é regular pois, por definição, é um quadrilátero cujos lados são sempre iguais.

Calculamos a sua área multiplicando a sua base pela sua altura.
		<nav class="b2">
			<nav class="test">
				Área do quadrado<br>
		<input type="text" name="valor1" placeholder="Primeiro Valor">
		<br>
		<input type="text" name="valor2" placeholder="Segundo Valor">
		<br>
		<input type="number" name="resultado" readonly="true" placeholder="Resultado" value="<?php echo $resultado ?>"> <br>
		<input type="submit" readonly="true" name="calcular">
		</nav>
		</nav>
		<p>Todos os direitos reservados - Elgatões © </p>
    </form>
</body>
</html>