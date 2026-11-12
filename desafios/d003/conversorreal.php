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
        <h1>Conversão em Dólar</h1>
    </header>
    <main>
        <?php
        $valor = $_GET["valor"] ?? "Sem valor";
        $dolar = $valor / 5.55;
        
        $padrao = numfmt_create("pt_BR" , NumberFormatter::CURRENCY);

        echo "<p> O Valor informado: " . numfmt_format_currency($padrao, $valor, "BRL") . "<br> E em Dólar: <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>"

        //echo "Este é o valor informado: ", $valor;
        //echo "<br>";
        //echo "Este é o valor em Dólar: ", $dolar;

        // <?php
        //$valor = $_GET["valor"] ?? 0;
        //$dolar = $valor / 5.55;

        //echo "<p>O valor informado: R$ " . number_format($valor, 2, ",", ".") . "</p>";
        //echo "<p>Em dólar: US$ " . number_format($dolar, 2, ",", ".") . "</p>";
        //
         /*<p><a href="javascript:history.go(-1)">Voltar</a></p>*/
        ?>

        <button onclick="javascript:history.go(-1)">Voltar</button>

    </main>
</body>

</html>