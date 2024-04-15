<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias Aritméticas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET['v1'] ?? 0;
        $valor2 = $_GET['v2'] ?? 0;
        $peso1 = $_GET['p1'] ?? 1;
        $peso2 = $_GET['p2'] ?? 1;
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">1º Valor:</label>
            <input type="number" id="v1" name="v1" value="<?=$valor1?>">
            <label for="p1">1º Peso:</label>
            <input type="number" id="p1" name="p1" min="1" value="<?=$peso1?>">
            <label for="v2">2º Valor:</label>
            <input type="number" id="v2" name="v2" value="<?=$valor2?>">
            <label for="p2">2º Peso:</label>
            <input type="number" id="p2" name="p2" min="1" value="<?=$peso2?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <?php 
            // Cálculo Média Simples
            $mSimples = ($valor1 + $valor2) / 2;

            // Cálculo Média Ponderada
            $mPonderada = (($valor1 * $peso1) + ($valor2 * $peso2)) / ($peso1 + $peso2);

            echo "<p>Analisando os valores de $valor1 e $valor2:</p>";
            echo "<ul><li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a " . number_format($mSimples, 2, ',', '.') . "</li>";
            echo "<li>A <strong>Média Aritmética Ponderada</strong> entre os valores com pesos " . $peso1 . " e " . $peso2 . " é igual a ". number_format($mPonderada, 2, ',', '.') . "</li></ul>";
        ?>
    </section>
</body>
</html>