<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio PHP</title>
</head>
<body>
    <?php
    // Capturando os dados do formulário
    $nasc = $_GET['valor1'] ?? 0;
    $ano = $_GET['valor2'] ?? 0; 
    ?>

    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">

            <label for="valor1">Em que ano você nasceu?</label>
            <input type="number" name="valor1" id="valor1" value="<?= $nasc ?>" min="0" step="0.01">

            <label for="valor2">Quer saber a sua idade em que ano?</label>
            <input type="number" name="valor2" id="valor2" value="<?= $ano ?>" min="0" step="0.01">

            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado da idade</h2>

        <?php

        $idade = $ano - $nasc;
        

        echo "Quem nasceu em $nasc vai ter <strong> $idade anos </strong> em $ano!";
        
        ?>
    </section>
</body>
</html>