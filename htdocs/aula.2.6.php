<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>

<body>

    <?php

    for ($x = 1; $x <= 10; $x++) {

        for ($i = 0; $i <= 10; $i++) {
            $result = $x * $i;
            echo "{$x} x {$i} = {$result}<br>";
        }
        echo "<hr>";
    }

    ?>

</body>

</html>