<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sorteio</title>
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <header>
      <h1>Sorteador</h1>
    </header>
  
    <main>
      <h1>Numeros Randomicos</h1>
        <?php 
        $sorteio = mt_rand(0, 100);
        echo "Sorteando um número entre 0 e 100...";
        echo "<br> O numero sorteado é: " , $sorteio;
        ?>
        <button onclick=javascript:document.location.reload()>&#x1F504; Sortear</button>
    </main>
  </body>
</html>
