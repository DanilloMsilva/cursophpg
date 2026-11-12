<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <main>
        <?php
        $valor = $_GET["valor"] ?? "Sem valor";
        echo "Este é o valor informado: ", $valor;
        echo "<br>";
        echo "Este é o número anterior: ", $valor - 1;
        echo "<br>";
        echo "Este é o número posterior: ", $valor + 1;
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>

</html>