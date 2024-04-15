<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de Preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $preco = $_GET['preco'] ?? '0';
            $reajuste = $_GET['reajuste'] ?? '0';
        ?>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do Produto (R$):</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?=$preco?>">
            <label for="reajuste">Qual será o valor do reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="reajuste" id="reajuste" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$reajuste?>">
            <input type="submit" value="Reajustar">

        </form>
    </main>
    <section>
        <?php 
            $vAtualizado = (($reajuste * $preco) / 100) + $preco;
        ?>
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava R$<?=number_format($preco, 2, ',', '.')?> com <strong><?=$reajuste?>% de aumento</strong> vai passar a custar <strong>R$<?=number_format($vAtualizado, 2, ',', '.')?></strong>  a partir de agora.</p>
    </section>
    <script>
        // Declaraçoes automáticas
        mudaValor()

        function mudaValor() {
            p.innerText = reajuste.value;
        }
    </script>
</body>
</html>