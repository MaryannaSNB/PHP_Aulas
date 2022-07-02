<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP aula 2.2</title>
</head>

<body>

    <h1>Variáveis</h1>

    <?php

    // Define uma variável:
    $house_color = 'azul';

    $text = "A cor da casa é " . $house_color;

    $text2 = "<br>A cor da casa é {$house_color}.";

    $text3 = '<br>A cor da casa é {$house_color}.';

    $text4 = `<br>A cor da casa é {$house_color}.`;

    $text5 = '<br>A \cor da casa\ é {$house_color}.';

    echo $text;

    echo $text2;

    echo $text3;

    echo $text4;

    echo $text5;

    /*Para concatenar em php é usado o '.'*/

    ?>

</body>

</html>