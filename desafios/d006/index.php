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
     $valor1 = $_GET['v1'];
     $valor2 = $_GET['v2'];
    ?>
    <main>
        <h1> Anatomia de uma divisao </h1>
        <!-- Formulário de soma que se retroalimenta para o mesmo arquivo, PHP_SELF faz mandar para o caminho onde o arquivo está -->
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
            <label for="v1">Dividendo</label>
            <input type="number" name="v1" id="v1" value = "<?=$valor1?>">
            <label for="v2">Divisor</label>
            <input type="number" name="v2" id="v2" value = "<?=$valor2?>">
            <input type="submit" value="Dividir">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado da divisao</h2>
        <?php 
        $div = intdiv($valor1, $valor2);
        $resto = $valor1 % $valor2;
        echo "<p>A divisao entre os valores <strong>$valor1</strong> e <strong>$valor2</strong> é: <strong>$div</strong>. <br> E o resto é: <strong>$resto</strong>. </p>";
        ?>

    <table class="divisao">
                <tr>
                    <td><?= $valor1 ?></td>
                    <td><?= $valor2 ?></td>
                </tr>
                <tr>
                    <td><?= $resto ?></td>
                    <td><?= $div ?></td>
                </tr>
            </table>

    </section>
</body>
</html>