<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP aula 2.5</title>
</head>

<body>
    <h1>Loops - Tabuada</h1>

    <?php

$num = 5;

for ($i = 0; $i <= 10; $i++) {
    $result = $num * $i;
    echo "{$num} x {$i} = {$result}<br>";
}

?>

</body>

</html>