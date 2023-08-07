<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    //capturando os dados do formulário retroalimentado
    $primVl = $_GET['primeiroVl'] ?? 0;
    $segVl  = $_GET['segundoVl'] ?? 0;
    ?>
    <main> 
        <h1>Somador de valores</h1>
             <!-- Manda os dados para o próprio arquivo -->
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="primeiroVl">Primeiro Valor</label>
            <input type="number" name="primeiroVl" id="primeiroVl" value="<?= $primVl ?>">

            <label for="segundoVl">Segundo Valor</label>
            <input type="number" name=segundoVl id="segundoVl" value="<?= $segVl ?>">

            <input type="submit" value="Somar">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado da soma</h2>
        <?php 
          $soma = $primVl + $segVl;
          print "<p>A soma entre os valores $primVl e $segVl é igual a: $soma</p>"  
        ?>
    </section>
</body>

</html>
