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
    $smin = 1618;
    $salario = $_GET['salario'] ?? $smin;
    ?>
    <main>
        <h1> Informe o seu Salario </h1>
        <!-- Formulário de soma que se retroalimenta para o mesmo arquivo, PHP_SELF faz mandar para o caminho onde o arquivo está -->
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" value = "<?=$salario?>" step="0.01">
            <p>Considerando o salário mínimo de <strong>R$<?= number_format($smin, 2, ",", ".") ?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado final</h2>
        <?php 
        $divisor = intdiv($salario, $smin);
        $resto = $salario % $smin;
        echo "<p>Quem recebe um salario de R\$". number_format($salario, 2, ",", ".") . " ganha <strong>$divisor salarios</strong> + R\$". number_format($resto, 2, ",", ".") ."</p>";
        ?>
    </section>
</body>
</html>