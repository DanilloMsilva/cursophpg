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
    $numero = $_GET['numero'] ?? 0;
    ?>
    <main>
        <h1>Cálculo de Raízes</h1>
        <!-- Formulário de raízes que envia os dados para o próprio arquivo -->
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
            <label for="numero">Informe um valor</label>
            <input type="number" name="numero" id="numero" value="<?= $numero ?>" min="0" step="0.01">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado final</h2>
        <?php
        $raizq = sqrt($numero);
        $raizc = pow($numero, 1/3);

        echo "Analisando o número: <strong>", $numero, "</strong>";
        
        echo "<br>A sua raiz quadrada: <strong>" . number_format($raizq, 3, ",", ".") . "</strong>";
        echo "<br>A sua raiz cúbica: <strong>" . number_format($raizc, 3, ",", ".") . "</strong>";
        ?>
    </section>
</body>
</html>