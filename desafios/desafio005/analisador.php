<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Analisador de Número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $numero = $_GET["numero"] ?? 0;
            $numInteiro = (int) $numero; // pegando a parte inteira do numero
            $numFracao = $numero - $numInteiro;

            echo"<h1>Analisando um Número Real</h1>";
            echo"<p>Analisando o número <strong>" . number_format($numero, '3', ',','.') . "</strong> informado pelo usuário:</p>";
            echo"<ul type='disc'><li>A parte inteira do número é <strong>" . number_format($numInteiro, '0', ',','.') ."</strong>.</li><li>A parte fracionária do número é <strong>" . number_format($numFracao, '3', ',','.') . "</strong>.</li></ul>";
        ?>
        <button onclick="javascipt:history.go(-1)">Voltar</button>
    </main>
</body>
</html>