<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Aula 2.1</title>
</head>

<body>

    <h1>Olá Mundo em PHP</h1>
    <p><?php echo "Olá Mundo!" ?></p>

    <div id="conta"><?php
                    echo 10 + 10;
                    ?></div>

    <div id="teste"><?= "Olá Terra!" ?></div>

    <?php echo 'img src="" alt="imagem aleatória">' ?>

    <?php
    echo '<script>';
    echo 'alert("Olá Mundo!");';
    echo '</script';

    ?>
    <!--Isso é um comentário HTML-->
    <?php // Isso é um comentário em PHP.
    ?>
    <?php
    /*Isso é um comentário com várias linhas em php*/ ?>

</body>

</html>