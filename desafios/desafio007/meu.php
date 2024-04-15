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
        $salario = intval($_GET['salario'] ?? $minimo);
        $salMin = 1412;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="" method="get">
            <label for="salario">Salário (R$):</label>
            <input type="number" id="salario" name="salario" step="0.01" value="<?=$salario?>">
            <p>Considerando o salário mínimo de <strong>R$ 1.412,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            // Calculo
            $qntSal = intdiv($salario, $salMin);
            $diferenca = $salario % $salMin;

            echo "<p>Quem recebe um salário de R\$ ". number_format($salario, '2', ',', '.') ." ganha<strong> ". $qntSal ." salários mínimos</strong> + R\$" . number_format($diferenca, '2', ',','.') .".</p>";
        ?>
    </section>
</body>
</html>