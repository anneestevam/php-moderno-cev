<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raízes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $numero = $_GET['numero'] ?? 0;
    ?>
    <main>
        <h1>Informe um Número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Número:</label>
            <input type="number" id="numero" name="numero" value="<?=$numero?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            $rQuadrada = $numero ** (1/2);
            $rCubica = $numero ** (1/3);

            echo "<p>Analisando o <strong>número " . $numero . "</strong>, temos:</p>";
            echo "<ul>";
            echo "<li>A sua raiz quadrada é <strong>". number_format($rQuadrada, 3, ',', '.') ."</strong></li>";
            echo "<li>A sua raiz cúbica é <strong>" . number_format($rCubica, '3', ',', '.') . "</strong></li>";
            echo "<ul>";
        ?>
    </section>
</body>
</html>