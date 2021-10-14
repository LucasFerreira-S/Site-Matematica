<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Você escolheu Adicao</title>
    <link rel="stylesheet" type="text/css" href="../css/soma.css">
    <link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
    <?php 

    if($_POST){
    
        $n1 = $_POST['numero1'];   
        $n2 = $_POST['numero2'];
        $RESUL= $n1+$n2;
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
    Adição<br>
    Operação com o objetivo de somar (+), ou seja, ela agrupa dois números, as quais, se somarmos tornam-se apenas um. É possível obter através dela, a contagem real de tudo o que possuímos em tempo presente até que ocorra aumento de materias.
    <nav class="b2">
    <nav class="test">
        Adição<br>
        <input type="number" name="numero1" name="numero1" placeholder="Numero 1"><br>
        <input type="number" name="numero2" placeholder="Numero 2"><br>
        <input type="number" name="resultado" readonly="true" placeholder="Resultado" value="<?php echo $RESUL ?>">
        <br><input type="submit">
    </nav>
    </nav>
    <p>Todos os direitos reservados - Elgatões © </p>
</form>
</body>
</html>