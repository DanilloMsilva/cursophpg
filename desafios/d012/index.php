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
    $segundos = (int) ($_GET['segundos'] ?? 0);
    ?>

    <main>
        <h1>Calculadora de Tempo</h1>

        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">

            <label for="segundos">Qual o total de segundos?</label>
            <input type="number" name="segundos" id="segundos" value="<?= $segundos ?>" min="0">

            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="resultado">
        <h2>Totalizando tudo</h2>

        <?php
        // Minhas anotações:
        // 60 segundos = 1 minuto
        // 1 hora = 60 x 60 = 3600 segundos
        // 1 dia = 24 x 3600 = 86400 segundos
        // 1 semana = 7 x 86400 = 604800 segundos

        // A "mochila" começa com todos os segundos digitados
        $sobra = $segundos;

        // Semanas: quantas cabem na mochila e o que sobrou
        $semanas = intdiv($sobra, 604800);
        $sobra = $sobra % 604800;

        // Dias: usa o que sobrou das semanas
        $dias = intdiv($sobra, 86400);
        $sobra = $sobra % 86400;

        // Horas: usa o que sobrou dos dias
        $horas = intdiv($sobra, 3600);
        $sobra = $sobra % 3600;

        // Minutos: usa o que sobrou das horas
        // (o resto da divisão por 60 não são os minutos, são os segundos soltos)
        $minutos = intdiv($sobra, 60);
        $sobra = $sobra % 60;

        // O que sobrou depois dos minutos já são os segundos
        $segundosFinais = $sobra;

        echo "<p>Analisando o valor que você digitou, <strong>$segundos segundos</strong> equivalem a um total de:</p>";
        echo "<ul>";
        echo "<li>$semanas semanas</li>";
        echo "<li>$dias dias</li>";
        echo "<li>$horas horas</li>";
        echo "<li>$minutos minutos</li>";
        echo "<li>$segundosFinais segundos</li>";
        echo "</ul>";
        ?>
    </section>
</body>
</html>