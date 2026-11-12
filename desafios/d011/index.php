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
    $produto = $_GET['valor1'] ?? 0;   // preço antigo do produto
    $reajuste = $_GET['valor2'] ?? 0;  // percentual de aumento (ex.: 20 = 20%)
    ?>

    <main>
        <h1>Reajuste de preço</h1>

        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">

            <label for="valor1">Preço do Produto (R$)</label>
            <input type="number" name="valor1" id="valor1" value="<?= $produto ?>" min="0" step="0.01">

            <label for="valor2">Qual será o percentual de reajuste? () </label>
            <input type="number" name="valor2" id="valor2" value="<?= $reajuste ?>" min="0" step="0.01">

            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado da Reajuste</h2>

        <?php
        // 1) Transforma o percentual em fatia: 20% vira 0,20
        $fatia = $reajuste / 100;

        // 2) Descobre quanto é o aumento em reais: fatia x preço antigo
        $aumento = $fatia * $produto;

        // 3) Soma o aumento ao preço antigo e chega no preço novo
        $precoNovo = $produto + $aumento;

        // number_format(número, casas decimais, símbolo da vírgula, símbolo do milhar)
        echo "O produto que custava <strong>R$ " . number_format($produto, 2, ",", ".") . "</strong>, ";
        echo "com <strong>" . number_format($reajuste, 2, ",", ".") . "%</strong> de aumento ";
        echo "vai passar a custar <strong>R$ " . number_format($precoNovo, 2, ",", ".") . "</strong>.";
        ?>
    </section>
</body>
</html>