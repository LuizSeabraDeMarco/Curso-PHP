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
        <!-- v1 = dividendo e v2 = divisor -->
            <label for="v1">Dividendo</label> 
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <label for="v2">Divisor</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado da Soma</h2>
        <?php 
            $soma = $valor1 / $valor2;
            $resto = $valor1 % $valor2;
            print "<p>O dividendo é <strong>$valor1</strong> e o divisor é <strong>$valor2</strong> o resultado é <strong>$soma</strong>, já o resto é <strong>$resto</strong></p>"
        ?>
    </section>
</body>
</html>