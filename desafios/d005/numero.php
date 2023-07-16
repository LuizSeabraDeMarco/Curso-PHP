<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisadorde numero real</h1>
        <?php 
            $num = $_POST["n"] ?? 0;

            echo "<p>Analisando o número  <strong>". number_format($num,3, ",",".")."</strong> informado pelo usuario</p>";

            $int = (int) $num;
            $fra = $num-$int;

            echo "<ul><li> A parte inteira do numero é <strong>".number_format($int,0, ",",".")."</strong>";

            echo "<li> A parte fracionaria do numero é <strong>".number_format($fra,3, ",",".")."</strong></ul>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>