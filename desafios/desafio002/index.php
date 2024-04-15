<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerando Números Aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $numero_aleatorio = mt_rand(0, 100);

            echo "<h1>Números aleatórios com PHP</h1>";
            echo "<p>Gerando um número aleatório entre 0 e 100.</p>";
            echo "<p>O número gerado é <strong>$numero_aleatorio</strong>.</p>";            
        ?>

        <button onclick="javascript:document.location.reload()">Gerar outro número</button>
    </main>
</body>
</html>