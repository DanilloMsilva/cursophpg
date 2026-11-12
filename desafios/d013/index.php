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
    // (int) garante que o valor é um número inteiro, que é o que o intdiv exige
    $saque = (int) ($_GET['saque'] ?? 0);
    ?>

    <main>
        <h1>Caixa Eletrônico</h1>

        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
            <label for="saque">Qual valor você deseja sacar? (R$)</label>
            <input type="number" name="saque" id="saque" value="<?= $saque ?>" min="0">
            <p>Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section id="resultado">
        <h2>Saque de R$ <?= number_format($saque, 2, ",", ".") ?> realizado</h2>

        <?php
        // A "mochila" começa com o valor do saque
        $sobra = $saque;

        // Notas de 100: quantas cabem e o que sobrou
        $notas100 = intdiv($sobra, 100);
        $sobra = $sobra % 100;

        // Notas de 50: usa o que sobrou das notas de 100
        $notas50 = intdiv($sobra, 50);
        $sobra = $sobra % 50;

        // Notas de 10: usa o que sobrou das notas de 50
        $notas10 = intdiv($sobra, 10);
        $sobra = $sobra % 10;

        // Notas de 5: usa o que sobrou das notas de 10
        $notas5 = intdiv($sobra, 5);
        $sobra = $sobra % 5;

        echo "<p>O caixa eletrônico vai te entregar as seguintes notas:</p>";
        echo "<ul>";
        echo "<li>$notas100 notas de R$ 100</li>";
        echo "<li>$notas50 notas de R$ 50</li>";
        echo "<li>$notas10 notas de R$ 10</li>";
        echo "<li>$notas5 notas de R$ 5</li>";
        echo "</ul>";
        ?>
    </section>
</body>
</html>