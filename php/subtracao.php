<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Você escolheu Subtração</title>
    <link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/sub.css">
    <?php 
    if($_POST){
        $n1 = $_POST['numero1'];
        $n2 = $_POST['numero2'];
        $RESUL= $n1-$n2;
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

<form class="sla" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
Subtração<br>
Nela pode se calcular quanto será o valor real se removermos um valor que é chamado de minuendo, de outro que é conhecido como subtraendo. Essa operação é simbolizada por a-b = c, ou seja, o minuendo menos o subtraendo é igual ao restante que sobra, e também pode ser representada pelo sinal (–).
<nav class="b2">
		<nav class="test">
            Subtração<br>
    <input type="number" name="numero1" placeholder="Numero 1"><br>
    <input type="number" name="numero2" placeholder="Numero 2"><br>
    <input type="number" readonly="true" name="resultado" placeholder="Resultado" value="<?php echo $RESUL ?>"><br>
    <input type="submit">
</nav>
</nav>
<p>Todos os direitos reservados - Elgatões © </p>
</form>
</body>
</html>
