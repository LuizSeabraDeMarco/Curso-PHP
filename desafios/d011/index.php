<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        //Capturando os dados do Formulario Retroalimentrar
        $valor1 = $_GET['v1'] ??0;
        $valor2 = $_GET['v2'] ??0;
    ?>
    <main>
        <h1>Somador de Valores</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <!-- v1 = valor e v2 = porcentagem -->
            <label for="v1">Preço do produto (R$)</label> 
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <label for="v2">Qual será a porcentagem de reajuste? (<?=$valor2?>%)</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado da Soma</h2>
        <?php 
            $valor = $valor1;
            $porcentagem = $valor2;
            $resultado = $valor + ($valor * $porcentagem / 100);
            print "$resultado"
        ?>
    </section>
</body>
</html>