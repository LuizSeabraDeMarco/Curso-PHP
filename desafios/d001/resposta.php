<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php 
                $n = $_REQUEST["num"] ?? 0;
                $a = $n - 1;
                $s = $n + 1;
                echo "Antecessor de <strong>$n</strong> é <strong>$a</strong>";
                echo "<br>Sucessor de <strong>$n</strong> é <strong>$s</strong>";
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05Voltar</button>
    </main>
</body>
</html>