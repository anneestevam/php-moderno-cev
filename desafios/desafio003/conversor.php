<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php
            $real = $_GET["real"] ?? 0;
            $dolar = $real / 5.03;

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<h1>Conversor Real -> Dólar v1.0</h1>";
            echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";
            echo "<small><strong>*Cotação fixa de R\$5,03</strong> informada no código.</small>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>