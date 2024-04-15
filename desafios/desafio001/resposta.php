<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor - Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Antecessor e Sucessor</h1>
    </header>
    <main>
        <?php 
            $numero = $_GET["numero"];
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;

            echo "<h1>Resultado Final</h1>";
            
            echo "<p> O <strong>número</strong> digitado foi <strong>$numero</strong>.</p>";

            echo "<p>O seu <em>antecessor</em> é <strong>$antecessor</strong>.</p>";

            echo "<p>O seu <em>sucessor</em> é <strong>$sucessor</strong>.</p>"
        ?>

        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>