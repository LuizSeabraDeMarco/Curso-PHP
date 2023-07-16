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
        $atual =date("Y");
        $nasc = $_GET['nasc'] ?? '2000';
        $ano = $_GET['ano'] ?? $atual;
    ?>
    <main>
        <h1>Somador de Valores</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <!-- v1 = dividendo e v2 = divisor -->
            <label for="nasc">Em que ano voce nasceu?</label> 
            <input type="number" name="nasc" id="nasc" min="1900" max = <?=$atual?> value="<?=$nasc?>">
            <label for="ano">Quer saber sua idade em que ano? (atualmente estamos em <STRONG><?=$atual?></STRONG>)</label>
            <input type="number" name="ano" id="ano" min="1900"value="<?=$ano?>">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section id="resultado">
        <?php 
            $idade = $ano - $nasc;
        ?>
        <h2>Resultado da Soma</h2>
        <p>Quem nasceu em <?=$nasc?> vai ter <strong><?=$idade?></strong> anos em <?=$ano?></p>
    </section>
</body>
</html>