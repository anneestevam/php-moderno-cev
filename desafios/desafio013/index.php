<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico do CeV</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 60px;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $totSaque = $_GET['valor'] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" id="valor" name="valor" min="5" step="5" value="<?=$totSaque?>">
            <p><small><sup>*</sup>Notas disponíveis: R$100, R$50, R$10, R$5</small></p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <?php 
            $sobra = $totSaque;
            // Notas de 100
            $n100 = intdiv($sobra, 100);
            $sobra %= 100;
            // Notas de 50
            $n50 = intdiv($sobra, 50);
            $sobra %= 50;
            // Notas de 10
            $n10 = intdiv($sobra, 10);
            $sobra %= 10;
            // Notas de 5
            $n5 = intdiv($sobra, 5);
        ?>
        <h2>Saque de R$<?=number_format($totSaque, 2, ',', '.')?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="./imagens/100-reais.jpg" alt="Nota de 100" class="nota"> x<?=$n100?></li>
            <li><img src="./imagens/50-reais.jpg" alt="Nota de 50" class="nota">x<?=$n50?></li>
            <li><img src="./imagens/10-reais.jpg" alt="Nota de 10" class="nota">x<?=$n10?></li>
            <li><img src="./imagens/5-reais.jpg" alt="Nota de 5" class="nota">x<?=$n5?></li>
        </ul>
    </section>
</body>
</html>