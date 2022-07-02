<?php 

echo 
$page_title = 'PHP Aula 2.3 - HereDoc';
$my_html = <<<HTML

<!--Todas as vezes que eu precisar escrever 
muitos códigos, daremos a preferência para 
HEREDOC-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$page_title}</title>
</head>
<body>
    <h1>HereDoc<h1>
        
</body>
</html>


HTML;

echo $my_html;
?>