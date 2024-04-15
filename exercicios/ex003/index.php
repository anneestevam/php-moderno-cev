<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivo em PHP</title>
</head>
<body>
    <h1>Testes de tipos primitivos</h1>
    <?php
        // 0x = hexadecimal, 0b = binário, 0 = octal
        // $num = 010;
        // echo "O valor da variável é $num.";

        // $v = "Maria";
        // var_dump($v);

        // $num = (integer) 3e1;
        // echo "O valor é $num.";
        // var_dump($num);

        // $num = (float) "950";
        // var_dump($num);

        // $casado = true;
        // var_dump($casado);
        // print "O valor para casado é $casado."

        // $vet = [6, 5.3, false, "maria"];
        // echo "O vetor é $vet";
        // var_dump($vet);

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>