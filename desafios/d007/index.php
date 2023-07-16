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
        $salario = $_GET['salar'] ??0;
    ?>
    <main>
        <h1>Informe o seu salario</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="salar">Salario (R$)</label> 
            <input type="number" name="salar" id="salar" value="<?=$salario?>">
            <p>Considerando o salário minimo de <strong>R$1.380</strong></p>
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php 
            //Colocar expreções de conta
            $min = 1380;
            $resultado = $salario / $min;
            $int = (int)$resultado;
            $resto = $salario % $min;
            print"<p>Quem recebe um salário de R$$salario ganha <strong>$int salários minimos</strong> + R$$resto</p>";
            echo date("Y");
        ?>
    </section>
</body>
</html>