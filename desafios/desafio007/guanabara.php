<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário Mínimo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $minimo = 1_380.60;
        $salario = $_GET['salario'] ?? $minimo;
    ?>
    <main>
        <h1>Informe seu Salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário (R$):</label>
            <input type="number" id="salario" name="salario" step="0.01" value="<?=$salario?>">
            <p>Considerando o salário mínimo de <strong>R$ <?=number_format($minimo, 2, ',', '.')?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            $total = intdiv($salario, $minimo);
            $diferenca = $salario % $minimo;

            echo "<p>Quem recebe um salário de R\$ " . number_format($salario, 2, ',', '.') . " ganha <strong>" . $total . " salários mínimos</strong> + R\$ " . number_format($diferenca, 2, ',', '.') . ".</p>";
        ?>
    </section>
</body>
</html>