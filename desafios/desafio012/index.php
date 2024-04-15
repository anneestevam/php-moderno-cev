<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $total = $_GET['ts'] ?? 0;
        ?>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="ts">Qual é o total de segundos?</label>
            <input type="number" id="ts" name="ts" step="1" min="1" value="<?=$total?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <?php 
            // Semana 604800
            // Dia 86400
            // Hora 3600
            // Minuto 60

            $sobra = $total;
            // Semanas
            $semanas = intdiv($sobra, 604_800);
            $sobra = $sobra % 604_800;
            // Dias
            $dias = intdiv($sobra, 86_400);
            $sobra = $sobra % 86_400;
            // Horas
            $horas = intdiv($sobra, 3600);
            $sobra = $sobra % 3600;
            // Minutos
            $minutos = intdiv($sobra, 60);
            // Segundos
            $segundos = $sobra % 60;


        ?>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?=number_format($total,0 , ',', '.')?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><?=$semanas?> semanas</li>
            <li><?=$dias?> dias</li>
            <li><?=$horas?> horas</li>
            <li><?=$minutos?> minutos</li>
            <li><?=$segundos?> segundos</li>
        </ul>
    </section>
</body>
</html>