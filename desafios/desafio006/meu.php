<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma Divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = isset($_GET['dividendo']) ? (int)$_GET['dividendo'] : 0;
        $divisor = isset($_GET['divisor']) ? (int)$_GET['divisor'] : 1;
    ?>

    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" id="dividendo" name="dividendo" value="0">
            <label for="divisor">Divisor</label>
            <input type="number" id="divisor" name="divisor" value="0">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <h2>Estrutura da Divisão</h2>
        
        <?php
            if ($divisor != 0) {
                $quociente = intdiv($dividendo, $divisor);
                $resto = $dividendo % $divisor;
    
                echo "<p>O dividendo é $dividendo.</p>";
                echo "<p>O dividor é $divisor.</p>";
                echo "<p>O quociente é " . number_format($quociente, '0', ',', '.') . ".</p>";
                echo "<p>O resto da divisão é $resto.</p>";
            } else {
                echo "<p>Erro: O divisor não pode ser zero.</p>";
            };
        ?>
    </section>
</body>
</html>