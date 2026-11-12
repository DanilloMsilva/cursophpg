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
    $valor1 = $_GET['valor1'] ?? 0;
    $valor2 = $_GET['valor2'] ?? 0;
    $peso1 = $_GET['peso1'] ?? 0;
    $peso2 = $_GET['peso2'] ?? 0;     
    ?>
    <main>
        <h1>Medias Aritmedicas</h1>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">

            <label for="valor1">Valor 1</label>
            <input type="number" name="valor1" id="valor1" value="<?= $valor1 ?>" min="0" step="0.01">

            <label for="peso1">Peso 1</label>
            <input type="number" name="peso1" id="peso1" value="<?= $peso1 ?>" min="0" step="0.01">

            <label for="valor2">Valor 2</label>
            <input type="number" name="valor2" id="valor2" value="<?= $valor2 ?>" min="0" step="0.01">

            <label for="peso2">Peso 2</label>
            <input type="number" name="peso2" id="peso2" value="<?= $peso2 ?>" min="0" step="0.01">

            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado das Medias</h2>

        <?php

        $mediaa = ($valor1 + $valor2) / 2;
        
        $resultado1 = $valor1 * $peso1;
        $resultado2 = $valor2 * $peso2;
        $soma1 = $resultado1 + $resultado2;
        $soma2 = $peso1 + $peso2;
        $mediap = $soma1/$soma2;

        echo "Analisando os valores: <strong> $valor1 </strong> e <strong> $valor2 </strong>" ;
        
        echo "<br>A sua media aritmedica: <strong>" . number_format($mediaa, 1, ",", ".") . "</strong>";
        echo "<br>A sua media ponderada: <strong>"  . number_format($mediap, 1, ",", ".") . "</strong>";
        
        ?>
    </section>
</body>
</html>